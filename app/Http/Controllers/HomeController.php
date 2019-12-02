<?php

namespace App\Http\Controllers;

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
    public function startup()
    {
        return view('auth.pages.startup');
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



}
