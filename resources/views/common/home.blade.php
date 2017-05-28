@extends('layouts.app')

@section('content')
    <section class="hero is-primary is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">{{ trans('meta.home.title') }}</h1>
                <h2 class="subtitle">{{ trans('common.we_shorted_x_links', ['count' => 5435345]) }}</h2>
            </div>
        </div>
    </section>
@endsection