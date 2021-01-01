<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::orderBy('created_at', 'DESC')->get();
        $data['serial']=1;
        return view('admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('admin',auth()->user())) {
            $data['roles'] = Role::orderBy('name')->get();
            return view('admin.user.create', $data);
        }
        session()->flash('success','You are not authorized to perform this operation.');
        return redirect()->route('admin.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::allows('admin',auth()->user())) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
                'role_id' => 'required',
                'status' => 'required',
            ]);

            $data = $request->except(['_token', 'password']);
            $data['password'] = bcrypt($request->password);

            User::create($data);
            session()->flash('success', 'User Create Successfully');
            return redirect()->route('user.index');
        }
      session()->flash('success','You are not authorized to perform this operation.');
      return redirect()->route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows('admin',auth()->user())) {
        $data['roles'] = Role::orderBy('name')->get();
        $data['user'] = User::findOrFail($id);
        return view('admin.user.edit', $data);
        }
        session()->flash('success','You are not authorized to perform this operation.');
        return redirect()->route('admin.dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Gate::allows('admin',auth()->user())) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'role_id' => 'required',
                'status' => 'required',
            ]);

            if ($request->password != null){
                $data['password']=bcrypt($request->password);
            }
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['role_id'] = $request->role_id;
            $data['status'] = $request->status;

            $user = User::findOrFail($id);
            $user->update($data);
            session()->flash('success', 'User Update Successfully');
            return redirect()->route('user.index');
        }
        session()->flash('success','You are not authorized to perform this operation.');
        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::allows('admin',auth()->user())) {
            $user = User::findOrFail($id);
            $user->destroy($user->id);
            session()->flash('success', 'User Delated Successfully');
            return redirect()->back();
        }
        session()->flash('success','You are not authorized to perform this operation.');
        return redirect()->route('admin.dashboard');
    }
}
