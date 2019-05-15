<!-- menu.blade.php -->
@if($items)
  @if($wrapper)
  <{{$elementType}} class="{{ $class }}">
  @endif
    <ul class="{{ $baseClass }}__list">
      @foreach($items as $item)
        <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }} {{ isset($item['active']) ? $baseClass . $activeClass : '' }}">
          <a href="{{ $item['href'] }}" aria-label="{{ $item['label'] }}" class="{{$baseClass}}__link">
            
            @if(isset($item['icon']) && !empty($item['icon'])) 
              @icon(['icon' => $item['icon']])
              @endicon
            @endif
          
            <span class="{{$baseClass}}__label">
                {{ $item['label'] }}
            </span>
          </a>
          @include('menu.sub') {{--- Recursive action ---}}
        </li>
      @endforeach
    </ul>
  @if($wrapper)
  </{{$elementType}}>
  @endif
@else
<!-- No menu data -->
@endif