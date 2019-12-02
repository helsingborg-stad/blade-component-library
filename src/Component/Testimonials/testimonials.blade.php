<!-- testimonials.blade.php -->
@if($testimonials)
    <{{ $componentElement }} id="{{ $id }}" class="grid {{ $class }}" {!! $attribute !!}>
                @foreach($testimonials as $testimonial)
                    <div class="{{ $gridClasses }}">

                        @if (($loop->index + 1) % 2 === 0 )
                            @if ($testimonial['image'])
                                @if ($testimonial['avatar'])
                                    @avatar([
                                        'image' => $testimonial['image'],
                                        'name' => $testimonial['name'],
                                        'size' => 'lg'
                                    ])
                                    @endavatar
                                @else
                                    @image([
                                        'src'=> $testimonial['image'],
                                        'alt' => $testimonial['name']
                                    ])
                                    @endimage
                                @endif
                            @endif

                            <div class="{{ $baseClass}}__header">
                                @if ($testimonial['name'])
                                    @typography([
                                            "variant" => "h2",
                                            "element" => $nameElement
                                        ])
                                        {{$testimonial['name']}}
                                    @endtypography
                                @endif
                                @if ($testimonial['title'])
                                    @typography([
                                        "variant" => "h4",
                                        "element" => $titleElement
                                    ])
                                        {{$testimonial['title']}}
                                    @endtypography
                                    @endif
                            </div>

                        @else
                            <div class="{{ $baseClass}}__header">
                                @if ($testimonial['name'])
                                    @typography([
                                        "variant" => "h2",
                                        "element" => $nameElement
                                    ])
                                        {{$testimonial['name']}}
                                    @endtypography

                                @endif
                                @if ($testimonial['title'])
                                    @typography([
                                        "variant" => "h4",
                                        "element" => $titleElement
                                    ])
                                        {{$testimonial['title']}}
                                    @endtypography

                                @endif
                            </div>
                            @if ($testimonial['image'])
                                @if ($testimonial['avatar'])
                                    @avatar([
                                        'image' => $testimonial['image'],
                                        'name' => $testimonial['name'],
                                        'size' => 'lg'
                                    ])
                                    @endavatar
                                @else
                                    @image([
                                        'src'=> $testimonial['image'],
                                        'alt' => $testimonial['name']
                                    ])
                                    @endimage
                                @endif
                            @endif
                        @endif
                        <div class="{{ $baseClass }}__quote">
                            @typography([
                                "variant" => "p",
                                "element" => "p"
                            ])
                                {{$testimonial['testimonial']}}
                            @endtypography
                        </div>
                    </div>
                @endforeach
    </{{ $componentElement }}>
@endif
