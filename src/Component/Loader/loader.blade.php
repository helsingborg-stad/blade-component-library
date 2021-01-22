<!-- loader.blade.php -->

<{{$componentElement}} id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
</{{$componentElement}}>
@if ($text)
    @typography([
        "id" => "loader__label__".$id,
        "variant" => "meta",
        "element" => "h5",
        "classList" => ['c-loader--text', 'u-display--none']
        ])
    {{$text}}
    @endtypography
@endif

