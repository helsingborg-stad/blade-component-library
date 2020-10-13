@if ($top_level)
    <ul class="{{$baseClass}}__subcontainer--top">
@else
    <ul class="{{$baseClass}}__subcontainer {{ $isExpanded ? $baseClass . '__item--is-expanded' : '' }}"
        js-toggle-item="{{$appendID}}"
        js-toggle-class="{{$baseClass}}__item--is-expanded">
@endif

    @foreach ($items as $item)

        <li class="{{$baseClass}}__item">
            <a  class="{{$baseClass}}__link" 
                href="{{$item['href']}}" 
                aria-label="{{$item['label']}}" 
                data-item-ancestor="{{(int) $item['ancestor']}}" 
                data-item-active="{{(int) $item['active']}}"
                data-item-has-children="{{(int) $item['children']}}"
                data-item-children-async="{{ (int) is_bool($item['children'])}}"
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
            </li>
    @endforeach
</ul>