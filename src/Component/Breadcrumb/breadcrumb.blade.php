<!-- breadcrumb.blade.php -->
@if($list)
<{{$componentElement}} class="{{ $class }}" aria-label="{{$label}}">
  <{{$listType}}>
    @foreach($list as $item) 
    <{{$listItemType}} data-level="{{ $loop->depth }}" class="{{$baseClass}}__item {{$baseClass}}__item_{{ $loop->index }} {{$baseClass}}__item_depth-{{ $loop->depth }}">
        <a class="{{$baseClass}}__link" href="{{ $item['href'] }}" {{ $loop->last ? 'aria-current=page' : '' }}>
          {{ $item['label'] }}
        </a>
    </{{$listItemType}}>
    @endforeach
  </{{$listType}}>
</{{$componentElement}}>
@else
<!-- No breadcrumb data -->
@endif