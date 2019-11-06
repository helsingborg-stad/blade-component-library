<!-- modal.blade.php -->
<div class="{{ $parentClass }}" id="{{ $id }}">
    <div class="{{$class}}"  {!! $attribute !!}>
        <header class="modal-header">
            {{$heading}}

            @button([
                'href' => '#btn-3',
                'isOutlined' => false,
                'isIconButton' =>  true,
                'icon' => ['name' => 'close', 'color' => 'white', 'size' => 'md'],
                'size' => 'lg',
                'color' => 'secondary',
                'floating' => ['animate' => true, 'hover' => true],
                'attributeList' => ['data-close' => ''],
                'classList' => [$baseClass . "__close"],
                'background' => false,
                'hasRipple' => true
            ])
            @endbutton
        </header>

        <section class="c-modal__content">

            {{-- Previous button --}}
            @if ($navigation)
                @button([
                    'href' => '#previous',
                    'isOutlined' => false,
                    'isIconButton' =>  true,
                    'icon' => ['name' => 'chevron-left', 'color' => 'white', 'size' => 'xl'],
                    'reverseIcon' => false,
                    'size' => 'md',
                    'color' => 'secondary',
                    'floating' => ['animate' => true, 'hover' => true],
                    'attributeList' => ['data-prev' => ''],
                    'classList' => [$baseClass . "__prev"],
                    'label' => 'Slide to previous',
                    'background' => false,
                    'hasRipple' => true
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
                    'icon' => ['name' => 'chevron-right', 'color' => 'white', 'size' => 'xl'],
                    'reverseIcon' => false,
                    'size' => 'md',
                    'color' => 'secondary',
                    'floating' => ['animate' => true, 'hover' => true],
                    'attributeList' => ['data-next' => ''],
                    'classList' => [$baseClass . "__next"],
                    'label' => 'Slide to next',
                    'background' => false,
                    'hasRipple' => true

                ])
                @endbutton
            @endif
        </section>

        <footer class="modal-footer">
            {!! $bottom !!}
        </footer>
    </div>
</div>
