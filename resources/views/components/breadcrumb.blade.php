@if(count($pages) > 0)
    <nav aria-label="breadcrumb" {{ $attributes->merge(['class' => null]) }}>
        <ol class="breadcrumb">
            @foreach($pages as $page)
                @if(array_key_exists('active', $page))
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $page['label'] }}
                    </li>
                @else
                    <li class="breadcrumb-item">
                        <a href="{{ $page['url'] }}">
                            {{ $page['label'] }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif