<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
        $this->middleware('verified')->only('home');
    }

    public function index()
    {
        $users = User::where(['email' => Auth::user()->email])->get();
        return view('profile.index', compact('users'))->with(['users'=>$users]);    
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        User::create($request->all());
         
        return redirect()->route('profile.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('profile.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('profile.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user) : RedirectResponse
    {
        $request->validate([
            // 'name' => 'required|string|max:250',
            // 'email' => 'required|string|email:rfc,dns|max:250|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'country' => 'required|string|max:250',
            'zaptype' => 'required|string|max:50'
        ]);
        
        $user->update($request->all());
        
        return redirect()->route('users.index')
                        ->with('success','Your Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user) : RedirectResponse
    {
        $user->delete();
         
        return redirect()->route('users.index')
                        ->with('success','Product deleted successfully');
    }
}
