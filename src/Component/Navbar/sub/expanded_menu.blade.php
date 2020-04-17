@grid([
    "classList" => [
        $baseClass.'__expanded_menu',
    ],
    "container" => true,
    "max_width" => "max-content",
    "col_gap" => "4"
])

    @if(!$multiDimensional)
        @foreach ($expanded_menu as $key => $item)
            @grid([])
                @link([
                    'href' => $item['href']
                ])
                    {{$key}}
                @endbutton
            @endgrid
        @endforeach
    @endif
@endgrid