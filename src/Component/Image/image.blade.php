<!-- image.blade.php -->
<figure id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    @if($src) 
        <img src="{{$src}}" alt="{{$alt}}" class="{{$baseClass}}__image @if($openModal){{$baseClass}}__modal @endif" @if($openModal) data-open="{{$modalId}}" @endif />
        @if($caption)
            <figcaption class="{{$baseClass}}__caption">{{$caption}}</figcaption>
        @endif
    @else
        
        <div class="{{$baseClass}}__placeholder" aria-label="{{$alt}}">

            @if($placeholderIcon)
                @icon(['icon' => $placeholderIcon, 'size' => $placeholderIconSize])
                @endicon
            @endif

            @if($placeholderText)
                <label class="{{$baseClass}}__placeholder-text">
                    {{ $placeholderText }}
                </label>
            @endif
            
        </div>
        
    @endif
</figure>

@if ($openModal)
    @include('Image.sub.modal')
@endif