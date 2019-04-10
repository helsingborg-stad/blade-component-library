<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <ol>
    @foreach($list as $item) 
    <li data-level="{{ $loop->depth }}" class="item-{{ $loop->index }} depth-{{ $loop->depth }}">
        <a href="{{ $item['href'] or '#' }}" {{ $loop->last ? 'aria-current=page' : '' }}>
          {{ $item['label'] or '' }}
        </a>
    </li>
    @endforeach
  </ol>
</nav>