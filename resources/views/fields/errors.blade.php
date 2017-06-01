@foreach($errors->get($name) as $error)
    <p class="help is-danger">{{ $error }}</p>
@endforeach