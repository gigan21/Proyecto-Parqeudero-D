@extends('layouts.app')

@section('title', 'Registro Cyber')

@section('content')
<div class="max-w-md w-full space-y-8">
    <div class="bg-gray-900 bg-opacity-90 p-8 rounded-2xl cyber-border cyber-glow">
        <!-- Logo y título -->
        <div class="text-center">
            <div class="mx-auto h-12 w-12 bg-gradient-to-br from-purple-500 to-cyan-400 rounded-full flex items-center justify-center cyber-glow mb-4">
                <span class="text-black font-bold text-xl">⏣</span>
            </div>
            <h2 class="mt-6 text-3xl font-extrabold neon-pink font-mono">
                NUEVO PERFIL
            </h2>
            <p class="mt-2 text-sm text-purple-300 font-mono">
                CREACIÓN DE IDENTIDAD
            </p>
        </div>

        <!-- Mensajes de error -->
        @if($errors->any())
            <div class="mt-4 p-3 bg-red-900 bg-opacity-50 border border-red-500 text-red-400 rounded font-mono text-sm">
                ⚠️ ALERTA DEL SISTEMA: 
                @foreach($errors->all() as $error) 
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <!-- Formulario de Registro -->
        <form class="mt-8 space-y-6" method="POST" action="/register">
            @csrf
            
            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-purple-300 mb-2 font-mono">[NOMBRE COMPLETO]</label>
                    <input id="name" name="name" type="text" required 
                           class="w-full px-4 py-3 bg-gray-800 border border-purple-500 text-purple-300 rounded-md placeholder-purple-700 font-mono focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="NOMBRE APELLIDO" 
                           value="{{ old('name') }}">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-purple-300 mb-2 font-mono">[CORREO]</label>
                    <input id="email" name="email" type="email" required 
                           class="w-full px-4 py-3 bg-gray-800 border border-purple-500 text-purple-300 rounded-md placeholder-purple-700 font-mono focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="usuario@gmail.com" 
                           value="{{ old('email') }}">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-purple-300 mb-2 font-mono">[CONTRASEÑA]</label>
                    <input id="password" name="password" type="password" required 
                           class="w-full px-4 py-3 bg-gray-800 border border-purple-500 text-purple-300 rounded-md placeholder-purple-700 font-mono focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="MÍN 8 CARACTERES">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-purple-300 mb-2 font-mono">
                        [CONFIRMAR CONTRASEÑA]
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required 
                           class="w-full px-4 py-3 bg-gray-800 border border-purple-500 text-purple-300 rounded-md placeholder-purple-700 font-mono focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                           placeholder="VERIFICAR CLAVE">
                </div>
            </div>

            <div>
                <button type="submit" 
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-md text-black bg-gradient-to-r from-purple-400 to-cyan-500 hover:from-purple-300 hover:to-cyan-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-200 font-mono cyber-glow">
                    [ CREAR IDENTIDAD ]
                </button>
            </div>

            <div class="text-center">
                <p class="text-sm text-purple-400 font-mono">
                    ¿USUARIO EXISTENTE? 
                    <a href="{{ url('/') }}" class="font-bold neon-cyan hover:text-cyan-300 transition duration-200">
                        [ACCEDER AL SISTEMA]
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection