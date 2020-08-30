<button
    {{
        $attributes->merge(
            [
                'class' => 'close'
            ]
        )
    }}
    type="button"
    data-dismiss="{{ $type }}"
    aria-label="Close"
>
    {!!
        $content ??
        (
            ($slot != '') ? $slot
            : '<span aria-hidden="true">&times;</span>'
        )
    !!}
</button>