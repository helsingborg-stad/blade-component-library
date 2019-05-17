<!-- field.blade.php -->
<div class="{{$class}}">
    @if({{$textarea}}) 
        <input {!! $attribute !!} >
    @else
        <textarea {!! $attribute !!} ></textarea>
    @endif
    <label>{{$label}}</label>
</div>
