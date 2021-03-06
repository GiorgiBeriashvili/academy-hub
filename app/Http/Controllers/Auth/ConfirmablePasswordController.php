<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StorePasswordRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function show(Request $request): Factory|View|Application
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     *
     * @param StorePasswordRequest $request
     * @return RedirectResponse
     */
    public function store(StorePasswordRequest $request): RedirectResponse
    {
        if (! Auth::validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            return back()->withErrors([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
