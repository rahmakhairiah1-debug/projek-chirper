<!DOCTYPE html>
<html lang="en" data-theme="lofi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chirper - Home</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
        
       <style>
    @import url('https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&family=DM+Sans:wght@400;500&display=swap');
    body { font-family: 'DM Sans', sans-serif; background: #faf7f4; }
    .navbar-custom { background: #fff8f3; border-bottom: 1px solid #e8ddd4; }
    .card-chirp {
        border: 1px solid #e8ddd4;
        border-radius: 12px;
        transition: box-shadow 0.2s;
    }
    .card-chirp:hover { box-shadow: 0 4px 12px rgba(139,94,60,0.08); }
    .author-name {
        color: #8B5E3C;
        font-weight: 600;
    }
    .btn-signin {
        border: 1.5px solid #8B5E3C;
        color: #8B5E3C;
        border-radius: 8px;
        padding: 4px 14px;
        font-size: 13px;
        background: transparent;
        cursor: pointer;
        transition: background 0.2s, color 0.2s;
    }
    .btn-signin:hover { background: #8B5E3C; color: white; }
    .btn-signup {
        border: 1.5px solid #8B5E3C;
        background: #8B5E3C;
        color: #ffffff;
        border-radius: 8px;
        padding: 4px 14px;
        font-size: 13px;
        cursor: pointer;
        transition: background 0.2s;
    }
    .btn-signup:hover { background: #6e4a2e; border-color: #6e4a2e; }
    .header-section {
        background: #fff8f3;
        border-bottom: 1px solid #e8ddd4;
    }
</style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="min-h-screen flex flex-col bg-base-200 font-sans">
        <nav class="navbar bg-base-100">
            <div class="navbar-start">
                <a href="/" class="btn btn-ghost text-xl"> 👩‍💻Chirper</a>
            </div>
            <div class="navbar-end gap-2">
                <a href="#" class="btn btn-ghost btn-sm">Sign In</a>
                <a href="#" class="btn btn-primary btn-sm">Sign Up</a>
            </div>
        </nav>

        <main class="flex-1 container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        @foreach ($chirps as $chirp)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{ $chirp['author'] }}</div>
                        <div class="mt-1">{{ $chirp['message'] }}</div>
                        <div class="text-sm text-gray-500 mt-2">{{ $chirp['time'] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>

        <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
            <div>
                <p>© 2026 Chirper - Built with Laravel and 😊 by Khairiah RahmaDani (240170067)</p>
            </div>
        </footer>
    </body>
</html>
