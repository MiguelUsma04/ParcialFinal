@extends('layouts.app')

@section('titulo')
    Crear Carrera
@endsection

@section('content')

    <div class="py-2">

        <div class="flex justify-start">
            <a href="{{ route('carrera.index') }}" class="ml-5 bg-blue-400 p-2 rounded-xl text-white">

                Regresar

            </a>
        </div>


    </div>

    <div class="p-6 bg-white rounded-lg">

        {{ Aire::open()->route('carrera.store') }}

        <div class="grid gap-6 md:grid-cols-2">

                {{ Aire::input('nombre','Nombre') }}

                {{ Aire::input('descripcion','Descripcion') }}
                


        </div>

        <div class="flex justify-start py-2">
            {{ Aire::submit('Crear')->class('bg-green-500 text-white') }}
        </div>

        {{ Aire::close() }}

    </div>

@endsection
