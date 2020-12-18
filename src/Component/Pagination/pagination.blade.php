<!-- pagination.blade.php -->
@if($list)
<{{$componentElement}} id="{{ $id }}" class="{{ $class }}" role="navigation" aria-label="Pagination Navigation" {!! $attribute !!}>
    <{{$listElement}} class="{{$baseClass}}__list">
        @button([
          'style' => 'basic',
          'color' => 'primary',
          'icon' => 'chevron_left',
          'attributeList' => [
              'disabled' => $previousDisabled,
              'js-pagination-prev' => ''
            ],
          'href' => $previous,
          'classList' => [$baseClass . '__item--previous', $baseClass . '__item']
        ])
        @endbutton

        @includeWhen($firstItem, 'Pagination.Partials.less_indicator')

        <div class="u-display--flex" js-table-pagination--links>

        @foreach($list as $key => $item)
       
          @if($key +1 == $current)
          <{{$listItem}} class="{{$baseClass}}__item {{$baseClass}}__item{{ $currentClass }}" js-pagination-index="{{ $key +1 }}">
            <a class="{{$baseClass}}__link" href="{{ $item['href'] }}" aria-label="{{ $item['label'] }}" aria-current="true">
              <span class="{{$baseClass}}__label">
                {{ $key +1 }}
              </span>
            </a>
          </{{$listItem}}>
          @else
          <{{$listItem}} class="{{$baseClass}}__item" js-pagination-index="{{ $key +1 }}">
            <a class="{{$baseClass}}__link" href="{{ $item['href'] }}" aria-label="{{ $item['label'] }}">
              <span class="{{$baseClass}}__label">
                {{ $key +1 }}
              </span>
            </a>
          </{{$listItem}}>
          @endif
        @endforeach
        </div>

        @includeWhen($lastItem, 'Pagination.Partials.more_indicator')

        @button([
          'style' => 'basic',
          'color' => 'primary',
          'icon' => 'chevron_right',
          'attributeList' => [
              'disabled' => $nextDisabled,
            'js-pagination-next' => ''
          ],
          'href' => $next,
          'classList' => [$baseClass . '__item--next', $baseClass . '__item']
        ])
        @endbutton

    </{{$listElement}}>
</{{$componentElement}}>
@else
<!-- No pagination data -->
@endif