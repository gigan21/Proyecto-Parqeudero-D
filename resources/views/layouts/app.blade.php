<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cyber Access')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- REMOVE Google Fonts para probar -->
    <style>
        body {
            font-family: 'Courier New', monospace;
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
        }
        
        .cyber-border {
            border: 2px solid #00ffff;
            box-shadow: 
                0 0 10px #00ffff,
                0 0 20px #00ffff,
                inset 0 0 10px #00ffff;
        }
        
        .cyber-glow {
            box-shadow: 
                0 0 15px #ff00ff,
                0 0 30px #ff00ff,
                0 0 45px #ff00ff;
        }
        
        .cyber-text {
            font-family: 'Courier New', monospace;
            font-weight: bold;
            text-shadow: 
                0 0 10px #00ffff,
                0 0 20px #00ffff;
        }
        
        .neon-cyan {
            color: #00ffff;
            text-shadow: 
                0 0 10px #00ffff,
                0 0 20px #00ffff,
                0 0 30px #00ffff;
        }
        
        .neon-pink {
            color: #ff00ff;
            text-shadow: 
                0 0 10px #ff00ff,
                0 0 20px #ff00ff;
        }
        
        .cyber-input {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid #00ffff;
            color: #00ffff;
            text-shadow: 0 0 5px #00ffff;
        }
        
        .cyber-input:focus {
            box-shadow: 
                0 0 10px #00ffff,
                0 0 20px #00ffff;
            border-color: #ff00ff;
        }
        
        .grid-bg {
            background-image: 
                linear-gradient(rgba(0, 255, 255, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
        }
    </style>
</head>
<body class="min-h-screen relative overflow-hidden">
    <!-- Fondo con grid -->
    <div class="fixed inset-0 grid-bg"></div>

    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative z-10">
        @yield('content')
    </div>
</body>
</html>