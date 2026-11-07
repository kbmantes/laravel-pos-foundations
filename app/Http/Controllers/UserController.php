<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Intervention\Image\Laravel\Facades\Image;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::orderBy('full_name')->get();

        return view('users.index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }

    public function create(): View
    {
        return view('users.create', [
            'title' => 'Add User',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:50', 'unique:users,username'],
            'full_name' => ['required', 'string', 'max:100'],
        ]);

        User::create($validated);

        return redirect()
            ->route('users.index')
            ->with('success', 'User added successfully.');
    }

    public function edit(User $user): View
    {
        return view('users.edit', [
            'title' => 'Edit User',
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'username' => [
                'required',
                'string',
                'max:50',
                Rule::unique('users', 'username')->ignore($user->id),
            ],
            'full_name' => ['required', 'string', 'max:100'],
            'avatar' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            $image = Image::read($request->file('avatar'))
                ->cover(300, 300)
                ->toJpeg(80);

            $path = 'avatars/' . Str::uuid() . '.jpg';

            Storage::disk('public')->put($path, (string) $image);

            $validated['avatar'] = $path;
        }

        $user->update($validated);

        return redirect()
            ->route('users.index')
            ->with('success', 'User updated successfully.');
    }
}