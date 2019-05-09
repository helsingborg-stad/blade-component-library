<!-- header.blade.php -->
<{{$componentElement}} class="{{ $class }}">

  @if($includeContainer)
    <div class="container">
  @endif

    <div class="{{ $baseClass }}__body">
      <div class="grid">
        <div class="grid-xs-3">
          <a href="{{$logotypeHref}}" class="{{ $baseClass }}__home_link">
            {{$logotype}}
          </a>
        </div>
        <div class="grid-xs-9">
          {{$menu}}
        </div>
      </div>
    </div>

  @if($includeContainer)
    </div>
  @endif

</{{$componentElement}}>