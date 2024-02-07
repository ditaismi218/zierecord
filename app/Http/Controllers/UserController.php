<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserController;
use App\Http\Requests\StoreUserUpdate;
use App\Http\Requests\UpdateUserController;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::get();
        return view('DataUser.index')->with($data);
    }
    public function create()
    {
        return view('DataUser.create');
    }

    public function store(StoreUserController $request)
    {
        User::create($request->all());
        return redirect('DataUser')->with('success', 'Data User berhasil ditambahkan');
    }
    public function update(UpdateUserController $request, $id)
    {
        User::find($id)->Update($request->all());
        return redirect('DataUser')->with('success', 'Update data User berhasil');
    }


    public function destroy(User $user, $id)
    {
        $user->where('id', $id)->delete();
        return redirect('DataUser')->with('success', 'Delete data User berhasil');
    }
}
