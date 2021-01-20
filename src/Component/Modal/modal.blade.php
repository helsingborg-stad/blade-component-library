<!-- modal.blade.php -->
<div id="{{ $id }}" class="{{ $parentClass }}" role="dialog" aria-modal="true" aria-labelledby="modal__label__{{$id}}">
    <div class="{{$class}}"  {!! $attribute !!}>
        <header class="{{$baseClass}}__header">
            @if ($heading)
                @typography([
                    "id" => "modal__label__".$id,
                    "variant" => "h2",
                    "element" => "h2",
                ])
                 {{$heading}}
                @endtypography
            @endif

            @button([
                'text' => '',
                'icon' => 'close',
                'color' => 'default',
                'style' => 'basic',
                'attributeList' => ['data-close' => ''],
                'classList' => [$baseClass . "__close"],
            ])
            @endbutton
        </header>

        <section class="{{$baseClass}}__content">

            {{-- Previous button --}}
            @if ($navigation)
                @button([
                    'text' => '',
                    'icon' => 'chevron_left',
                    'color' => 'default',
                    'style' => 'basic',
                    'attributeList' => ['data-prev' => ''],
                    'classList' => [$baseClass . "__prev"],
                    'label' => 'Slide to previous'
                ])
                @endbutton
            @endif

            {!! $top !!}
            {!! $slot !!}

            {{-- Next button --}}
            @if ($navigation)
                @button([
                    'text' => '',
                    'icon' => 'chevron_right',
                    'color' => 'default',
                    'style' => 'basic',
                    'attributeList' => ['data-next' => ''],
                    'classList' => [$baseClass . "__next"],
                    'label' => 'Slide to next'
                ])
                @endbutton
            @endif
        </section>

        <footer class="{{$baseClass}}__footer">
            {!! $bottom !!}
        </footer>
        @if ($navigation)

            @steppers(
            [
                'type' => 'dots'
            ])
            @endsteppers

        @endif
    </div>
</div>
