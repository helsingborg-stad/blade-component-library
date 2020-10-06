@if ($top_level)
    <div class="{{$baseClass}}__subcontainer--top">
@else
    <div class="{{$baseClass}}__subcontainer {{ $isExpanded ? $baseClass . '__item--is-expanded' : '' }}"
        js-toggle-item="{{$appendID}}"
        js-toggle-class="{{$baseClass}}__item--is-expanded">
@endif

    @foreach ($items as $item)

        <div class="{{$baseClass}}__item">
            <a  class="{{$baseClass}}__link" 
                href="{{$item['href']}}" 
                aria-label="{{$item['label']}}" 
                item-ancestor="{{(int) $item['ancestor']}}" 
                item-active="{{(int) $item['active']}}"
                item-has-children="{{(int) $item['children']}}"
                item-children-async="{{ (int) is_bool($item['children'])}}"
            >
                {{$item['label']}}
            </a>

            @if ($item['children'])

                @php $rndId = uniqid(); @endphp

                <div class="{{$baseClass}}__toggle"
                    js-toggle-trigger="{{$rndId}}"
                    aria-label="{{$item['id']}}"
                    aria-pressed="{{ ( $item['active'] || $item['ancestor'] ) ? 'true' : 'false' }}">

                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>

                @include (
                    'Sidebar.item', 
                    array(
                        'items' => $item['children'], 
                        'appendID' => $rndId, 
                        'top_level' => false,
                        'isExpanded' => ( boolval($item['active']) || boolval($item['ancestor']) ) ? true : false 
                    )
                )
                
            @endif
        </div>
    @endforeach
</div>