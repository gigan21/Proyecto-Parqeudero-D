<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>@yield('title', 'Cyber Access')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
        }
        .cyber-glow {
            box-shadow: 0 0 20px #00ffff, 0 0 40px #00ffff;
        }
        .neon-cyan {
            color: #00ffff;
            text-shadow: 0 0 10px #00ffff;
        }
        .neon-pink {
            color: #ff00ff;
            text-shadow: 0 0 10px #ff00ff;
        }
        .cyber-border {
            border: 1px solid #00ffff;
            box-shadow: 0 0 15px #00ffff;
        }
    </style>
</head>
<body class="min-h-screen gradient-bg">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</body>
</html>