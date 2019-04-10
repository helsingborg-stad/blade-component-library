<!-- pagination.blade.php -->
@if($list)
<nav class="{{ $class }}" role="navigation" aria-label="Pagination Navigation">
    <ul>
        @foreach($list as $item) 
          @if($loop->index == $current) 
          <li class="{{$currentClass}}"><a href="{{ $item['href'] or '#' }}" aria-label="{{ $item['label'] or '' }}" aria-current="true">{{ $loop->index }}</a></li>
          @else
          <li><a href="{{ $item['href'] or '#' }}" aria-label="{{ $item['label'] or '' }}">{{ $loop->index }}</a></li>
          @endif
        @endforeach
    </ul>
</nav>
@else
<!-- No pagination data -->
@endif