<!-- modal.blade.php -->
<div class="{{ $parentClass }}" id="{{ $id }}">
    <div class="{{$class}}"  {!! $attribute !!}>
        <header class="modal-header">
            {{$heading}}
            
            <button class="{{$baseClass}}__close" data-close>
                @icon(['icon' => 'cancel', 'size' => 'lg'])
                @endicon
            </button>
        </header>
        
        <section class="c-modal__content">
            @if ($navigation)
                <button class="{{$baseClass}}__prev" data-prev>
                    @icon(['icon' => 'chevron-left', 'size' => 'md'])
                    @endicon
                </button>
            @endif
            
                {{$slot}}
    
            @if ($navigation)
                <button class="{{$baseClass}}__next" data-next>
                    @icon(['icon' => 'chevron-right', 'size' => 'md'])
                    @endicon
                </button>
            @endif
        </section>

        <footer class="modal-footer">
            {!! $bottom !!}
        </footer>
    </div>
</div>