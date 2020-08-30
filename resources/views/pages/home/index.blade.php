@extends('layouts.app')

@section('content')

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
                        <i class="fab fa-laravel"></i>
                        Laravel version {{ app()::VERSION }}
                    </p>
                </div><!-- /.text-center text-white -->
            </div><!-- /.col-12 -->
        </div><!-- /.row align-items-center h-100 -->
    </div><!-- /.container h-100 -->
</section><!-- /.h-100 py-5 bg-black -->

@endsection