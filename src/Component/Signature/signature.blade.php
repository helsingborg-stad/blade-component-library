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
                "element" => "span",
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
                "element" => "span",
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
                "element" => "span",
                "variant" => "byline",
                "classList" => [
                    $baseClass.'__published'
                ]
            ])
                {{$label->publish}}: @date(['action' => 'formatDate','timestamp' => $published])@enddate
            @endtypography
        @endif

        @if ($updated)
            @typography([
                "element" => "span",
                "variant" => "byline",
                "classList" => [
                    $baseClass.'__updated'
                ]
            ])
                {{$label->updated}}: @date(['action' => 'formatDate','timestamp' => $updated])@enddate
            @endtypography
        @endif
    </div>
</{{$componentElement}}>