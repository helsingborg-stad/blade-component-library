<!-- date.blade.php -->
@if(!$badge) 
  <!-- Simple Badge -->
  <time id="{{ $id }}" class="{{$class}}" {!! $attribute !!} datetime="{{ $htmlDate }}">{{ $refinedDate }}</time>
@endif

@if($badge) 

  <time id="{{ $id }}" class="{{$class}}" {!! $attribute !!} datetime="{{ $htmlDate }}" >

    @if($day)
      <span class="{{$baseClass}}__month">
        {{ implode(" - ", $day) }}
      </span>
    @endif

    @if($month)
      <span class="{{$baseClass}}__month">
        {{ implode(" - ", $month) }}
      </span>
    @endif

  </time>

@endif