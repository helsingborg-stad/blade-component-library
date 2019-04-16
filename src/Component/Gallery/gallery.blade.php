<!-- gallery.blade.php -->
@if($list)
  <section class="{{ $class }}">
    @foreach($list as $item)
      <li class="item-{{ $loop->index }}">
        <a href="{{$item['largeImage']}}">
          @image([
              'src'=> $item['smallImage'],
              'alt' => $item['alt'],
              'caption' => $item['caption']
          ])
          @endimage
        </a>
      </li>
    @endforeach
  </section>
@else
<!-- No gallery data -->
@endif