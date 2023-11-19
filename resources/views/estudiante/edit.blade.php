@extends('layouts.app')

@section('titulo')
    Editar Estudiante
@endsection

@section('content')

    <div class="py-2">
<br>
        <div class="flex justify-start">
            <a href="{{ route('estudiante.index') }}" class="ml-5 bg-blue-400 p-2 rounded-xl text-white">

                Regresar

            </a>
        </div>
    </div>

    <div class="p-6 bg-white rounded-lg">

        {{ Aire::open()->route('estudiante.update', $estudiante) }}

        <div class="grid gap-2 md:grid-cols-2">

                {{ Aire::input('nombre','Nombre')->value($estudiante->nombre) }}
                {{ Aire::input('apellido','Apellido')->value($estudiante->apellido) }}
                {{ Aire::input('email','Email')->value($estudiante->email) }}
                {{ Aire::input('telefono','Telefono')->value($estudiante->telefono) }}
                {{ Aire::input('direccion','Direccion')->value($estudiante->direccion) }}
                {{ Aire::input('numIdentidad','Num Identidad')->value($estudiante->numIdentidad) }}
                {{ Aire::select($carreras)->id('carrera')->name('carrera_id')->label('Carrera')->value($estudiante->carrera_id) }}
                
        </div>

        <div class="flex justify-end py-2">
            {{ Aire::submit('Editar')->class('bg-amber-400 p-2 rounded-xl') }}
        </div>
        {{ Aire::close() }}

    </div>

@endsection
