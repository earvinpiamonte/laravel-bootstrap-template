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
    <section class="h-100 py-5 bg-black">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="text-center text-white">
                        <h1 class="text-uppercase">{{ env('APP_NAME') }}</h1><!-- /.text-uppercase -->
                        <p>
                            by
                            <a href="https://twitter.com/{{ env('AUTHOR_TWITTER_HANDLE') }}" target="_blank" rel="noopener noreferrer">{{ env('AUTHOR_NAME') }}</a>
                        </p>
                        <p>
                            Laravel version {{ app()::VERSION }}
                        </p>
                    </div><!-- /.text-center text-white -->
                </div><!-- /.col-12 -->
            </div><!-- /.row align-items-center h-100 -->
        </div><!-- /.container h-100 -->
    </section><!-- /.h-100 py-5 bg-black -->

    <!-- Compiled JavaScript -->
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>