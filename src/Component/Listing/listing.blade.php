<!-- pagination.blade.php -->
@if($list)
  <{{$elementType}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
     
      @foreach($list as $item)

        {{--- List item ---}}
        @if(isset($item['href']))
        <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">
          <a href="{{ $item['href'] }}" aria-label="{{ $item['label'] }}" class="{{$baseClass}}__link">
            <span class="{{$baseClass}}__label">
              {{ $item['label'] }}
            </span>

            @icon(['icon' => 'arrow_forward', 'size' => 'lg'])
            @endicon
          </a>
          @include('Listing.sub') {{--- Recursive action ---}}
        </li>
        @else
        <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">
          <span class="{{$baseClass}}__label">
            @if(isset($item['label']) && !empty($item['label']))
            {!! $item['label'] !!}
            @endif
          </span>
          @include('Listing.sub') {{--- Recursive action ---}}
        </li>
        @endif

      @endforeach

  </{{$elementType}}>
@else
<!-- No pagination data -->
@endif