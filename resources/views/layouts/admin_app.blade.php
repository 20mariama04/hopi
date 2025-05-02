<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- ... head content ... --}}
</head>
<body>
    {{-- ... admin layout structure ... --}}

    <main>
        @yield('content')
    </main>

    {{-- ... other layout content ... --}}

    {{-- Include main admin JS if you have one --}}
    {{-- <script src="{{ asset('js/admin.js') }}"></script> --}}

    @stack('admin_scripts') {{-- Make sure this matches the @push name --}}
</body>
</html>