<!-- navbar.blade.php -->
<nav class="{{$class}}" {!! $attribute !!}>
    <div class="{{$baseClass}}__logo">
        @image([
            'src'=> $logo,
            'alt' => "A logo",
            'classList' => ['u-padding--2']
            ])
        @endimage
    </div>

    @foreach ($items as $itemlist )
        <div class="{{$baseClass}}__list" js-menu-target="navbar-expand">
            @foreach ($itemlist as $key => $item)
                @php
                    $uniqID = uniqid()
                @endphp
                <div class="{{$baseClass}}__item">
                    
                    <a href="{{$item['href']}}">{{$key}}</a>

                    @if (isset($item['list']))
                        <div class="{{$baseClass}}__toggle">
                            @button([
                                'isIconButton' =>  true,
                                'icon' => ['name' => 'menu', 'color' => 'primary', 'size' => 'lg'],
                                'href' => 'javascript:void(0)',
                                'background' => false,
                                'attributeList' => [
                                    'js-menu-trigger' => "{$baseClass}__subitem--expanded",
                                    'js-menu-dart' => $uniqID
                                ]
                            ])
                            @endbutton
                        </div>

                        <div class="{{$baseClass}}__subcontainer">
                            @include ('Navbar.subitem', array('item' => $item['list'], 'uniqID' => $uniqID))
                        </div>
                    @endif
                </div>
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
                'js-menu-dart' => 'navbar-expand'
            ]
        ])
        @endbutton
    </div>
</nav>