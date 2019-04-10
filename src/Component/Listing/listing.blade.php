<!-- pagination.blade.php -->
@if($list)
  <{{$elementType}} class="{{ $class }}">
      @foreach($list as $item)
        @if($item['href'])
        <li class="item-{{ $loop->index }}">
          <a href="{{ $item['href'] or '#' }}" aria-label="{{ $item['label'] or '' }}">
            {{ $item['label'] or '' }}
          </a>
        </li>
        @else
        <li class="item-{{ $loop->index }}">{{ $item['label'] or '' }}</li>
        @endif
      @endforeach
  </{{$elementType}}>
@else
<!-- No pagination data -->
@endif