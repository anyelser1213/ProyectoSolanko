<?php


namespace App\Http\Controllers;

use Session;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RolController extends Controller
{
    
    public function role_listado()    {
        //$roles = Role::where('id', '!=' , 1)->get();
        $roles = Role::all();
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln($roles);
        //$out->writeln($request->nombre);
        
        return view('administrador.role.listado',compact('roles'));
    }

    public function role_crear_actualizar($id = false)
    {
        $role = Role::where('id',$id)->first();
        return view('administrador.role.crear_actualizar',compact('role'));
    }

    public function role_guardar(Request $request)
    {

        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln($request->id);
        $out->writeln($request->nombre);

        $validated = $request->validate([
            'nombre' => 'required|max:200',
        ]);


        if(isset($request->id)){
            $role = Role::find($request->id);
            $role->nombre = $request->nombre;
            $role->save();

            Session::flash('success', __('variable.mensaje_actualizado'));
        }else{
            $role = Role::create([
                'nombre' => $request->nombre
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

}
