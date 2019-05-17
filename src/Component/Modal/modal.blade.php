<!-- alert.blade.php -->
<div class="{{ $class }}" {!! $attribute !!}>

    <div class="{{$baseClass}}__inner">

        {!! $top !!}

        <div class="{{$baseClass}}__close">
            @icon(['icon' => 'cancel', 'size' => 'lg'])
            @endicon
        </div>

        @if($heading) 
            <h2 class="{{$baseClass}}__heading">
                {{$heading}}
            </h2>
        @endif

        @if($slot)
            <article class="{{$baseClass}}__content">
                {{$slot}}
            </article>
        @endif

        {!! $bottom !!}

    </div>

</div>