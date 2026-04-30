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

    body {
        font-family: 'DM Sans', sans-serif !important;
        background: linear-gradient(135deg, #010101 0%, #2d0a40 50%, #0a1252 100%) !important;
        min-height: 100vh;
        color: #fff !important;
    }

    .navbar {
        background: rgba(5, 1, 1, 0.06) !important;
        border-bottom: 2px solid #38b5f8b0 !important;
    }

    .navbar .btn-ghost {
        color: #ffffff !important;
        font-family: 'Sora', sans-serif !important;
        font-weight: 700 !important;
        font-size: 20px !important;
        text-shadow: 0 0 12px rgba(56,189,248,0.6) !important;
    }

    .navbar .btn-ghost:hover {
        background: rgba(56,189,248,0.1) !important;
    }

    .navbar .btn-primary {
        background: linear-gradient(135deg, #0ea5e9, #6366f1) !important;
        border: none !important;
        color: #ffffff !important;
        font-weight: 700 !important;
        box-shadow: 0 4px 15px rgba(56,189,248,0.5) !important;
    }

    .card {
        background: rgba(255, 255, 255, 0.08) !important;
        border: 2px solid rgba(56, 189, 248, 0.4) !important;
        border-radius: 20px !important;
        backdrop-filter: blur(20px) !important;
        box-shadow: 0 8px 32px rgba(56, 189, 248, 0.15) !important;
    }

    .card-body h1 {
        font-family: 'Sora', sans-serif !important;
        font-size: 36px !important;
        font-weight: 700 !important;
        color: #ffffff !important;
        -webkit-text-fill-color: unset !important;
        text-shadow: 0 2px 10px rgba(56,189,248,0.4) !important;
        letter-spacing: -0.5px !important;
    }

    .card-body p {
        color: #fafbfd !important;
        font-size: 16px !important;
        line-height: 1.7 !important;
        margin-top: 0.5rem !important;
    }

    .footer {
        background: hsla(260, 66%, 8%, 0.64) !important;
        border-top: 1px solid rgba(56, 181, 248, 0.82) !important;
        color: #f7faff !important;
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
                <div class="card bg-base-100 shadow mt-8">
                    <div class="card-body">
                        <div>
                            <h1 class="text-3xl font-bold"> Welcome to Chirper!</h1>
                            <p class="mt-4 text-base-content/60">This is your brand new Laravel application.Time to make it sing (or chirp)!</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
            <div>
                <p>© 2026 Chirper - Built with Laravel and 😊 by Khairiah RahmaDani (240170067)</p>
            </div>
        </footer>
    </body>
</html>
