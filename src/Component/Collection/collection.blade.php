<!-- collection.blade.php -->
<{{$componentElement}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    
    @if ($list)
        @foreach ($list as $item) 
            @collection__item(['link' => $item['link']])
                @if($item['title'])
                    @typography(['element' => 'h4'])
                        {!! $item['title'] !!}
                    @endtypography
                @endif

                @if($item['content'])
                    @typography([])
                        {!! $item['content'] !!}
                    @endtypography
                @endif
            @endcollection__item
        @endforeach
    @endif

    @if($slotHasData)
        {!! $slot !!}
    @endif
</{{$componentElement}}>