<div id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    <div class="{{$baseClass}}__avatar">
        @avatar([
            'image' => ($avatar) ? $avatar : false,
            'name' => $author,
            'size' => $avatar_size
        ])
        @endavatar
    </div>

    <div class="{{$baseClass}}__content">
        @typography([
            "variant" => "subtitle",
            "classList" => [
                $baseClass.'__author'
            ]
        ])
            {{$author}}
        @endtypography

        @typography([
            "variant" => "byline",
            "classList" => [
                $baseClass.'__title'
            ]
        ])
            Skribent
        @endtypography

        @if ($published)
            @typography([
                "variant" => "byline",
                "classList" => [
                    $baseClass.'__published'
                ]
            ])
                Published: @date(['action' => 'formatDate','timestamp' => $published])@enddate
            @endtypography
        @endif

        @if ($updated)
            @typography([
                "variant" => "byline",
                "classList" => [
                    $baseClass.'__updated'
                ]
            ])
                Updated: @date(['action' => 'formatDate','timestamp' => $updated])@enddate
            @endtypography
        @endif
    </div>
</div>