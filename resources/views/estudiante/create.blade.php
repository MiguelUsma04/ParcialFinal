@extends('layouts.app')

@section('titulo')
    Crear Estudiante
@endsection

@section('content')

    <div class="py-2">

        <div class="flex justify-start">
            <a href="{{ route('estudiante.index') }}" class="ml-5 bg-blue-400 p-2 rounded-xl text-white">

                Regresar

            </a>
        </div>


    </div>

    <div class="p-6 bg-white rounded-lg">

        {{ Aire::open()->route('estudiante.store') }}

        <div class="grid gap-6 md:grid-cols-2">

                {{ Aire::input('nombre','Nombre') }}

                {{ Aire::input('apellido','Apellido') }}
                {{ Aire::input('email','Email') }}
                {{ Aire::input('telefono','Telefono') }}
                {{ Aire::input('direccion','Direccion') }}
                {{ Aire::input('numIdentidad','Num Identidad') }}
                {{ Aire::select($carreras)->id('carrera')->name('carrera_id')->label('Carrera') }}
                


        </div>

        <div class="flex justify-start py-2">
            {{ Aire::submit('Crear')->class('bg-green-500 text-white') }}
        </div>

        {{ Aire::close() }}

    </div>

@endsection
