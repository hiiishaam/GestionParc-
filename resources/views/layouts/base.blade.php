<!-- resources/views/layouts/base.blade.php -->

<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
      <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>@yield('title', 'Default Title')</title>
    
        <!-- Montserrat Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/sttyle.css') }}">
      </head>
      <body>
        <div class="grid-container">
    
          <!-- Sidebar -->
          @include('partials.menu')
          <!-- End Sidebar -->
    
          <!-- Main -->
          <main class="main-container">
                @yield('content')
          </main>
          <!-- End Main -->
    
        </div>
    
        <!-- Scripts -->
        <!-- ApexCharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
        <!-- Custom JS -->
        <script src="{{ asset('js/scripts.js') }}"></script>
        @yield('scripts')
      </body>
    </html>
</x-app-layout>
