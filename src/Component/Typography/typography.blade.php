<!-- typography.blade.php -->
<{{ $element }} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
  <span class="{{ $baseClass }}__inner">
    {{ $slot }}
  </span>
</{{ $element }}>