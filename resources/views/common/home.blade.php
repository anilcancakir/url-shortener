@extends('layouts.app')

@section('content')
    <section class="hero is-primary is-medium hero-home">
        <div class="hero-body">
            <form action="{{ route('urls.store') }}" method="POST">
                {!! csrf_field() !!}

                <div class="container has-text-centered">
                    <h1 class="title">{{ trans('meta.home.title') }}</h1>

                    <div class="columns">
                        <div class="column is-8 is-offset-2">
                            <div class="field has-addons">
                                <p class="control is-expanded">
                                    <input class="input is-large" type="text" name="url" title="{{ trans('validation.attributes.url') }}" placeholder="{{ trans('common.you_want_to_short_url') }}" autofocus>
                                </p>

                                <p class="control">
                                    <button type="submit" class="button is-large is-success">
                                        {{ trans('common.short') }}
                                    </button>
                                </p>
                            </div>

                            @foreach($errors->get('url') as $error)
                                <div class="notification is-danger">
                                    <span class="icon"><i class="fa fa-times fa-fw"></i></span>
                                    <span>{{ $error }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    @if (isset($url))
        <section class="hero is-success">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">{{ trans('common.url_shorted') }}</h1>
                    <h2 class="subtitle">{{ trans('common.url_shorted_desc') }}</h2>

                    <copy-input url="{{ route('urls.show', $url) }}"></copy-input>
                </div>
            </div>
        </section>
    @endif
@endsection