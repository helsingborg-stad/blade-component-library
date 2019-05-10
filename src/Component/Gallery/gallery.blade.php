<!-- gallery.blade.php -->
@if($list)
  <section class="{{ $class }}">
  <ul>  
  @foreach($list as $item)
      <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">
        <a class="{{$baseClass}}__link {{$baseClass}}__link-{{ $loop->index }}" href="{{$item['largeImage']}}">
          @image([
              'src'=> $item['smallImage'],
              'alt' => $item['alt'],
              'caption' => $item['caption']
          ])
          @endimage
        </a>
      </li>
    @endforeach
    </ul>
  </section>
@else
<!-- No gallery data -->
@endif