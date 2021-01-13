<?php

namespace App\Http\Controllers;

use App\Http\Requests\Academy\SearchAcademyRequest;
use App\Http\Requests\Academy\StoreAcademyRequest;
use App\Http\Requests\Academy\UpdateAcademyRequest;
use App\Models\Academy;
use App\Models\Photograph;
use App\Models\Tag;
use App\Notifications\AcademyVerified;
use App\Repositories\Constants;
use App\Traits\ImageUpload;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AcademyController extends Controller
{
    use ImageUpload;

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Academy::class, 'academy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        $academies = Academy::query()->with('tags')->paginate(Constants::academyPerPage);

        return view('components.academies', ['academies' => $academies]);
    }

    /**
     * Display a listing of the resource.
     *
     * @param SearchAcademyRequest $request
     * @return Application|Factory|View
     */
    public function search(SearchAcademyRequest $request): Application|Factory|View
    {
        $searchAcademy = $request->get('search-academy');

        $academies = Academy::query()
            ->whereHas('tags', function ($query) use ($searchAcademy) {
                $query->where('name', 'LIKE', "%$searchAcademy%");
            })
            ->orWhere('name', 'LIKE', "%$searchAcademy%")
            ->orWhere('website', 'LIKE', "%$searchAcademy%")
            ->orWhere('country', 'LIKE', "%$searchAcademy%")
            ->orWhere('state', 'LIKE', "%$searchAcademy%")
            ->orWhere('city', 'LIKE', "%$searchAcademy%")
            ->orWhere('description', 'LIKE', "%$searchAcademy%")
            ->orWhere('motto', 'LIKE', "%$searchAcademy%")
            ->orWhere('date_of_establishment', 'LIKE', "%$searchAcademy%")
            ->get();

        return view('components.filtered-academies', ['academies' => $academies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Factory|View|Application
    {
        return view('components.create-academy', ['countries' => Constants::countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAcademyRequest $request
     * @return RedirectResponse
     */
    public function store(StoreAcademyRequest $request): RedirectResponse
    {
        $academy = new Academy([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'website' => $request->website,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'description' => $request->description,
            'motto' => $request->motto,
            'date_of_establishment' => $request->date_of_establishment,
            'verified' => false,
        ]);

        if ($request->hasFile('logo')) {
            $filePath = $this->ImageUpload($request->file('logo'));

            $academy->logo = $filePath;
        }

        $academy->save();

        if ($request->tags !== null) {
            $tagNames = explode(' ', $request->tags);

            $tags = [];

            foreach ($tagNames as $tagName) {
                $tag = Tag::query()->firstOrCreate(['name' => $tagName]);

                array_push($tags, $tag);
            }

            $tags = collect($tags);

            $academy->tags()->attach($tags->pluck('id'));
        }

        if ($request->hasFile('photographs')) {
            foreach($request->file('photographs') as $photograph){
                $filePath = $this->ImageUpload($photograph);

                Photograph::query()->create([
                    'academy_id' => $academy->id,
                    'photograph' => $filePath,
                ]);
            }
        }

        return redirect()->route('academies.show', $academy);
    }


    public function show(Academy $academy): Factory|View|Application
    {
        return view('components.show-academy', ['academy' => $academy]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Academy $academy
     * @return Application|Factory|View
     */
    public function edit(Academy $academy): Factory|View|Application
    {
        return view('components.edit-academy', ['academy' => $academy, 'countries' => Constants::countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAcademyRequest $request
     * @param Academy $academy
     * @return RedirectResponse
     */
    public function update(UpdateAcademyRequest $request, Academy $academy): RedirectResponse
    {
        $academy->update([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'website' => $request->website,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'description' => $request->description,
            'motto' => $request->motto,
            'date_of_establishment' => $request->date_of_establishment,
            'verified' => false,
        ]);

        if ($request->hasFile('logo')) {
            $filePath = $this->ImageUpload($request->file('logo'));

            $academy->update(['logo' => $filePath]);
        }

        if ($request->tags !== null) {
            $tagNames = explode(' ', $request->tags);

            $tags = [];

            foreach ($tagNames as $tagName) {
                $tag = Tag::query()->firstOrCreate(['name' => $tagName]);

                array_push($tags, $tag);
            }

            $tags = collect($tags);

            $academy->tags()->detach($academy->tags()->pluck('id'));
            $academy->tags()->attach($tags->pluck('id'));
        }

        if ($request->hasFile('photographs')) {
            $academy->photographs()->delete();

            foreach($request->file('photographs') as $photograph){
                $filePath = $this->ImageUpload($photograph);

                Photograph::query()->create([
                    'academy_id' => $academy->id,
                    'photograph' => $filePath,
                ]);
            }
        }

        return redirect()->route('academies.show', $academy);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Academy $academy
     * @return Response
     * @throws Exception
     */
    public function destroy(Academy $academy): Response
    {
        $academy->delete();

        return response("OK");
    }

    /**
     * Verify the specified academy.
     *
     * @param Academy $academy
     * @return JsonResponse
     */
    public function verify(Academy $academy): JsonResponse
    {
        $verified = $academy->verified;

        $academy->update([ $academy->verified = !$verified, ]);

        if ($verified) {
            $details = [
                'greeting' => 'Hello!',
                'body' => $academy->name.' got verified!',
                'thanks' => 'Thank you!',
            ];

            Auth::user()->notify(new AcademyVerified($details));
        }

        return response()->json(['verified' => $verified]);
    }
}
