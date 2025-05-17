
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.auth()->id(),
        ]);

        auth()->user()->update($request->only('name', 'email'));

        return redirect()->route('profile.edit')->with('success', 'Profile updated!');
    }
}
