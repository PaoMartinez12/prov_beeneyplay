<?php

namespace App\Http\Controllers\Auth;

use App\User;

use DB;
use Hash;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use RealRashid\SweetAlert\Facades\Alert;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),   
        ]);

        //Attach role 
        $user->roles()->sync($data['tipo']);

        Alert::success('Registrado', 'Usuario registrado exitosamente');
       
        return view('home');
    }


//eliminar
    public function deleteUser($id)
    {
        DB::table('role_user')->where('user_id', $id)->delete();
        User::find($id)->delete();      

        Alert::info('Eliminado', 'Usuario eliminado exitosamente');
       
        return redirect()->route('home');
    }

//editar al formulario
    public function editUser($id)
    {
        $user = User::find($id);   //hace la consulta a la base
        return view('auth.updateUser', compact('user')); 

    }


//actualizar datos
    public function update(Request $request)    {
        //
        $this->validate($request,[ 'name'=>'required', 'email'=>'required', 'password'=>'required']);
     
       
        

        DB::table('role_user')
              ->where('user_id', $request -> id)
              ->update(['role_id' => $request -> tipo]);
        
        $user = User::find($request->id);
        $user->name = $request -> name;
        $user->email = $request -> email;
        
        //Actualiza si son diferentes password
        if($user->password != $request->password){
            $user->password =bcrypt($request -> password);
        }
        
        $user -> update();

        Alert::success('Editado', 'Usuario editado exitosamente');

        return redirect()->route('home');
    }
}
