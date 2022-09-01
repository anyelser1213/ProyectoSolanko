@extends('layouts.administrador')

@section('content')
    <div class="content-inner w-100">
        <!-- Page Header-->
        <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">
                <i class="fas fa-user-edit"></i>
                @if(isset($usuario))
                    {{ __('variable.actualizar_usuario') }}
                @else
                    {{ __('variable.crear_usuario') }}
                @endif
            </h2>
        </div>
        </header>
        <section class="pb-0">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('usuario.guardar')}}" method="POST"  autocomplete="off">     
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('variable.nombre_y_apellido') }}</label>
                                        <input type="text" maxlength="255" name="name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ (isset($usuario))? $usuario->name : old('name') }}" required>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    @if(isset($usuario))
                                        <input type="hidden" name="id" value="{{$usuario->id}}">
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('variable.email') }}</label>
                                        <input type="text" maxlength="255" name="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ (isset($usuario))? $usuario->email : old('email') }}" {{ (isset($usuario))? 'readonly' : 'required' }} >
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('variable.contrasena') }}</label>
                                        <input type="password" maxlength="200" name="password"  class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" >
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('variable.role') }}</label>
                                        <select name="role" class="form-control" required>
                                            <option value="">{{ __('variable.seleccionar_role') }}</option>
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}" {{ ((isset($usuario) && $usuario->role == $role->id) || (old('role') == $role->id) )? 'selected' : '' }}>{{$role->type}}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary bg-color">
                                        @if(isset($usuario))
                                            {{ __('variable.actualizar_usuario') }}
                                        @else
                                            {{ __('variable.crear_usuario') }}
                                        @endif
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
