@extends('layouts.app')

@section('title', 'Acceso Cyber')

@section('content')
<div class="max-w-md w-full space-y-8">
    <div class="bg-gray-900 bg-opacity-90 p-8 rounded-2xl cyber-border cyber-glow">
        <!-- Logo y título -->
        <div class="text-center">
            <div class="mx-auto h-12 w-12 bg-gradient-to-br from-cyan-500 to-purple-600 rounded-full flex items-center justify-center cyber-glow mb-4">
                <span class="text-black font-bold text-xl">⟠</span>
            </div>
            <h2 class="mt-6 text-3xl font-extrabold neon-cyan font-mono">
                INICIAR SESIÓN
            </h2>
            <p class="mt-2 text-sm text-cyan-300 font-mono">
                AUTENTICACIÓN DEL SISTEMA PROYECTO CLOUND-D
            </p>
        </div>

        <!-- Mensajes de éxito/error -->
        @if(session('success'))
            <div class="mt-4 p-3 bg-green-900 bg-opacity-50 border border-green-500 text-green-400 rounded font-mono text-sm">
                ✅ {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mt-4 p-3 bg-red-900 bg-opacity-50 border border-red-500 text-red-400 rounded font-mono text-sm">
                ⚠️ @foreach($errors->all() as $error) {{ $error }} @endforeach
            </div>
        @endif

        <!-- Formulario de Login -->
        <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-cyan-300 mb-2 font-mono">[CORREO]</label>
                    <input id="email" name="email" type="email" required 
                           class="w-full px-4 py-3 bg-gray-800 border border-cyan-500 text-cyan-300 rounded-md placeholder-cyan-700 font-mono focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                           placeholder="usuario@gmail.com" 
                           value="{{ old('email') }}">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-cyan-300 mb-2 font-mono">[CONTRASEÑA]</label>
                    <input id="password" name="password" type="password" required 
                           class="w-full px-4 py-3 bg-gray-800 border border-cyan-500 text-cyan-300 rounded-md placeholder-cyan-700 font-mono focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                           placeholder="••••••••">
                </div>
            </div>

            <div>
                <button type="submit" 
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-md text-black bg-gradient-to-r from-cyan-400 to-purple-500 hover:from-cyan-300 hover:to-purple-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transition duration-200 font-mono cyber-glow">
                    [ EJECUTAR ACCESO ]
                </button>
            </div>

            <div class="text-center">
                <p class="text-sm text-cyan-400 font-mono">
                    ¿SIN IDENTIDAD? 
                    <a href="{{ route('register') }}" class="font-bold neon-pink hover:text-pink-300 transition duration-200">
                        [CREAR PERFIL]
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection