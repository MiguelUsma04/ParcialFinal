@extends('layouts.app')

@section('titulo')
    Carreras
@endsection

@section('content')


<br>
    <div class="py-2">
        <div class="flex justify-start">
            <a href="{{ route('carrera.create') }}" class="p-2 ml-20 bg-green-400 hover:bg-green-500 text-white rounded shadow-lg text-xl">
                Nuevo
            </a>
        </div>
    </div>

    <div class="container mx-auto w-full mt-4">
        {{-- <div class="container-table-div"> --}}
            <table class="w-full ">
                <thead class="bg-blue-800 text-white">
                    <tr class="">
                        <th class="p-2 text-center">Código</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripción</th>
                        {{-- <th class="text-center">Acciones</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carreras as $carrera)
                        <tr class="text-center">
                            <td class=" border p-4 w-10">
                                {{ $carrera->id }}
                            </td>
                            <td class=" border ">
                                {{ $carrera->nombre }}
                            </td>

                            <td class=" border text-center">
                                {{ $carrera->descripcion }}
                            </td>

                            <td class="border p-2 w-10">
                                <div class="flex justify-center p-1 gap-4 items center text-white">
                                    <a href="{{ route('carrera.edit',$carrera) }}" class="bg-amber-400 flex p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                            <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                        </svg>

                                        Editar
                                    </a>

                                    {{ Aire::open()->route('carrera.destroy',$carrera) }}
                                        <button type="submit" class="bg-red-500 flex p-3 rounded-xl" onclick="return confirm('¿Seguro que desea eliminar este contacto?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
                                            </svg>
                                            Eliminar
                                        </button>
                                    {{ Aire::close() }}
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        

    </div>

@endsection