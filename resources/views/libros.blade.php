<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Lista de Libros</title>
</head>
<body class="bg-[#F3F5F9]">
    @if (Session::has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded w-[60%] mx-auto flex justify-center items-center mb-5 mt-2" role="alert">
            <div class="text-center">
                <strong class="font-bold">{{ Session::get('success') }}</strong>
            </div>
        </div>
    @endif
    <div class="container mx-auto">
        <h1 class="text-center text-4xl font-bold mt-6">CRUD Proyectos</h1>
        <div class="mt-8 ml-20 mr-20">
            <div class="flex justify-end mb-5">
                <button class="bg-[#02AB82] rounded-md px-6 py-2 font-bold border-black border-2 hover:bg-green-900">
                    <a href="/libros/create" class="text-white">Nuevo proyecto</a>
                </button>
            </div>
            <table class="min-w-full divide-y">
                <thead class="bg-[#02AB82]">
                    <tr>
                        <th class="py-4 text-center text-white text-sm">
                            Titulo
                        </th>
                        <th class="py-4 text-center text-white text-sm">
                            Descripción
                        </th>
                        <th class="py-4 text-center text-white text-sm">
                            Fecha de recibido
                        </th>
                        <th class="py-4 text-center text-white text-sm">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($libros as $libro )
                        <tr>
                            <td class="text-center py-5">
                                {{ $libro->nombre }}
                            </td>
                            <td class="text-center py-5">
                                {{ $libro->editorial }}
                            </td>
                            <td class="text-center py-5">
                                {{ $libro->detalle }}
                            </td>
                            <td >
                                <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="flex justify-center">
                                    <div class="flex items-center space-x-4">
                                        <a class="bg-[#02AB82] rounded-lg p-2 text-white px-3 font-bold border-black border-2 hover:bg-green-900" href="{{ route('libros.show', $libro->id) }}">Ver</a>
                                        <a class="bg-[#02AB82] rounded-lg p-2 text-white px-3 font-bold border-black border-2 hover:bg-green-900" href="{{ route('libros.edit', $libro->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-[#02AB82] rounded-lg p-2 text-white px-3 font-bold border-black border-2 hover:bg-green-900">Eliminar</button>
                                    </div>
                                </form>
                                
                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>