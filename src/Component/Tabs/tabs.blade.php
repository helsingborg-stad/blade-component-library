<!-- tabs.blade.php -->
@if($tabs)
    <{{$componentElement}} class="{{ $class }}" {!! $attribute !!}>
        <div class="nav nav--{{$baseClass}}">
            @foreach($tabs as $tab)
                <div class="nav__item" data-tab="tab-{{$loop->index}}">
                    <a class="nav__link" href="#" role="tab" tabindex="0" aria-selected="false">
                        {{ $tab['title'] ?? '' }}
                    </a>
                </div>
            @endforeach
        </div>
        <div class="{{$baseClass}}__content">
            @foreach($tabs as $tab)
                <div data-tab="tab-{{$loop->index}}">
                    {{ $tab['content'] ?? '' }}
                </div>
            @endforeach
        </div>
    </{{$componentElement}}>
@endif
