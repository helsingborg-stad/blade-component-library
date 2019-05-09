<!-- header.blade.php -->
<{{$componentElement}} class="{{ $class }}">

  @if($includeContainer)
    <div class="container">
  @endif

    <div class="{{ $baseClass }}__body">
        <a href="{{$logotypeHref}}" class="{{ $baseClass }}__home-link">
          {{$logotype}}
        </a>
        {{$menu}}
    </div>

  @if($includeContainer)
    </div>
  @endif

</{{$componentElement}}>