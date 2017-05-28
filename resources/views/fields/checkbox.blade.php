@php($id = isset($id) ? $id : "input-{$name}")
<div class="field">
    <p class="control">
        <label for="{{ $id }}" class="checkbox">
            <input
                    type="checkbox"
                    name="{{ $name }}"
                    id="{{ $id }}"
                    {!! $errors->has($name) ? 'class="is-danger"' : '' !!}
                    {!! old($name) ? 'checked' : '' !!}>

            {!! isset($label) ? $label : trans("validation.attributes.{$name}") !!}
        </label>
    </p>

    @foreach($errors->get($name) as $error)
        <p class="help is-danger">{{ $error }}</p>
    @endforeach
</div>