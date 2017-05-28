<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a href="{{ url('/') }}" class="nav-item nav-brand-item">
                {{ config('app.name') }}
            </a>
        </div>

        <span class="nav-toggle" v-on:click="navToggle = !navToggle">
            <span></span>
            <span></span>
            <span></span>
        </span>

        <div class="nav-right nav-menu" v-bind:class="{ 'is-active': navToggle }">
            @if (Auth::check())
                <a class="nav-item is-tab">
                    <figure class="image is-16x16" style="margin-right: 8px;">
                        <img src="http://bulma.io/images/jgthms.png">
                    </figure>
                    Profile
                </a>
                <a class="nav-item is-tab">Log out</a>
            @else
                <div class="nav-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a href="{{ route('login') }}" class="button {{ isRoute('login') }}">
                                {{ trans('meta.login.title') }}
                            </a>
                        </p>
                        <p class="control">
                            <a href="{{ route('register') }}" class="button is-primary {{ isRoute('register') }}">
                                {{ trans('meta.register.title') }}
                            </a>
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</nav>