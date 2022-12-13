<?php
namespace App\Http\Controllers;
use App\Models\AdminList;
use App\Models\Companies;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class RegController extends Controller
{
    public function login()
    {
        return view('admin.Registration.Reg');
    }

    public function store(Request $adminList)
    {
        $adminList->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if(Auth::attempt($adminList->only("username" , "password"))){
//            if (auth()->user()->role === 'admin'){
                return redirect()->intended("admin/main");
//            }
        }
        else{
            return redirect()->intended("admin");
            }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
