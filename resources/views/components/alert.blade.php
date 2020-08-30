<div
    {{
        $attributes->merge(
            [
                'class' => 'alert alert-' . $context . ' ' . $dismissable
            ]
        )
    }}
    role="alert"
>
    {!! $content ?: $slot !!}

    @if($dismissable) <x-button-close type="alert" /> @endif
</div>
