@extends('layouts.app')

@section('content')

<main>
  <header class="py-4">
    <div class="container">
      <h1>Components</h1>
    </div><!-- /.container -->
  </header>

  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div id="alert">
            <h2>Alert</h2>

            <h3 class="h5">Basic usage</h3>
            <x-alert context="light" class="border">
              <pre><code>&lt;x-alert content=&quot;This is a sample alert.&quot; /&gt;</code></pre>
              @foreach($data['bootstrapBrands'] as $brand)
                @if($brand != 'secondary')
                  @php
                    $htmlEntities = '<x-alert context="'.$brand.'" content="A simple '.$brand.' alert—check it out!"/>';
                  @endphp
                  <pre><code>{{ $htmlEntities }}</code></pre>
                @endif
              @endforeach
            </x-alert>

            <x-alert content="A simple secondary alert—check it out!"/>
            @foreach($data['bootstrapBrands'] as $brand)
              @if($brand != 'secondary')
                <x-alert context="{{ $brand }}" content="A simple {{ $brand }} alert—check it out!"/>
              @endif
            @endforeach

            <h3 class="h5">Additional content</h3>
            <x-alert context="light" class="border">
              <pre>
                <code>
&lt;x-alert context=&quot;success&quot;&gt;&#10;  &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;&#10;  &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;&#10;  &lt;hr&gt;&#10;  &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;&#10;&lt;/x-alert&gt;
                </code>
              </pre>
            </x-alert>
            <x-alert context="success">
              <h4 class="alert-heading">Well done!</h4>
              <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
              <hr>
              <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </x-alert>

            <h3 class="h5">Attributes</h3>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Attribute</th>
                    <th>Default</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <code>context</code>
                    </td>
                    <td>
                      secondary
                    </td>
                    <td>Contextual class/ brand.</td>
                  </tr>
                  <tr>
                    <td>
                      <code>dismissable</code>
                    </td>
                    <td>
                      false
                    </td>
                    <td>Specify if the alert is dismissable.</td>
                  </tr>
                  <tr>
                    <td>
                      <code>content</code>
                    </td>
                    <td>
                      null
                    </td>
                    <td>Alert&apos;s message/ content.</td>
                  </tr>
                </tbody>
              </table><!-- /.table table-bordered -->
            </div><!-- /.table-responsive -->
          </div><!-- /#alert -->

        </div><!-- /.col-md-8 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.py-5 -->
</main>

@endsection