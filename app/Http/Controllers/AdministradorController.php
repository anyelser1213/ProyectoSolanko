<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    public function role_listado()
    {
        $roles = Role::where('id', '!=' , 1)->get();

        return view('administrador.role.listado',compact('roles'));
    }

    public function role_crear_actualizar($id = false)
    {
        $role = role::where('id',$id)->first();
        return view('administrador.role.crear_actualizar',compact('role'));
    }

    public function role_guardar(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|max:200',
        ]);


        if(isset($request->id)){
            $role = Role::find($request->id);
            $role->type = $request->type;
            $role->save();

            Session::flash('success', __('variable.mensaje_actualizado'));
        }else{
            $role = Role::create([
                'type' => $request->type
            ]);

            Session::flash('success', __('variable.mensaje_creado'));
        }

        return redirect(route('role.listado'));
    }

    public function role_eliminar($id){
        $role = Role::where('id',$id)->first();
        $role->delete();
        Session::flash('success', __('variable.mensaje_eliminado'));
        return redirect()->back();
    }

    public function usuario_listado()
    {
        $usuarios = User::where('id', '!=' , 1)->get();
        return view('administrador.usuario.listado',compact('usuarios'));
    }

    public function usuario_crear_actualizar($id = false)
    {
        $usuario = User::where('id',$id)->first();
        $roles = Role::where('id', '!=' , 1)->get();
        return view('administrador.usuario.crear_actualizar',compact('usuario', 'roles'));
    }

    public function usuario_guardar(Request $request)
    {
        if(isset($request->id)){
            $validated = $request->validate([
                'name' => 'required|max:250',
                'role' => 'required',
            ]);
    
            $usuario = User::find($request->id);
            $usuario->name = $request->name;
            $usuario->email = $request->email;

            if(isset($request->password))
                $usuario->password = Hash::make($request->password);

            $usuario->role = $request->role;
            $usuario->save();

            Session::flash('success', __('variable.mensaje_actualizado'));
        }else{
            $validated = $request->validate([
                'name' => 'required|max:250',
                'email' => 'required|max:250|unique:users',
                'role' => 'required',
            ]);

            
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);

            Session::flash('success', __('variable.mensaje_creado'));
        }

        return redirect(route('usuario.listado'));
    }

    public function usuario_eliminar($id){
        $usuario = User::where('id',$id)->first();
        $usuario->delete();
        Session::flash('success', __('variable.mensaje_eliminado'));
        return redirect()->back();
    }
}
