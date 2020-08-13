<!-- table.blade.php -->
@if($list)
  <div id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    <div class="{{$baseClass}}__inner">
      <table class="{{$baseClass}}__table">
        @if($showCaption)
        <caption>{{ $caption }}</caption>
        @endif

        @if($showHeader)
        <thead class="{{$baseClass}}__head">

          @if($filterable)
            @field([
                'type' => 'text',
                'attributeList' => [
                    'type' => 'search',
                    'name' => 'search',
                    'js-filter-input' => $filterId
                ],
                'label' => "Search"
            ])
            @endfield
          @endif
          
          <tr class="{{$baseClass}}__line">
            @foreach($headings as $heading)
              <th scope="col" class="{{$baseClass}}__column {{$baseClass}}__column-{{ $loop->index }}" js-sort-button="{{ $loop->index }}">
				{{ $heading }}
				@if($sortable)
					@icon(['icon' => 'swap_vert', 'size' => 'md'])
					@endicon
				@endif
              </th>
            @endforeach
          </tr>
        </thead>
        @endif

        <tbody class="{{$baseClass}}__body" js-sort-data-container>
          @foreach($list as $row) 
        <tr class="{{$baseClass}}__line {{$baseClass}}__line-{{ $loop->index }}" js-sort-sortable js-filter-item @if(isset($row['href'])) js-row-href={{$row['href']}} @endif>
              @foreach($row['columns'] as $column) 
                <td scope="row" class="{{$baseClass}}__column {{$baseClass}}__column-{{ $loop->index }}" js-sort-data="{{ $loop->index }}" js-filter-data>{{ $column }}</td>
              @endforeach
            </tr>
          @endforeach
        </tbody>

        @if($showFooter)
          <tfoot class="{{$baseClass}}__foot">
            <tr class="{{$baseClass}}__line">
              @foreach($headings as $heading)
                <th scope="col" class="{{$baseClass}}__column {{$baseClass}}__column-{{ $loop->index }}">{{ $heading }}</th>
              @endforeach
            </tr>
          </tfoot>
        @endif
      </table>
    </div>
  </div>
@else
  <!-- No table list data -->
@endif