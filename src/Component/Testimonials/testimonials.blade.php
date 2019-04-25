<!-- testimonials.blade.php -->
@if($testimonials)
    <{{$componentElement}} class="{{ $class }}">
            <div class="grid js-autoslide-xs js-autoslide-sm js-autoslide-md" data-flickity='{{ $flickitySettings }}'>
                @foreach($testimonials as $testimonial)
                    <div class="testimonial js-slider grid-xs-12 grid-sm-6 grid-lg-3">
                        @if (($loop->index + 1) % 2 === 0 )
                            <div class="testimonial__image">
                                <img src="{{ $testimonial['image'] }}">
                            </div>
                            <div class="testimonial__header">
                                <h4>{{$testimonial['name']}}</h4>
                                <h6>{{$testimonial['title']}}</h6>
                            </div>
                        @else
                            <div class="testimonial__header">
                                <h4>{{$testimonial['name']}}</h4>
                                <h6>{{$testimonial['title']}}</h6>
                            </div>
                            <div class="testimonial__image">
                                <img src="{{$testimonial['image']}}">
                            </div>
                        @endif
                        <div class="testimonial__quote">
                            <p>
                                {{$testimonial['testimonial']}}
                            <p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
