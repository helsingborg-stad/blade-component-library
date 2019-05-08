<!-- menu.blade.php -->
@if($items)
  @if($wrapper)
  <{{$elementType}} class="{{ $class }}">
  @endif
    <ul>
      @foreach($items as $item)
        <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">
          <a href="{{ $item['href'] }}" aria-label="{{ $item['label'] }}" class="{{$baseClass}}__link">
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