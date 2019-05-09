<!-- accordion.blade.php -->
@if($list)
  <{{$componentElement}} class="{{ $class }}">
    @foreach($list as $section)
      <{{$sectionElement}} class="{{$baseClass}}__section" aria-labelledby="{{$baseClass}}__heading-{{ $loop->index }}" js-bind="click" js-toggle-accordion="{{$baseClass}}__heading-{{$loop->index}}" js-toggle-class="{{$baseClass}}__heading--is-active">

        <{{$sectionHeadingElement}} id="{{$baseClass}}__heading-{{$loop->index}}" class="{{$baseClass}}__heading {{$baseClass}}__heading-{{ $loop->index }}">
            <div class="grid">
                <div class="grid-md-fit-content grid-va-middle">
                    {!!$beforeHeading!!}
                    {{ $section['heading'] }}
                    {!!$afterHeading!!}
                </div>
                <div class="grid-md-fit-content u-ml-auto grid-va-middle">
                    @icon(['icon' => 'arrow-drop-down', 'classList' => [$baseClass . '__arrow']])
                    @endicon
                </div>
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
