@grid([
    "classList" => [
        $baseClass.'__expanded_menu',
    ],
    "container" => true,
    "max_width" => "max-content",
    "col_gap" => "4"
])

    @if(!$isDynamic)
        @foreach ($expanded_menu as $key => $item)
            @grid([])
                @link([
                    'href' => $item['href']
                ])
                    {{$item['title']}}
                @endbutton
            @endgrid
        @endforeach
    @endif
@endgrid