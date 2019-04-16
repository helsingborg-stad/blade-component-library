<!-- alert.blade.php -->
<div class="{{ $class }}">

    if($title) 
        <h2 class="{{$baseClass}}__heading">
            {{$title}}
        </h2>
    @endif

    if($content) 
        <article class="{{$baseClass}}__content">
            {{$content}}
        </article>
    @endif

    @if($dismiss) {
        @button('href' => "#dismiss", 'isPrimary' => false)
            {{$dismiss}}
        @endbutton
    }

    @if($accept) {
        @button('href' => "#accept", 'isPrimary' => true)
            {{$accept}}
        @endbutton
    }

</div>