@extends('layouts.administrador')

@section('content')
    <div class="content-inner w-100">
        <!-- Page Header-->
        <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">
                <i class="fas fa-cog"></i>
                @if(isset($role))
                    {{ __('variable.actualizar_role') }}
                @else
                    {{ __('variable.crear_role') }}
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
                        <form action="{{route('role.guardar')}}" method="POST"  autocomplete="off">     
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">{{ __('variable.nombre_role') }}</label>
                                        <input type="text" maxlength="200" name="type"  class="form-control @error('role') is-invalid @enderror" name="role" value="{{ (isset($role))? $role->type : old('type') }}" required>
                                        @error('type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    @if(isset($role))
                                        <input type="hidden" name="id" value="{{$role->id}}">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary bg-color">
                                        @if(isset($role))
                                            {{ __('variable.actualizar_role') }}
                                        @else
                                            {{ __('variable.crear_role') }}
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
