<!-- testimonials.blade.php -->
@if($testimonials)
    <{{$componentElement}} class="{{$class}}" {!! $attribute !!}>
            <div class="grid js-autoslide-xs js-autoslide-sm js-autoslide-md" data-flickity="{{ $flickitySettings }}">
                @foreach($testimonials as $testimonial)
                    <div class="testimonial js-slider grid-xs-12 grid-sm-6 grid-lg-3">
                        @if (($loop->index + 1) % 2 === 0 )
                            @if ($testimonial['image'])
                                <div class="testimonial__image">
                                    <img src="{{ $testimonial['image'] }}">
                                </div>
                            @endif
                            <div class="testimonial__header">
                                @if ($testimonial['name'])
                                    <h4>{{$testimonial['name']}}</h4>
                                @endif
                                @if ($testimonial['title'])
                                    <h6>{{$testimonial['title']}}</h6>
                                @endif
                            </div>
                        @else
                            <div class="testimonial__header">
                                @if ($testimonial['name'])
                                    <h4>{{$testimonial['name']}}</h4>
                                @endif
                                @if ($testimonial['title'])
                                    <h6>{{$testimonial['title']}}</h6>
                                @endif
                            </div>
                            @if ($testimonial['image'])
                                <div class="testimonial__image">
                                    <img src="{{$testimonial['image']}}">
                                </div>
                            @endif
                        @endif
                        <div class="testimonial__quote">
                            <p>
                                {{$testimonial['testimonial']}}
                            <p>
                        </div>
                    </div>
                @endforeach
            </div>
    </{{$componentElement}}>
@endif
