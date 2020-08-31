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
      <x-alert variant="warning" content="Sample alert component." dismissable="true"/>

      <h2>Badge</h2>
      <x-badge variant="danger" content="Danger"/>

      <h2>Breadcrumb</h2>
      <x-breadcrumb :pages="$data['breadcrumb']"/>

      <h2>Button</h2>
      <x-button content="Button"/>

    </div><!-- /.container -->
  </section><!-- /.py-5 -->
</main>

@endsection