<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users=User::all();
        return view('users.index',compact('users'));
    }

    public function edit($id)
    {
        $user=User::find($id);
        return view('users.edit',compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user=User::find($id);
        $user->update($request->all());
          return redirect('/users');
    }





    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return redirect('users');
    }

}
