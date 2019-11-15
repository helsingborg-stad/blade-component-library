<div class="c-navbar__subitem" js-menu-target="{{$uniqID}}">
    @foreach ($item as $childKey => $childItem)
        @php
            $uniqID = uniqid()
        @endphp
        <div class="c-navbar__item" js-toggle-self="" aria-pressed="false">
            
            <a href="{{$childItem['href']}}">{{$childKey}}</a>
        
            @if (isset($childItem['list']))
                <div class="c-navbar__toggle">
                    @button([
                        'isIconButton' =>  true,
                        'icon' => ['name' => 'menu', 'color' => 'primary', 'size' => 'lg'],
                        'href' => 'javascript:void(0)',
                        'background' => false,
                        'attributeList' => [
                            'js-menu-trigger' => 'c-navbar__subitem--expanded',
                            'js-menu-dart' => $uniqID
                        ]
                    ])
                    @endbutton
                </div>
                @include('Navbar.subitem', array('item' => $childItem['list'], 'uniqID' => $uniqID))
            @endif
        </div> 
    @endforeach
</div>