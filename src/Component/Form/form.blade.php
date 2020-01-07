<!-- form.blade.php -->
<div class="{{$baseClass}}">
    <form id="{{ $id }}" class="{{$class}}" method="{{$method}}" action="{{$action}}"  {!! $attribute !!}>
        {!! $slot !!}
    </form>
</div>