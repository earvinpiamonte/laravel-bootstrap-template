{!! ($type) ? '<a' : '<span' !!}
    {{
        $attributes->merge(
            [
                'class' => 'badge badge-' . $variant
            ]
        )
    }}
>
    {!! $content ?: $slot !!}
{!! ($type) ? '</a>' : '</span>' !!}
