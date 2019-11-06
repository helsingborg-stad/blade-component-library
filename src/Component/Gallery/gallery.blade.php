<!-- gallery.blade.php -->
@if($list)
    <ul class="{{ $class }}" {!! $attribute !!}>
        @foreach($list as $key => $item)
            <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">

                @image([
                    'src'=> $item['smallImage'],
                    'alt' => $item['alt'],
                    'caption' => $item['caption'],
                    'fullWidth' => true,
                    'attributeList' => ['data-open' => $
                    
                    
                    ueId, 'data-imgSrc' =>  $item['largeImage']]

                    ])
                @endimage

            </li>
        @endforeach
    </ul>

    @modal([
        'isPanel' => false,
        'overlay' => 'dark',
        'animation' => 'scale-up',
        'navigation' => true,
        'id' => $uniqueId,
        'classList' => ['c-modal--gallery']
    ])

        @image([
            'src'=> '',
        ])
        @endimage

    @endmodal
@else
    <!-- No gallery data -->
@endif