@if($tooltipDate)
  @tooltip(['componentElement' => 'span', 'placement' => 'top'])
    @slot('title')
        {{ $tooltipDate }}
    @endslot
    <time class="{{ $metaDate }}">{{ $refinedDate }}</time>
  @endtooltip
@else
  <time class="{{ $metaDate }}">{{ $refinedDate }}</time>
@endif