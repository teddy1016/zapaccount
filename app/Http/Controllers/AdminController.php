<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Log;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function admin()
    {
        if(Auth::user()->role == 1)
            return view('admin.dashboard');
        else 
            return redirect('users');
    } 

    public function dashboard()
    {
        $users = User::latest()->paginate(5);
        $logs = Log::latest('created_at')->get()->take(10);
        
        return view('admin.dashboard',compact('users', 'logs'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function delete_user(User $user)
    {
        $user->delete();
         
        return redirect()->route('admin.dashboard')
                        ->with('success','User deleted successfully');
    }
}
