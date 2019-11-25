<!-- navbar.blade.php -->
<nav id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    <div class="{{$baseClass}}__logo">
        @image([
            'src'=> $logo,
            'alt' => "A logo",
            'classList' => ['u-padding--2']
            ])
        @endimage
    </div>

    @php
        $uniqID = uniqid();
        $uniqID2 = uniqid();
    @endphp

    @foreach ($items as $itemlist )
        <div class="{{$baseClass}}__list" js-menu-target="navbar-expand-{{$uniqID2}}">
            @foreach ($itemlist as  $item)
                @php
                    $uniqID = uniqid()
                @endphp
                <a href="{{$item['href']}}">
                    <div class="{{$baseClass}}__item">
                        
                        <span>{{$item['name']}}</span>

                        @if (isset($item['list']))
                            <div class="{{$baseClass}}__toggle">
                                @button([
                                    'isIconButton' =>  true,
                                    'icon' => ['name' => 'menu', 'color' => 'primary', 'size' => 'lg'],
                                    'href' => 'javascript:void(0)',
                                    'background' => false,
                                    'attributeList' => [
                                        'js-menu-trigger' => "{$baseClass}__subitem--expanded",
                                        'js-menu-dart' => $uniqID,
                                        'data-load-submenu' => $item['id']
                                    ]
                                ])
                                @endbutton
                            </div>

                            <div class="{{$baseClass}}__subcontainer">
                                @include ('Navbar.subitem', array('item' => $item['list'], 'appendID' => $item['id'], 'uniqID' => $uniqID))
                            </div>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
    @endforeach

    <div class="{{$baseClass}}__toggle">
        @button([
            'isIconButton' =>  true,
            'icon' => ['name' => 'menu', 'color' => 'white', 'size' => 'lg'],
            'href' => 'javascript:void(0)',
            'background' => false,
            'attributeList' => [
                'js-menu-trigger' => "{$baseClass}__list--expanded",
                'js-menu-dart' => "navbar-expand-{$uniqID2}"
            ]
        ])
        @endbutton
    </div>
</nav>