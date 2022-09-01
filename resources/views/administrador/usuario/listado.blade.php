@extends('layouts.administrador')

@section('content')
    <div class="content-inner w-100">
        <!-- Page Header-->
        <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">{{ __('variable.listado_usuario') }}</h2>
        </div>
        </header>
        <section class="pb-0">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable display">
                                <thead>
                                    <tr>
                                        <th>{{ __('variable.nombre') }}</th>
                                        <th>{{ __('variable.email') }}</th>
                                        <th>{{ __('variable.role') }}</th>
                                        <th>{{ __('variable.accion') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)
                                        <tr>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>{{$usuario->rol->type}}</td>
                                            <td>
                                                <a href="{{route('usuario.actualizar', ['id' => $usuario->id])}}" class="btn btn_edit"><i class="fas fa-user-edit"></i></a>
                                                <a href="{{route('usuario.eliminar', ['id' => $usuario->id ])}}" class="btn btn_edit"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
