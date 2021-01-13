<?php

namespace App\Providers;

use App\Models\Academy;
use App\Models\GenericMail;
use App\Models\User;
use App\Policies\AcademyPolicy;
use App\Policies\MailPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Academy::class => AcademyPolicy::class,
        GenericMail::class => MailPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
