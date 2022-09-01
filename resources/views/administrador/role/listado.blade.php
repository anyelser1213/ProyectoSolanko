@extends('layouts.administrador')

@section('content')
    <div class="content-inner w-100">
        <!-- Page Header-->
        <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">{{ __('variable.listado_role') }}</h2>
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
                                        <th>{{ __('variable.role') }}</th>
                                        <th>{{ __('variable.accion') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{$role->type}}</td>
                                            <td>
                                                <a href="{{route('role.actualizar', ['id' => $role->id])}}" class="btn btn_edit"><i class="fas fa-user-edit"></i></a>
                                                <a href="{{route('role.eliminar', ['id' => $role->id ])}}" class="btn btn_edit"><i class="fas fa-trash"></i></a>
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
