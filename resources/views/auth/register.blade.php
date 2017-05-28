@extends('layouts.app')

@section('content')
    <section class="hero is-fullheight is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <h1 class="title">{{ trans('auth.free_register') }}</h1>
                        <form action="{{ route('register') }}" method="POST">
                            {!! csrf_field() !!}
                            <div class="box">
                                @include('fields.input', ['name' => 'name'])
                                @include('fields.input', ['name' => 'email', 'type' => 'email'])
                                @include('fields.input', ['name' => 'password', 'type' => 'password'])
                                @include('fields.input', ['name' => 'password_confirmation', 'type' => 'password'])
                                @include('fields.checkbox', ['name' => 'tos', 'label' => '<a href="#">Kullanım şartlarını</a> kabul ediyorum.'])

                                <p class="control">
                                    <button type="submit" class="button is-primary">{{ trans('meta.register.title') }}</button>
                                </p>
                            </div>

                            <p class="has-text-centered">
                                <a href="{{ route('login') }}">{{ trans('meta.login.title') }}</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
