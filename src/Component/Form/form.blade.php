<!-- form.blade.php -->
<div class="{{$baseClass}}">
    <form id="{{ $id }}" class="{{$class}}" {!! $attribute !!} method="{{$method}}" action="{{$action}}">
        {!! $slot !!}
    </form>
</div>