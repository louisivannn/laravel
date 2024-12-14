<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    } 
    public function contact()
    {
        return view('contact');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function news()
    {
        return view('news');
    }
    
    public function shop()
    {
        return view('shop');
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('dashboard')->with('success', 'User deleted successfully.');
    }
}
