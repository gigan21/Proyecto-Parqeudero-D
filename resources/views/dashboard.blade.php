<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold">Mi Aplicación</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-blue-100">Bienvenido, {{ Auth::user()->name }}</span>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <button type="submit" 
                                class="bg-blue-700 hover:bg-blue-800 text-white px-4 py-2 rounded-md transition duration-200">
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 p-8 text-center">
                <h2 class="text-3xl font-bold text-gray-700 mb-4">¡Bienvenido al Dashboard!</h2>
                <p class="text-lg text-gray-600">Has iniciado sesión correctamente.</p>
                <div class="mt-6">
                    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded">
                        <p class="font-semibold">Usuario: {{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>