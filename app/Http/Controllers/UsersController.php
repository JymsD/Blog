<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\FlashServiceProvider;
use App\Http\Requests\UserRequest;
class UsersController extends Controller
{
	public function index(){
         
         $users = User::orderBy('id','ASC')->paginate(5);
         return view('admin.users.index')->with('users',$users);
	}

    public function create(){
    	return view('admin.users.create');
    }


    public function store(UserRequest $request){
        
    	$user = new User($request->all());
    	$user->password = bcrypt($request->password);
    	$user->save();

         flash('Se ha registrado '.$user->name.' de forma exitosa.', 'success');

        return redirect()->route('admin.users.index');

    	

    }
    public function edit($id){
        
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    public function show($id){
    	
    }

    public function destroy($id){
        
        $user = User::find($id);
        $user -> delete();

        flash('El usuario '.$user->name.' ha sido borrado de forma exitosa.', 'danger');
        
        return redirect() -> route('admin.users.index');
    }

    public function update(Request $request, $id){
        
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();

    flash('El usuario '.$user->name.' ha sido editado de forma exitosa.', 'warning');
          return redirect() -> route('admin.users.index');
     
    }
}
