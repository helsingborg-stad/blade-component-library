<{{$componentElement}} id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    
    @avatar([
        'image' => ($avatar) ? $avatar : false,
        'name' => $author,
        'size' => $avatar_size
    ])
    @endavatar

    <div class="{{$baseClass}}__content">
        
        @if($author)
            @typography([
                "variant" => "subtitle",
                "classList" => [
                    $baseClass.'__author'
                ]
            ])
                {{$author}}
            @endtypography
        @endif

        @if($authorRole && $author) 
            @typography([
                "variant" => "byline",
                "classList" => [
                    $baseClass.'__title'
                ]
            ])
                {{$authorRole}}
            @endtypography
        @endif

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
</{{$componentElement}}>