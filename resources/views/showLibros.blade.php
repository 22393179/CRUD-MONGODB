<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Show libreria</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="text-center m-5">
            <h2 class=" text-4xl font-bold">Detalles del proyecto</h2>
        </div>

        <div class="space-y-6 text-center mt-16 text-xl border-2 w-80 mx-auto rounded-lg border-black">
            <div class="mt-5">
                <strong>Titulo:</strong>
                <p>{{ $libreria->nombre }}</p>
            </div>
            <div>
                <strong>Descripción:</strong>
                <p>{{ $libreria->editorial }}</p>
            </div>
            <div>
                <strong>Fecha de recibido:</strong>
                <p class="mb-5">{{ $libreria->detalle }}</p>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-10">
        <button class="bg-[#02AB82] rounded-lg py-2 px-10">
            <a href="{{ route('libros.index') }}" class="text-white font-bold">Volver</a>
        </button>
    </div>
</body>

</html>
