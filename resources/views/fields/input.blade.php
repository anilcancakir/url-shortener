@php($id = isset($id) ? $id : "input-{$name}")
@php($type = isset($type) ? $type : 'text')
@php($placeholder = isset($placeholder) ? "placeholder=\"{$placeholder}\"" : '')
@php($value = old($name) ? old($name) : (isset($value) ? $value : ''))
<div class="field">
    <label for="{{ $id }}" class="label">{{ isset($label) ? $label : trans("validation.attributes.{$name}") }}</label>
    <p class="control {{ $errors->has($name) ? 'has-icons-right' : '' }}">
        <input
                class="input {{ $errors->has($name) ? 'is-danger' : '' }}"
                type="{{ $type }}"
                name="{{ $name }}"
                id="{{ $id }}"
                value="{{ $value }}"
                {!! $placeholder !!}>

        @if($errors->has($name))
            <span class="icon is-small is-right">
              <i class="fa fa-warning"></i>
            </span>
        @endif
    </p>

    @include('fields.errors', ['name' => $name])
</div>