@extends('layouts.app')

@section('titulo')
    Editar Carrera
@endsection

@section('content')

    <div class="py-2">
<br>
        <div class="flex justify-start">
            <a href="{{ route('carrera.index') }}" class="ml-5 bg-blue-400 p-2 rounded-xl text-white">

                Regresar

            </a>
        </div>
    </div>

    <div class="p-6 bg-white rounded-lg">

        {{ Aire::open()->route('carrera.update', $carrera) }}

        <div class="grid gap-2 md:grid-cols-2">

                {{ Aire::input('nombre','Nombre')->value($carrera->nombre) }}
                {{ Aire::input('descripcion','Descripcion')->value($carrera->descripcion) }}
                
        </div>

        <div class="flex justify-end py-2">
            {{ Aire::submit('Editar')->class('bg-amber-400 p-2 rounded-xl') }}
        </div>
        {{ Aire::close() }}

    </div>

@endsection
