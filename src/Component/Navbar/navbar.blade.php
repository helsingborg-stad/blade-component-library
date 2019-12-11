<!-- navbar.blade.php -->
<nav id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    <div class="{{$baseClass}}__logo">
        @image([
            'src'=> $logo,
            'alt' => "A logo"
            ])
        @endimage

        <div class="{{$baseClass}}__toggle">
            @button([
                'isIconButton' =>  true,
                'icon' => ['name' => 'menu', 'color' => 'primary', 'size' => 'lg'],
                'href' => 'javascript:void(0)',
                'background' => false,
                'attributeList' => [
                    'js-menu-trigger' => "{$baseClass}__list--expanded",
                    'js-menu-dart' => "navbar-expand-{$uid}"
                ]
            ])
            @endbutton
        </div>
    </div>

    

    @foreach ($items as $itemlist )
        <div class="{{$baseClass}}__list" js-menu-target="navbar-expand-{{$uid}}">
            @foreach ($itemlist as  $item)

                <a href="{{$item['href']}}" aria-label="{{$item['name']}}">

                    <div class="{{$baseClass}}__item">
                        
                        <span>{{$item['name']}}</span>

                        @if (isset($item['list']))
                            <div class="{{$baseClass}}__toggle">
                                @button([
                                    'isIconButton' =>  true,
                                    'icon' => ['name' => 'expand_more', 'color' => 'primary', 'size' => 'md'],
                                    'href' => 'javascript:void(0)',
                                    'background' => false,
                                    'attributeList' => [
                                        'js-menu-trigger' => "{$baseClass}__subitem--expanded",
                                        'js-menu-dart' => $loop->iteration,
                                        'data-load-submenu' => $item['id']
                                    ]
                                ])
                                @endbutton
                            </div>

                            <div class="{{$baseClass}}__subcontainer">
                                @include ('Navbar.subitem', array('item' => $item['list'], 'appendID' => $item['id'], 'targetId' => $loop->iteration))
                            </div>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
    @endforeach
</nav>