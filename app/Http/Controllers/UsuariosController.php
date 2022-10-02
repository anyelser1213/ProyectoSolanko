<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function usuario_listado()
    {
        //$usuarios = User::where('id', '!=' , 1)->get();

        $usuarios = User::all();//where('id', '!=' , 1)->get();

        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln($usuarios);
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
