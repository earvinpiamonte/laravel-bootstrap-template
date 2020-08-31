<div
    {{
        $attributes->merge(
            [
                'class' => 'alert alert-' . $variant . ' ' . $dismissable
            ]
        )
    }}
    role="alert"
>
    {!! $content ?: $slot !!}

    @if($dismissable) <x-button-close type="alert" /> @endif
</div>
