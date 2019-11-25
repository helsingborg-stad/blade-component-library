<!-- field.blade.php -->
<div id="{{ $id }}" class="{{$class}}">
    @if(!$textarea)
        <input {!! $attribute !!} >
    @else
        <textarea {!! $attribute !!} ></textarea>
    @endif
    <label>{{$label}}</label>
</div>
