<!-- alert.blade.php -->
<div class="{{ $class }}">

    {!! $top !!}

    @if($title) 
        <h2 class="{{$baseClass}}__heading">
            {{$title}}
        </h2>
    @endif

    @if($slot)
        <article class="{{$baseClass}}__content">
            {{$slot}}
        </article>
    @endif

    @if($dismiss) 
        @button(['href' => "#dismiss", 'isPrimary' => false])
            {{$dismiss}}
        @endbutton
    @endif

    @if($accept)
        @button(['href' => "#accept", 'isPrimary' => true])
            {{$accept}}
        @endbutton
    @endif

    {!! $bottom !!}

</div>