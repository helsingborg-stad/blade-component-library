<!-- accordion.blade.php -->
@if($list)
<{{$componentElement}} class="{{ $class }}" js-expand-container="{{ $baseClass }}">
    @foreach($list as $section)
      <{{$sectionElement}} class="{{$baseClass}}__section" aria-labelledby="{{$baseClass}}__section-{{ $loop->index }}">

<{{$sectionHeadingElement}} class="{{$baseClass}}__button" aria-controls="{{ $baseClass }}__aria-{{ $id }}-{{ $loop->index }}" aria-expanded="false" js-expand-button="{{ $baseClass }}__button">
            <span class="{{$baseClass}}__button-wrapper">
                {!!$beforeHeading!!}
                {{ $section['heading'] }}
                {!!$afterHeading!!}

                @icon(['icon' => 'chevron-right', 'size' => 'md', 'classList' => [$baseClass . '__icon']])
                @endicon
            </span>
        </{{$sectionHeadingElement}}>

            <{{$sectionContentElement}} class="{{$baseClass}}__content" id="{{ $baseClass }}__aria-{{ $id }}-{{ $loop->index }}" aria-hidden="true">
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
