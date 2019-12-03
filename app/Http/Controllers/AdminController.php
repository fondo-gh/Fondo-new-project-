<?php

namespace App\Http\Controllers;

use App\Startup;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $startups = Startup::all();
        return view('admin.pages.dashboard')->withStartups($startups);
    }

    /**
     * Returns page to display the details of the startup
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @param $id
     * @return mixed
     */
    public function getStartupShowPage($id) {
        $startup = Startup::find($id);
        return view('admin.pages.startup_show')->withStartup($startup);
    }
}
