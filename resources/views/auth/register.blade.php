
<div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md mb-8">
    <h2 class="text-2xl font-bold text-center mb-6">Registrarse</h2>
    @if ($errors->any())
    <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="/register" class="space-y-4">
        @csrf
        
        <div>
            <label for="name" class="block text-sm font-medium mb-2">Nombre</label>
            <input type="text" id="name" name="name" required 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" required 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md">
        </div>
        
        <div>
            <label for="password" class="block text-sm font-medium mb-2">Contraseña</label>
            <input type="password" id="password" name="password" required 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md">
        </div>
<div>
    <label for="password_confirmation" class="block text-sm font-medium mb-2">
        Confirmar Contraseña
    </label>
    <input type="password" id="password_confirmation" name="password_confirmation" required 
           class="w-full px-3 py-2 border border-gray-300 rounded-md">
</div>

        
        
        <button type="submit" 
                class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700">
            Registrarse
        </button>
    </form>
</div>