@if ($top_level)
    <div class="{{$baseClass}}__subcontainer--top">
@else
    <div class="{{$baseClass}}__subcontainer"
        js-toggle-item="{{$appendID}}"
        js-toggle-class="{{$baseClass}}__item--is-expanded">
@endif

    @foreach ($items as $item)
        <div class="{{$baseClass}}__item">
        
            <a  class="{{$baseClass}}__link" 
                href="{{$item['href']}}" 
                aria-label="{{$item['label']}}" 
                item-ancestor="{{boolval($item['ancestor'])}}" 
                item-active="{{$item['active']}}"
                item-has-children="{{boolval($item['children'])}}"
                item-children-async="{{boolval($item['children'])}}"
            >
                {{$item['label']}}
            </a>

            @if ($item['children'])
                @php
                    $rndId = uniqid();
                @endphp
                <div class="{{$baseClass}}__toggle"
                    @if(!isset($endpoints))
                        js-toggle-trigger="{{$rndId}}"
                    @endif
                    aria-label="{{$item['id']}}"
                    aria-pressed="false">

                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                @if(!isset($endpoints))
                    @include ('Sidebar.item', array('items' => $item['children'], 'appendID' => $rndId, 'top_level' => false))
                @endif
            @endif
        </div>
    @endforeach
</div>