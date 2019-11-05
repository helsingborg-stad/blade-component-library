<!-- modal.blade.php -->
<div class="{{ $parentClass }}" id="{{ $id }}">
    <div class="{{$class}}"  {!! $attribute !!}>
        <header class="modal-header">
            {{$heading}}

            @button(
                [
                    'href' => '#',
                    'isOutlined' => false,
                    'text' => '',
                    'icon' => ['name' => 'close', 'color' => 'white', 'size'=>'md'],
                    'attributeList' => ['data-close' => true],
                    'isIconButton' => true,
                    'classList' => [$baseClass.'__close', '']

                ]
            )
            @endbutton

        </header>

        <section class="c-modal__content">
            @if ($navigation)

                @button(
                    [
                        'href' => '#',
                        'isOutlined' => false,
                        'text' => '',
                        'icon' => ['name' => 'chevron-left', 'color' => 'white', 'size'=>'xl'],
                        'attributeList' => ['data-prev' => true],
                        'isIconButton' => true,
                        'classList' => [$baseClass.'__prev'],
                        'size' => 'lg'
                    ]
                )
                @endbutton

            @endif
            
                {{$slot}}
    
            @if ($navigation)

                    @button(
                        [
                            'href' => '#',
                            'isOutlined' => false,
                            'text' => '',
                            'icon' => ['name' => 'chevron-right', 'color' => 'white', 'size'=>'xl'],
                            'attributeList' => ['data-next' => true],
                            'isIconButton' => true,
                            'classList' => [$baseClass.'__next']
                        ]
                    )
                    @endbutton

                </button>
            @endif
        </section>

        <footer class="modal-footer">
            {!! $bottom !!}
        </footer>
    </div>
</div>

