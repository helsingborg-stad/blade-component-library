<!-- accordion.blade.php -->
@if($list)
  <{{$componentElement}} class="{{ $class }}">
    @foreach($list as $section)
      <{{$sectionElement}} class="{{$baseClass}}__section" aria-labelledby="{{$baseClass}}__section-{{ $loop->index }}" js-bind="click" js-bind="tab" js-toggle-class="{{$baseClass}}__section--is-active" js-toggle-siblings="true">

        <{{$sectionHeadingElement}} id="{{$baseClass}}__header-{{$loop->index}}" class="{{$baseClass}}__header {{$baseClass}}__header-{{ $loop->index }}">
                <div class="{{$baseClass}}__title">
                    {!!$beforeHeading!!}
                    {{ $section['heading'] }}
                    {!!$afterHeading!!}
                </div>
                <div class="{{$baseClass}}__icon">
                    @icon(['icon' => 'chevron-right', 'size' => 'md', 'classList' => [$baseClass . '__arrow']])
                    @endicon
                </div>
        </{{$sectionHeadingElement}}>

        <{{$sectionContentElement}} class="{{$baseClass}}__content {{$baseClass}}__content-{{ $loop->index }}">
          {!!$beforeContent!!}
          {{ $section['content'] }}
          {!!$afterContent!!}
        </{{$sectionContentElement}}>

      </{{$sectionElement}}>
    @endforeach
  </{{$componentElement}}>
@else
  <!-- No accordion list data -->
@endif
