@extends('layouts.app')

@section('content')
    <section class="hero is-fullheight is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">
                        <h1 class="title">{{ trans('auth.login_your_account') }}</h1>
                        <form action="{{ route('login') }}" method="POST">
                            {!! csrf_field() !!}
                            <div class="box">
                                @include('fields.input', ['name' => 'email', 'type' => 'email'])
                                @include('fields.input', ['name' => 'password', 'type' => 'password'])
                                @include('fields.checkbox', ['name' => 'remember_me'])

                                <p class="control">
                                    <button type="submit" class="button is-primary">{{ trans('meta.login.title') }}</button>
                                </p>
                            </div>

                            <p class="has-text-centered">
                                <a href="{{ route('register') }}">{{ trans('meta.register.title') }}</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
