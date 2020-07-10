<!-- navbar.blade.php -->
<nav id="{{ $id }}" class="{{$class}}" {!! $attribute !!}>
    <div class="{{$baseClass}}__toggle">
        @icon([
            'icon' => 'menu',
            'size' => 'xl',
            'attributeList' => 
                $sidebar ?
                    ['js-sidebar-trigger' => ""] :
                    ['js-menu-trigger' => "{$baseClass}__list--expanded",
                    'js-menu-dart' => "navbar-expand-{$uid}"]
        ])
        @endicon
    </div>

    
    <div class="{{$baseClass}}__logo">
        <a href="/">
            @image([
                'src'=> $logo,
                'alt' => "A logo"
                ])
            @endimage
        </a>
    </div>
    
    <div class="{{$baseClass}}__list">
        @if($slot)
            {!! $slot !!}
        @endif
        
        @foreach ($items as  $item)
            <a 
                href="{{$item['href']}}" 
                aria-label="{{$item['label']}}" 
                item-ancestor="{{$item['ancestor'] ? "true" : "false"}}" 
                item-active="{{$item['active'] ? "true" : "false"}}"
                item-has-children="{{$item['children'] ? "true" : "false"}}"
                item-children-async="{{is_array($item['children']) ? "false" : "true"}}"
            >
                <div class="{{$baseClass}}__item">
                    <span>{{$item['label']}}</span>
                </div>
            </a>
        @endforeach
    </div>

    @if ($expanded_menu)
        <div class="{{$baseClass}}__item {{$baseClass}}__expand">
            @button([
                'text' => 'Meny',
                'color' => 'default',
                'style' => 'basic',
                'icon' => 'expand_more',
                'attributeList' => ['js-toggle-trigger' => "navbar-content"]
            ])
            @endbutton
        </div>
    @endif

    @if($expanded_menu)
        <div class="{{$baseClass}}__content" js-toggle-item="navbar-content" js-toggle-class="u-height--auto">
            @include('Navbar.sub.expanded_menu')
            @include('Navbar.sub.expanded_main')
        </div>
    @endif
</nav>

