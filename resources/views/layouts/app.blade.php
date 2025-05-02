<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .samasante-logo {
            font-family: 'Arial', sans-serif;
            font-weight: 700;
            color: #3b82f6; /* blue-500 */
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .samasante-logo:hover {
            color: #2563eb; /* blue-600 */
            transform: scale(1.02);
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto flex items-center py-0 px-4 sm:px-6 lg:px-8">
            <a href="{{ route('welcome') }}" class="samasante-logo flex items-center m-0 p-0">
                <svg class="h-8 w-8 m-0 p-0 align-middle" viewBox="0 0 48 48" fill="none">
                    <circle cx="24" cy="24" r="22" fill="#E0F7FA"/>
                    <path d="M24 36c-5.5-4.5-10-8.2-10-13C14 18 20 18 24 23c4-5 10-5 10 0 0 4.8-4.5 8.5-10 13z" fill="#38BDF8"/>
                    <rect x="21" y="20" width="6" height="12" rx="2" fill="#fff"/>
                    <rect x="18" y="23" width="12" height="6" rx="2" fill="#fff"/>
                    <rect x="23" y="22" width="2" height="8" rx="1" fill="#14B8A6"/>
                    <rect x="20" y="25" width="8" height="2" rx="1" fill="#14B8A6"/>
                </svg>
                <span class="ml-3 text-xl font-semibold text-gray-900 m-0 p-0 align-middle" style="line-height:1;">Sama Santé</span>
            </a>
            <!-- You can add navigation or title here if needed -->
        </div>
    </header>

    @include('layouts.navigation')

    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <main class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4">
                    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-500 text-sm">
                © {{ date('Y') }} Sama Santé. All rights reserved.
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script> {{-- Or however you load your main JS --}}
    @stack('scripts') {{-- Make sure this is near the end --}}
</body>
</html>