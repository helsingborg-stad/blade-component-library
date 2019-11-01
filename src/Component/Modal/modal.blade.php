<!-- modal.blade.php -->
<div class="{{ $class }}" {!! $attribute !!} id="{{ $id }}">
    <div class="{{$baseClass}}__inner">
        <header class="modal-header">
            {{$heading}}
            
            @button([
                'href' => '#btn-3',
                'isOutlined' => false,
                'isIconButton' =>  true,
                'icon' => 'close',
                'size' => 'lg',
                'color' => 'secondary',
                'floating' => ['animate' => true, 'hover' => true],
                'attributeList' => ['data-close' => ''],
                'classList' => [$baseClass . "__close"],
            ])
            @endbutton
        </header>
        
        <section class="modal-content">

            {{-- Previous button --}}
            @if ($navigation)
                @button([
                    'href' => '#previous',
                    'isOutlined' => false,
                    'isIconButton' =>  true,
                    'icon' => 'chevron-left',
                    'reverseIcon' => false,
                    'size' => 'md',
                    'color' => 'secondary',
                    'floating' => ['animate' => true, 'hover' => true],
                    'attributeList' => ['data-prev' => ''],
                    'classList' => [$baseClass . "__prev"],
                    'label' => 'Slide to previous'
                ])
                @endbutton
            @endif

            {!! $top !!}
            {{$slot}}

            {{-- Next button --}}
            @if ($navigation)
                @button([
                    'href' => '#next',
                    'isOutlined' => false,
                    'isIconButton' =>  true,
                    'icon' => 'chevron-right',
                    'reverseIcon' => false,
                    'size' => 'md',
                    'color' => 'secondary',
                    'floating' => ['animate' => true, 'hover' => true],
                    'attributeList' => ['data-next' => ''],
                    'classList' => [$baseClass . "__next"],
                    'label' => 'Slide to next'
                ])
                @endbutton
            @endif
        </section>

        <footer class="modal-footer">
            {!! $bottom !!}
        </footer>
    </div>
</div>