<?php

namespace App\Http\Controllers;

use App\Startup;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.pages.profile');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function notification()
    {
        return view('auth.pages.notification');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function startups()
    {
        return view('auth.pages.startups');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getUpdateProfilePage()
    {
        $user = auth()->user();
        return view('auth.pages.profile_update')->withUser($user);
    }


    /**
     * Update profile of user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateProfile(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'image' => 'nullable|image',
            'residence' => 'required|string',
            'contact_number' => 'required|digits_between:10,14',
            'account_number' => 'required|digits_between:10,14',
        ]);

        //find the current user
        $user = User::find(auth()->id());

        if($request->hasFile('image')) {
            $filename = date('Y-m-d-H:i:s') . "." . $request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('profiles', $filename, 'custom');

            //attach path to request
            $request['profile_image'] = $path;
        }

        //update user info
        $user->update($request->all());

        //success info
        session()->flash('success', 'User profile updated successfully.');

        return redirect()->route('home');
    }

    /**
     * Add profile skills of user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function addProfileSkills(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        //find the current user
        $user = User::find(auth()->id());

        //update user info
        $user->user_skills()->create($request->all());

        //success info
        session()->flash('success', 'User skill added successfully.');

        return redirect()->back();
    }

    /**
     * Returns page to display the details of the startup
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @param $id
     * @return mixed
     */
    public function getStartupShowPage($id) {
        $startup = Startup::find($id);
        return view('auth.pages.startup_show')->withStartup($startup);
    }

    /**
     * Returns page to create the startup
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getStartupCreatePage(){
        return view('auth.pages.startup_create');
    }

    /**
     * Creates startup
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeStartup(Request $request) {
        $this->validate($request, [
            'file' => 'image',
            'name' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string',
            'category' => 'required|string',
            'pitch' => 'required|string',
            'research_cost' => 'required|numeric',
            'marketing_cost' => 'required|numeric',
            'administration_cost' => 'required|numeric',
            'profit' => 'required|numeric',
        ]);

        //store the image
        if($request->hasFile('file')) {
            $filename = date('Y-m-d-H:i:s') . "." . $request->file('file')->getClientOriginalExtension();
            $path = $request->file('file')->storeAs('startups', $filename, 'custom');
            //attach path to request
            $request['image'] = $path;
        }

        //create startup for user
        $user = User::find(auth()->user()->id);
        $startup = $user->startups()->create($request->all());

        //success info
        session()->flash('success', 'Startup created successfully.');
        return redirect()->route('startup.show', $startup->id);
    }

    /**
     * Returns page to update startup
     * @param $id
     * @return mixed
     */
    public function getStartupUpdatePage($id) {
        $startup = Startup::find($id);
        return view('auth.pages.startup_update')->withStartup($startup);
    }

    /**
     *Update the startup details
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateStartup(Request $request, $id) {

        $this->validate($request, [
            'financial_file' => 'nullable|image',
            'business_model_file' => 'nullable|image',
        ]);

        //store the financial file
        if($request->hasFile('financial_file')) {
            $filename = date('Y-m-d-H:i:s') . "." . $request->file('financial_file')->getClientOriginalExtension();
            $path = $request->file('financial_file')->storeAs('startups', $filename, 'custom');
            //attach path to request
            $request['financials'] = $path;
        }


        //store the business model file
        if($request->hasFile('business_model_file')) {
            $filename = date('Y-m-d-H:i:s') . "." . $request->file('business_model_file')->getClientOriginalExtension();
            $path = $request->file('business_model_file')->storeAs('startups', $filename, 'custom');
            //attach path to request
            $request['business_model'] = $path;
        }

        //find startup
        $startup = Startup::find($id);
        //update startup
        $startup->update($request->all());

        session()->flash('success', 'Startup details updated successfully.');
        return redirect()->route('startup.show', $startup->id);
    }



}
