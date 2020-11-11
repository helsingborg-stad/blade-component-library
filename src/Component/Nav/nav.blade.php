<!-- nav.blade.php -->
@if ($items) 
    <ul id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
        @foreach ($items as $item)
            <li 
                class="{{$baseClass}}__item {{$item['active'] ? 'is-current' : ''}}{{$item['active'] && $item['children'] || $item['ancestor'] ? ' is-open has-fetched' : ''}}"
        
                {{-- Append dynamic attributes --}}
                {!! !empty($item['attributeList']) ? $buildAttributes($item['attributeList']) : '' !!}
            >
                
                <a  class="{{$baseClass}}__link" 
                    href="{{$item['href']}}" 
                    aria-label="{{$item['label']}}" 
                >
                    {{$item['label']}}
                </a>

                @if ($item['children'])
                    @if($includeToggle)
                        @button([
                            'classList' => [ $baseClass . '__toggle', 'js-toggle-children'],
                            'style' => 'basic',
                            'icon' => 'expand_more',
                            'size' => 'lg',
                            'pressed' =>  $item['active'] ? 'true' : 'false',
                        ])
                            @loader(['size' => 'sm'])
                            @endloader
                        @endbutton
                    @endif

                    @if(is_array($item['children'])) 
                        @nav([
                            'items' => $item['children'],
                            'isExpanded' => (boolval($item['active']) || boolval($item['ancestor']) ) ? true : false,
                            'includeToggle' => $includeToggle
                        ])
                        @endnav
                    @endif
                @endif
            </li>
        @endforeach
    </ul>
@endif