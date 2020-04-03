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
        @foreach ($items as  $item)
            <a href="{{$item['href']}}" aria-label="{{$item['label']}}">
                <div class="{{$baseClass}}__item" item-active="{{isset($item['active']) ? "true" : "false"}}">
                    <span>{{$item['label']}}</span>
                </div>
            </a>
        @endforeach
    </div>

    @if ($expanded_menu)
        <a js-toggle-trigger="navbar-content">
            <div class="{{$baseClass}}__item {{$baseClass}}__expand">
                @button([
                    'text' => 'Meny',
                    'color' => 'default',
                    'style' => 'basic',
                    'icon' => 'expand_more'
                ])
                @endbutton
            </div>
        </a>
    @endif

    @if($expanded_menu)
        <div class="{{$baseClass}}__content" js-toggle-item="navbar-content" js-toggle-class="u-display--block">
            @include('Navbar.sub.expanded_menu')
            @include('Navbar.sub.expanded_main')
        </div>
    @endif
</nav>

