
<!-- accordion.blade.php -->
@if($list)
  <{{$componentElement}} class="{{ $class }}">
    @foreach($list as $section) 
      <{{$sectionElement}} class="{{$baseClass}}__section" aria-labelledby="{{$baseClass}}__heading-{{ $loop->index }}">
        
        <{{$sectionHeadingElement}} id="{{$baseClass}}__heading-{{$loop->index}}" class="{{$baseClass}}__heading {{$baseClass}}__heading-{{ $loop->index }}" js-bind="click" js-toggle-target="{{$baseClass}}__heading-{{$loop->index}}" js-toggle-class="{{$baseClass}}__heading--is-active">
          {{$beforeHeading}}
          {{ $section['heading'] }}
          {{$afterHeading}}
        </{{$sectionHeadingElement}}>
        
        <{{$sectionContentElement}} class="{{$baseClass}}__content {{$baseClass}}__content-{{ $loop->index }}">
          {{$beforeContent}}
          {{ $section['content'] }}
          {{$afterContent}}
        </{{$sectionContentElement}}>

      </{{$sectionElement}}>
    @endforeach
  </{{$componentElement}}>
@else
  <!-- No accordion list data -->
@endif