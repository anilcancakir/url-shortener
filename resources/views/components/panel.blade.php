<?php /**
 * @var string $color
 * @var string $title
 * @var string $slot
 * @var string $noBody
 * @var string $footer
 */ ?>

<div class="panel panel-{{ isset($color) ? $color : 'default' }}">
    @if(isset($title))
        <div class="panel-heading">
            <h3 class="panel-title">{{ $title }}</h3>
        </div>
    @endif

    @if(isset($noBody) AND $noBody)
        {!! $slot !!}
    @else
        <div class="panel-body">
            {!! $slot !!}
        </div>
    @endif

    @if(isset($footer))
        <div class="panel-footer">{!! $footer !!}</div>
    @endif
</div>