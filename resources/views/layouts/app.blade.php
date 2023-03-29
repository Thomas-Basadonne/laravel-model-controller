<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>
<body>
    <div class="text-center">
        <h1 class="badge text-white bg-danger fs-1 my-3">@yield('title')</h1>
    </div>
    
    <main>
        @yield('content')
    </main>
</body>
</html>