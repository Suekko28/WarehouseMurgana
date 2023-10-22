<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $per_page=5;
        $data = User::orderBy('id', 'asc')->paginate($per_page);
        $company=Company::all()->unique();
        return view('user.pengguna')->with('users', $data)->with('per_page',$per_page)->with('company',$company);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|max:20',
            'password'=>'required|max:20',
            'email' => 'required|max:20',
            'role' => 'required|max:20'
        ],[
            'name.required' => 'Nama Wajib Diisi',
            'password.required'=>'Password Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'role.required' => 'Role Wajib Diisi'
        ]);
        
        if($request->role=="Admin"){
            $role=1;
        }else{
            $role=2;
        }
        $data = [
            'name' => $request->name,
            'password'=> Hash::make($request->password),
            'company_id'=>$request->company,
            'email' => $request->email,
            'role' => $role,
        ];
        
        User::create($data);
        return redirect()->back()->with('status','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $data = User::findOrFail($id);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|max:20',
            'company'=>'required|max:20',
            'role' => 'required|max:20'
        ],[
            'name.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'company.required'=>'Company Wajib Diisi',
            'role.required' => 'Role Wajib Diisi'
        ]);
        
       
        if($request->role=="Admin"){
            $role=1;
        }else{
            $role=2;
        }
        if($request->password!=null){
            $data = [
                'name' => $request->name,
                'password'=> Hash::make($request->password),
                'company'=>$request->company,
                'email' => $request->email,
                'role' => $role,
            ];
            $user=User::find($id);
            if($user->name==="sa-admin"){
                return redirect()->back()->with('status','sa-admin cannot be updated');
            }
            $user->name=$data['name'];
            $user->password=$data['password'];
            $user->email=$data['email'];
            $user->company_id=$data['company'];
            $user->role=$data['role'];
            $user->update();
            return redirect()->back()->with('status','User Data Updated Successfully');

        }
        else{   
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'company'=>$request->company,
                'role' => $role,
            ];
            $user=User::find($id);
            if($user->name==="sa-admin"){
                return redirect()->back()->with('status','sa-admin cannot be updated');
            }
            $user->name=$data['name'];
            $user->email=$data['email'];
            $user->company=$data['company_id'];
            $user->role=$data['role'];
            $user->update();
            return redirect()->back()->with('status','User Data Updated Successfully');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        if($user->name!="sa-admin"){
        $user->delete();
        return redirect()->back()->with('status','User Deleted Successfully');
        }
    }
}
