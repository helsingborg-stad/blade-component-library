<!-- gallery.blade.php -->
@if($list)
  <ul class="{{ $class }}" {!! $attribute !!}>
    @foreach($list as $item)
      <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">
        <a class="{{$baseClass}}__link {{$baseClass}}__link-{{ $loop->index }}" href="{{$item['largeImage']}}">
          @image([
              'src'=> $item['smallImage'],
              'alt' => $item['alt'],
              'caption' => $item['caption'],
              'fullWidth' => true
          ])
          @endimage
        </a>
      </li>
    @endforeach
  </ul>
@else
<!-- No gallery data -->
@endif