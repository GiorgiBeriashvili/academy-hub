<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreUserRequest;
use App\Http\Requests\Auth\UpdateUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use JetBrains\PhpStorm\ArrayShape;

class UserController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(): array
    {
        return User::all()->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserRequest $request
     * @return string[]
     */
    #[ArrayShape(['message' => "string"])] public function store(StoreUserRequest $request): array
    {
        User::query()->create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return ['message' => 'User has been stored successfully.'];
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return string
     */
    public function show(User $user): string
    {
        return $user->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param User $user
     * @return string[]
     */
    #[ArrayShape(['message' => "string"])] public function update(UpdateUserRequest $request, User $user): array
    {
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return ['message' => 'User has been updated successfully.'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return string[]
     * @throws Exception
     */
    #[ArrayShape(['message' => "string"])] public function destroy(User $user): array
    {
        $user->delete();

        return ['message' => 'User has been destroyed successfully.'];
    }
}
