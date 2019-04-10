<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <ol>
    @foreach($list as $item) 
    <li>
        <a href="{{ $item['href'] }}" {{ $item['current'] ? 'aria-current="page"' : '' }}>
            {{ $item['label'] }}
        </a>
    </li>
    @endforeach
  </ol>
</nav>