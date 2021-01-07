<?php

namespace App\Http\Controllers;

use App\Http\Requests\Academy\StoreAcademyRequest;
use App\Models\Academy;
use App\Models\Tag;
use App\Repositories\Constants;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AcademyController extends Controller
{
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
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Factory|View|Application
    {
        return view('components.create-academy');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAcademyRequest $request
     * @return RedirectResponse
     */
    public function store(StoreAcademyRequest $request): RedirectResponse
    {
        Tag::query()->create(['name' => $request->tags]);

        $academy = new Academy([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'logo' => $request->logo,
            'website' => $request->website,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'description' => $request->description,
            'motto' => $request->motto,
            'date_of_establishment' => $request->date_of_establishment,
            'verified' => $request->verified,
        ]);

        $academy->save();

        $academy->tags()->attach($request->tags);

        return redirect()->route('academies.show', $academy);
    }

    /**
     * Display the specified resource.
     *
     * @param Academy $academy
     * @return Application|Factory|View|Response
     */
    public function show(Academy $academy): Factory|View|Response|Application
    {
        return view('components.show-academy', ['academy' => $academy]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Academy $academy
     * @return Response
     */
    public function edit(Academy $academy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Academy $academy
     * @return Response
     */
    public function update(Request $request, Academy $academy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Academy $academy
     * @return Response
     */
    public function destroy(Academy $academy)
    {
        //
    }
}
