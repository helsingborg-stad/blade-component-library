<!-- footer.blade.php -->
<{{$componentElement}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
  <div class="{{ $baseClass }}__body">
      <a href="{{$logotypeHref}}" class="{{ $baseClass }}__home-link">
        {{$logotype}}
      </a>
      {{$menu}}
  </div>
</{{$componentElement}}>