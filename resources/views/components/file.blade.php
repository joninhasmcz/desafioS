<label class = "{{ $class ?? null }}">
    <span>{{ $label ?? $input ?? "Erro"}}</span>
    {!! Form::file($input, $value ?? null, $attributes) !!}
</label>