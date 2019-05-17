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
            <div class="{{$baseClass}}__content">
                {{$slot}}
            </div>
        @endif

        {!! $bottom !!}

    </div>

</div>