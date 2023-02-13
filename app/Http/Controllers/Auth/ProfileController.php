<?php
namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function updateInformation(User $user,Request $request)
    {   
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ]);

        return redirect()->route('menu.index');
    }
    public function updatePassword(Request $request){
        $request->validate([
            'oldPassword' => 'required|current_password',
            'newPassword'=>'required|confirmed'
        ]);
        if(!Hash::check($request->oldPassword, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        #Update the new Password
         User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->newPassword)
        ]);
        return back()->with("status", "Password changed successfully!");
    }
}