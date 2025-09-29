@extends('layouts.app')

@section('title', 'ACCESO CYBER')

@section('content')
<div class="max-w-md w-full space-y-8">
    <div class="bg-black bg-opacity-90 p-8 rounded-lg cyber-border relative overflow-hidden">
        <!-- Efecto de esquinas -->
        <div class="absolute top-0 left-0 w-4 h-4 border-t-2 border-l-2 border-cyan-400"></div>
        <div class="absolute top-0 right-0 w-4 h-4 border-t-2 border-r-2 border-cyan-400"></div>
        <div class="absolute bottom-0 left-0 w-4 h-4 border-b-2 border-l-2 border-cyan-400"></div>
        <div class="absolute bottom-0 right-0 w-4 h-4 border-b-2 border-r-2 border-cyan-400"></div>
        
        <!-- Logo y título -->
        <div class="text-center mb-8">
            <div class="mx-auto w-16 h-16 bg-gradient-to-br from-cyan-400 to-pink-500 rounded-full flex items-center justify-center cyber-glow mb-4">
                <span class="text-black font-bold text-2xl">⟠</span>
            </div>
            <h2 class="text-3xl font-bold cyber-text neon-cyan">
                INICIAR SESIÓN
            </h2>
            <p class="mt-2 text-sm text-gray-400 font-mono">
                ACCESO AUTORIZADO: NIVEL 1 SEGURIDAD
            </p>
        </div>

        <!-- Mensajes -->
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-900 bg-opacity-50 border border-green-400 text-green-400 rounded font-mono text-sm">
                ✅ {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-4 p-3 bg-red-900 bg-opacity-50 border border-red-400 text-red-400 rounded font-mono text-sm">
                ⚠️ @foreach($errors->all() as $error) {{ $error }} @endforeach
            </div>
        @endif

        <!-- Formulario -->
        <form class="space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-cyan-300 mb-2 font-mono">
                        [USUARIO]
                    </label>
                    <input id="email" name="email" type="email" required 
                           class="w-full px-4 py-3 cyber-input rounded font-mono placeholder-cyan-800"
                           placeholder="usuario@cyber.net"
                           value="{{ old('email') }}">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-cyan-300 mb-2 font-mono">
                        [CONTRASEÑA]
                    </label>
                    <input id="password" name="password" type="password" required 
                           class="w-full px-4 py-3 cyber-input rounded font-mono placeholder-cyan-800"
                           placeholder="••••••••">
                </div>
            </div>

            <div class="flex items-center justify-between text-sm">
                <a href="#" class="font-mono text-cyan-400 hover:text-cyan-300 transition duration-200">
                    ⚡ OLVIDÉ CONTRASEÑA
                </a>
                <a href="{{ route('register') }}" class="font-mono text-pink-400 hover:text-pink-300 transition duration-200">
                    ➕ REGISTRARSE
                </a>
            </div>

            <button type="submit" 
                    class="w-full py-3 px-4 bg-gradient-to-r from-cyan-600 to-pink-600 hover:from-cyan-500 hover:to-pink-500 text-white font-bold font-mono rounded cyber-glow transition duration-200 pulse-glow">
                [ INGRESAR ]
            </button>
        </form>

        <!-- Footer -->
        <div class="mt-6 text-center">
            <p class="text-xs text-gray-500 font-mono">
                SISTEMA CYBER v2.4.7 | ENCRIPCIÓN: AES-256
            </p>
        </div>
    </div>
</div>
@endsection