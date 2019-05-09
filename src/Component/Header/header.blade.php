<!-- header.blade.php -->
<{{$componentElement}} class="{{ $class }}">

  @if($includeContainer)
    <div class="container">
  @endif
    <div class="grid">
      <div class="grid-xs-3">
        <a href="{{$logotypeHref}}">
          {{$logotype}}
        </a>
      </div>
      <div class="grid-xs-9">
        {{$menu}}
      </div>
    </div>
  @if($includeContainer)
    </div>
  @endif

</{{$componentElement}}>