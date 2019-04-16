<!-- code.blade.php -->
<{{$componentElement}} class="{{$class}}">
<p>{{$content}}</p>
<{{$preTagElement}}><code data-type="{{ $language }}">{!!$slot!!}</code></{{$preTagElement}}>
</{{$componentElement}}>