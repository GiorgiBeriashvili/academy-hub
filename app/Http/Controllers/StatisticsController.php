<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request): Application|Factory|View
    {
        $verifiedAmount = DB::table('academies')
            ->where('verified', '=', '1')
            ->count();

        return view('components.statistics', ['verifiedAmount' => $verifiedAmount]);
    }
}
