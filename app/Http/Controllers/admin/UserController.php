<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Enums\RolesType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // $users = User::where('role', '!=', RolesType::ADMIN)->get();
        return view('Admin.User.index', compact('users'));
    }

    public function create()
    {
        return view('Admin.User.create');
    }

    public function show (User $user)
    {
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:users,email',
            'password' => ['required', 'string', Password::min(8)],
            'role' => [Rule::enum(RolesType::class), 'required']
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
                'nama' => $validated['nama'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => $validated['role']
            ]);
            DB::commit();
            return redirect(route('users.index'))->with('success', 'User successfully added');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function edit(User $user){
        $roles = RolesType::getValues();
        return view('Admin.User.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user){
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'email' => ['required', 'email:dns', Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable', 'confirmed', Password::min(8)],
            'role' => [Rule::enum(RolesType::class), 'required'],            
        ]);

        DB::beginTransaction();
        try {
            $user->update($validated);
            DB::commit();
            return redirect(route('users.index'))->with('success', 'User successfully updated');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function destroy(User $user){
        DB::beginTransaction();
        try{
            $user->delete();
            DB::commit();
            return redirect()->back()->with('success', 'User successfully deleted');
        }
        catch (\Exception $e){
            DB::rollback();
            return redirect()->back()->with('error', 'User deletion failed'); 
        }
    }
}
