<!-- table.blade.php -->
@if($list)
  <table class="{{ $class }}">
    @if($showCaption)
    <caption>{{ $caption }}</caption>
    @endif

    @if($showHeader)
    <thead>
      <tr>
        @foreach($headings as $heading)
          <th scope="col" class="column-{{ $loop->index }}">{{ $heading }}</th>
        @endforeach
      </tr>
    </thead>
    @endif

    <tbody>
      @foreach($list as $row) 
        <tr class="line-{{ $loop->index }}">
          @foreach($row as $column) 
            <th scope="row" class="column-{{ $loop->index }}">{{ $column or '' }}</th>
          @endforeach
        </tr>
      @endforeach
    </tbody>

    @if($showFooter)
      <tfoot>
        <tr>
          @foreach($headings as $heading)
            <th scope="col" class="column-{{ $loop->index }}">{{ $heading }}</th>
          @endforeach
        </tr>
      </tfoot>
    @endif
  </table>
@else
  <!-- No table list data -->
@endif