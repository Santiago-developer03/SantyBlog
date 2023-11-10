<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('dashboard.users.users', compact('users'));
    }

    public function create()
    {
        return view('dashboard.users.create');
    }
    
    public function store(Request $request)
    {
        
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg',
            'role' => 'required'
        ]);

        $fileImage = time().'.'.$request->avatar->extension();
        $request->avatar->storeAs('public/profiles', $fileImage);

        $user = new User();
        $user->avatar = $fileImage;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();
        
        return redirect()->route('profile.index')->with('success', '¡Usuario creado exitosamente!');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request, $id): View
    {
        $user = User::find($id);
        return view('dashboard.users.edit', compact('user'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id): RedirectResponse
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',  
            'role' => 'required',
        ]);

        $user = User::find($id);
        if($request->hasFile('avatar')) {
            Storage::delete('public/profiles/' . $user->avatar);
            $fileImage = time().'.'.$request->avatar->extension();
            $request->avatar->storeAs('public/profiles', $fileImage);
            $user->avatar = $fileImage;
        }  

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = $request->role;
            $user->update();

        return redirect()->route('profile.index')->with('success', '¡Usuario actualizado exitosamente!');

    }

    /**
     * Delete the user's account.
     */
    public function destroy($id): RedirectResponse
    {

        $user = User::find($id);

        if(Storage::delete('public/profiles/' . $user->avatar)) {
            User::destroy($id);
        }

        return redirect()->route('profile.index')->with('success', '¡Usuario eliminado exitosamente!');
    }
}
