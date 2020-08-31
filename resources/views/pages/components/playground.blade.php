@extends('layouts.app')

@section('content')

<main>
  <header class="py-4">
    <div class="container">
      <h1>Components playground</h1>
    </div><!-- /.container -->
  </header>

  <section class="py-5">
    <div class="container">
      <h2>Alert</h2>
      <x-alert variant="warning" content="How to trigger BP fans? Ice Cream - Jennie with Selena ft. BLACKPINK." dismissable="true"/>

      <h2>Badge</h2>
      <span class="badge badge-secondary">Test</span><!-- /.badge badge-secondary -->
    </div><!-- /.container -->
  </section><!-- /.py-5 -->
</main>

@endsection