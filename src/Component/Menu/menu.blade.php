<!-- menu.blade.php -->
@if($items)
  @if($wrapper)
  <{{$elementType}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
  @endif
    <ul class="{{ $baseClass }}__list">
      @foreach($items as $item)
        <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }} {{ $item['active'] ? $baseClass . $activeClass : '' }}">
          <a  class="{{$baseClass}}__link ripple ripple--before" 
              href="{{$item['href']}}" 
              aria-label="{{$item['label']}}" 
              item-ancestor="{{$item['ancestor'] ? "true" : "false"}}" 
              item-active="{{$item['active'] ? "true" : "false"}}"
              item-has-children="{{$item['children'] ? "true" : "false"}}"
              item-children-async="{{is_array($item['children']) ? "false" : "true"}}"
          >
            @if(isset($item['icon']) && !empty($item['icon'])) 
              @icon(['icon' => $item['icon']])
              @endicon
            @endif
          
            <span class="{{$baseClass}}__label">
              {{ $item['label'] }}
            </span>
          </a>
          @include('Menu.sub') {{--- Recursive action ---}}
        </li>
      @endforeach
    </ul>
  @if($wrapper)
  </{{$elementType}}>
  @endif
@else
<!-- No menu data -->
@endif