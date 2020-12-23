<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\StoreTagRequest;
use App\Http\Requests\Tag\UpdateTagRequest;
use App\Models\Tag;
use Exception;
use JetBrains\PhpStorm\ArrayShape;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(): array
    {
        return Tag::all()->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTagRequest $request
     * @return string[]
     */
    #[ArrayShape(['message' => "string"])] public function store(StoreTagRequest $request): array
    {
        Tag::query()->create($request->all());

        return ['message' => 'Tag has been stored successfully.'];
    }

    /**
     * Display the specified resource.
     *
     * @param Tag $tag
     * @return string
     */
    public function show(Tag $tag): string
    {
        return $tag->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTagRequest $request
     * @param Tag $tag
     * @return string[]
     */
    #[ArrayShape(['message' => "string"])] public function update(UpdateTagRequest $request, Tag $tag): array
    {
        $tag->update($request->all());

        return ['message' => 'Tag has been updated successfully.'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     * @return string[]
     * @throws Exception
     */
    #[ArrayShape(['message' => "string"])] public function destroy(Tag $tag): array
    {
        $tag->delete();

        return ['message' => 'Tag has been destroyed successfully.'];
    }
}
