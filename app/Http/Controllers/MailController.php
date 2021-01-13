<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mail\SendMailRequest;
use App\Models\GenericMail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(GenericMail::class, 'generic_mail');
    }

    public function create(): Factory|View|Application
    {
        return view('mail/create');
    }

    public function send(SendMailRequest $request): RedirectResponse
    {
        $data = [
            'text' => 'Generic text!',
        ];

        Mail::to($request->mail)->send(new GenericMail($data));

        return redirect()->route('mail.create');
    }
}
