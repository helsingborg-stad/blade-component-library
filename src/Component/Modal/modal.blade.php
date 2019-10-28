<!-- alert.blade.php -->
{{-- <div class="{{ $class }}" {!! $attribute !!} id="{{ $id }}" data-state="closed" data-target="{{ $id }}">

    <div class="{{$baseClass}}__inner">

        {!! $top !!}

        <button class="{{$baseClass}}__toggle" data-target="{{ $id }}">
            @icon(['icon' => 'cancel', 'size' => 'lg'])
            @endicon
        </button>

        @if($heading) 
            <h2 class="{{$baseClass}}__heading">
                {{$heading}}
            </h2>
        @endif

        @if($slot)
            <div class="{{$baseClass}}__content">
                {{$slot}}
            </div>
        @endif

        {!! $bottom !!}

    </div>
</div> --}}

<div class="{{ $class }}" {!! $attribute !!} id="{{ $id }}">
    <div class="{{$baseClass}}__inner">
        <header class="modal-header">
            {{$heading}}
            
            <button class="{{$baseClass}}__close" data-close>
                @icon(['icon' => 'cancel', 'size' => 'lg'])
                @endicon
            </button>
        </header>
        
        <section class="modal-content">
            {!! $top !!}
            {{$slot}}
        </section>

        <footer class="modal-footer">
            {!! $bottom !!}
        </footer>
    </div>
</div>