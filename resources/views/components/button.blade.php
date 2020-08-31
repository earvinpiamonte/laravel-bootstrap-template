{!! ($link) ? '<a' : '<button' !!}
    {{
        $attributes->merge(
            [
                'class' => 'btn ' .
                            ($outlined ?: 'btn-' . $variant) . ' ' .
                            $size . ' ' .
                            $block . ' ' .
                            $state
            ]
        )
    }}

    @if($link) role="button" @endif

    @if($state)
        {{ ($state == 'active') ? 'aria-pressed="true"' : 'disabled' }}
    @endif
>
    {!! $content ?: $slot !!}

{!! ($link) ? '</a>' : '</button>' !!}