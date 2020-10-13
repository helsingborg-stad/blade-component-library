@if ($topLevel)
    <ul class="{{$baseClass}}__subcontainer--top">
@else
    <ul 
        class="{{$baseClass}}__subcontainer {{ $isExpanded ? $baseClass . '__item--is-expanded' : '' }}"
        js-toggle-item="{{$appendID}}"
        js-toggle-class="{{$baseClass}}__item--is-expanded">
@endif
    @if($items) 
        @foreach ($items as $item)
            <li 
                class="{{$baseClass}}__item"
                data-item-ancestor="{{(int) $item['ancestor']}}" 
                data-item-active="{{(int) $item['active']}}"
                data-item-has-children="{{(int) $item['children']}}"
                data-item-children-async="{{ (int) is_bool($item['children'])}}"
            >
                
                <a  class="{{$baseClass}}__link" 
                    href="{{$item['href']}}" 
                    aria-label="{{$item['label']}}" 
                >
                    {{$item['label']}}
                </a>

                @if ($item['children'])

                    @php $rndId = uniqid(); @endphp

                    @if($includeToggle)
                        <a  href="#nav-{{$rndId}}"
                            class="{{$baseClass}}__toggle"
                            js-toggle-trigger="{{$rndId}}"
                            aria-label="{{$item['id']}}"
                            aria-pressed="{{ ( $item['active'] || $item['ancestor'] ) ? 'true' : 'false' }}">
                        </a>
                    @endif

                    @if(is_array($item['children'])) 
                        @include (
                            'Nav.item', 
                            array(
                                'items' => $item['children'], 
                                'appendID' => $rndId, 
                                'topLevel' => false,
                                'isExpanded' => (boolval($item['active']) || boolval($item['ancestor']) ) ? true : false 
                            )
                        )
                    @endif
                @endif
            </li>
        @endforeach
    @endif
</ul>