<!-- pagination.blade.php -->
@if($list)
  <{{$elementType}} class="{{ $class }}">
      @foreach($list as $item)
        @if($item['href'])
        <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">
          <a href="{{ $item['href'] }}" aria-label="{{ $item['label'] }}" class="{{$baseClass}}__link {{$baseClass}}__link-{{ $loop->index }}">
            {{ $item['label'] }}
          </a>
        </li>
        @else
        <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">{{ $item['label'] }}</li>
        @endif
      @endforeach
  </{{$elementType}}>
@else
<!-- No pagination data -->
@endif