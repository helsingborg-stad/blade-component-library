<!-- testimonials.blade.php -->
@if($testimonials)
    <{{ $componentElement }} id="{{ $id }}" class="grid {{ $class }}" {!! $attribute !!}>
                @foreach($testimonials as $testimonial)
                    <div class="{{ $gridClasses }}">
                        @if (($loop->index + 1) % 2 === 0 )
                            @if ($testimonial['image'])
                                <div class="{{ $baseClass}}__image">
                                    <img src="{{ $testimonial['image'] }}">
                                </div>
                            @endif
                            <div class="{{ $baseClass}}__header">
                                @if ($testimonial['name'])
                                    <{{ $nameElement }}>{{$testimonial['name']}}</{{ $nameElement }}>
                                @endif
                                @if ($testimonial['title'])
                                    <{{ $titleElement }}>{{$testimonial['title']}}</{{ $titleElement }}>
                                @endif
                            </div>
                        @else
                            <div class="{{ $baseClass}}__header">
                                @if ($testimonial['name'])
                                    <{{ $nameElement }}>{{ $testimonial['name'] }}</{{ $nameElement }}>
                                @endif
                                @if ($testimonial['title'])
                                    <{{ $titleElement }}>{{ $testimonial['title'] }}</{{ $titleElement }}>
                                @endif
                            </div>
                            @if ($testimonial['image'])
                                <div class="{{ $baseClass}}__image">
                                    <img src="{{ $testimonial['image'] }}">
                                </div>
                            @endif
                        @endif
                        <div class="{{ $baseClass }}__quote">
                            <p>
                                {{ $testimonial['testimonial'] }}
                            <p>
                        </div>
                    </div>
                @endforeach
    </{{ $componentElement }}>
@endif
