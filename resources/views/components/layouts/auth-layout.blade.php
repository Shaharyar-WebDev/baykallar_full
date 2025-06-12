<!DOCTYPE html>
<html lang="en">

<x-partials.auth.head></x-partials.auth.head>

 <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(229, 231, 235, 0.6);
        }
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
            border-color: #3b82f6;
        }
    </style>

<body class="min-h-screen flex items-center justify-center p-4 bg-gradient-to-br from-slate-50 to-slate-100 dark:from-neutral-900 dark:to-neutral-900">
    
    @yield('main')

    <x-partials.auth.scripts></x-partials.auth.scripts>

</body>
</html>