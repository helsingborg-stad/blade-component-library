<!-- gallery.blade.php -->
@if($list)
    @php
        $unique = $loop->iteration.uniqid();
    @endphp

    <ul class="{{ $class }}" {!! $attribute !!} data-modal="true">
        @foreach($list as $key => $item)
            <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">

                @image([
                    'src'=> $item['smallImage'],
                    'alt' => $item['alt'],
                    'caption' => $item['caption'],
                    'fullWidth' => true,
                    'attributeList' => ['data-open' => 'gallery_'.$unique, 'data-imgSrc' =>  $item['largeImage']]
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
        'id' => 'gallery_'.$unique
    ])

        @image([
            'src'=> '',
            'alt' => "This is a image in a modal"
        ])
        @endimage

    @endmodal
@else
    <!-- No gallery data -->
@endif