<!-- tabs.blade.php -->
@if($tabs)
    <{{$componentElement}} class="{{ $class }}" js-expand-container="{{ $baseClass }}" {!! $attribute !!}>
        <div class="{{ $baseClass }}__header">
            @foreach($tabs as $tab)
                <{{$headingElement}} tabindex="0" role="tab" class="{{$baseClass}}__button" aria-controls="{{ $baseClass }}__aria-{{ $id }}-{{ $loop->index }}" aria-expanded="{{ $loop->index === 0 ? 'true' : 'false' }}" js-expand-button="{{ $baseClass }}__button">
                    <span class="{{$baseClass}}__button-wrapper" tabindex="-1">
                        {{ $tab['title'] ?? '' }}
                    </span>
                </{{$headingElement}}>
            @endforeach
        </div>

        @foreach($tabs as $tab)
            <{{$contentElement}} class="{{$baseClass}}__content" role="tabpanel" id="{{ $baseClass }}__aria-{{ $id }}-{{ $loop->index }}" aria-hidden="{{ $loop->index === 0 ? 'false' : 'true' }}">
                {!! $tab['content'] ?? '' !!}
            </{{$contentElement}}>
        @endforeach

    </{{$componentElement}}>
@else
  <!-- No tabs data -->
@endif
