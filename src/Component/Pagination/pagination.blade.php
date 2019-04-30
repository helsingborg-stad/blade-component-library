<!-- pagination.blade.php -->
@if($list)
<{{$componentElement}} class="{{ $class }}" role="navigation" aria-label="Pagination Navigation">
    <{{$listElement}} class="{{$baseClass}}__list">
        @foreach($list as $item) 
          @if($loop->index+1 == $current)
          <{{$listItem}} class="{{$baseClass}}__item {{ $currentClass }}">
            <a class="{{$baseClass}}__link" href="{{ $item['href'] }}" aria-label="{{ $item['label'] }}" aria-current="true">
              <span class="{{$baseClass}}__label">
                {{ $loop->index+1 }}
              </span>
            </a>
          </{{$listItem}}>
          @else
          <{{$listItem}} class="{{$baseClass}}__item">
            <a class="{{$baseClass}}__link" href="{{ $item['href'] }}" aria-label="{{ $item['label'] }}">
              <span class="{{$baseClass}}__label">
                {{ $loop->index+1 }}
              </span>
            </a>
          </{{$listItem}}>
          @endif
        @endforeach
    </{{$listElement}}>
</{{$componentElement}}>
@else
<!-- No pagination data -->
@endif