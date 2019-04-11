<!-- breadcrumb.blade.php -->
@if($list)
<nav class="{{ $class }}" aria-label="Breadcrumb">
  <ol>
    @foreach($list as $item) 
    <li data-level="{{ $loop->depth }}" class="{{$baseClass}}__item {{$baseClass}}__item--{{ $loop->index }} {{$baseClass}}__item--depth-{{ $loop->depth }}">
        <a class="{{$baseClass}}__link" href="{{ $item['href'] or '#' }}" {{ $loop->last ? 'aria-current=page' : '' }}>
          {{ $item['label'] or '' }}
        </a>
    </li>
    @endforeach
  </ol>
</nav>
@else
<!-- No breadcrumb data -->
@endif