<!-- card.blade.php -->
<div id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>

    @paper([
        'classList' => [$baseClass.'__paper']
    ])

        @if($top)
            <div class="{{$baseClass}}__top">{{ $top }}</div>
        @endif

        @if($title['position'] === 'top' && $title['text'])
            @include('Card.sub.card-top')
        @endif

        @if($image)
            @include('Card.sub.card-image')
        @endif

        @if($slot != "")
            <div class="{{$baseClass}}__middle">{{ $slot }}</div>
        @endif

        @if($showBody)
            <div class="{{$baseClass}}__body">
                @include('Card.sub.card-body')
            </div>
        @endif

        @if($showFooter)
            <div class="{{$baseClass}}__bottom @if($dropdown && $dropdown['position'] === 'bottom')
                {{$baseClass}}__with-bottom-dropdown @endif">

                @if($buttons)
                    @include('Card.sub.card-buttons')
                @endif

                @if($icons)
                    @include('Card.sub.card-icons')
                @endif

                @if($dropdown && $dropdown['position'] === 'bottom')
                    @include('Card.sub.card-dropdown')
                @endif

                @if($bottom)
                    {{ $bottom }}
                @endif

            </div>
        @endif

    @endpaper

</div>

