<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Editar Libro</title>
</head>
<body>
    <h2 class="text-4xl text-center m-5 font-bold">Editar proyecto</h2>
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded w-[60%] mx-auto flex justify-center items-center mb-5" role="alert">
            <div class="text-center">
                <strong class="font-bold">¡Upsss...!</strong> Algo salió mal...<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    @if($libreria)
    <form action="{{ route('libros.update', $libreria) }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md border-2 mt-16">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Titulo:</label>
            <input type="text" name="nombre" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" value="{{ $libreria->nombre }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Descripción:</label>
            <input type="text" name="editorial" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" value="{{ $libreria->editorial }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Fecha de recibido:</label>
            <input type="date" name="detalle" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" value="{{ $libreria->detalle }}">
        </div>
        <button type="submit" class="w-full bg-[#02AB82] text-white py-2 px-4 rounded-lg hover:bg-green-900 transition duration-200">Editar proyecto</button>
        <div class="mt-3 flex justify-end">
            <a href="/libros" class=" text-blue-600">Cancelar</a>
        </div>
    </form>
@else
    <p>No se encontró la librería</p>
@endif

</body>
</html>