@if($type)
    <a
@else
    <span
@endif
        {{
            $attributes->merge(
                [
                    'class' => 'badge badge-' . $variant
                ]
            )
        }}
    >
        {!! $content ?: $slot !!}
@if($type)
    </a>
@else
    </span>
@endif
