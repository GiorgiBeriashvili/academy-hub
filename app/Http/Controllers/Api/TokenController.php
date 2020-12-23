<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Token\StoreTokenRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\ArrayShape;

class TokenController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTokenRequest $request
     * @return string[]
     * @throws ValidationException
     */
    #[ArrayShape(['token' => "mixed"])] public function store(StoreTokenRequest $request): array
    {
        /** @var User $user */
        $user = User::query()->where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $user->tokens()->delete();

        return ['token' => $user->createToken($request->token_name)->plainTextToken];
    }
}
