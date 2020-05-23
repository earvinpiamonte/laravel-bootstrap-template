<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Compiled CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>{{ env('APP_NAME') }} by {{ '@'.env('AUTHOR_TWITTER_HANDLE') }}</title>
  </head>
  <body>

    @yield('content')

    <!-- Compiled JavaScript -->
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>