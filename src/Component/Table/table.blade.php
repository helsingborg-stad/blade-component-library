<!-- table.blade.php -->
@if($list)
    <div id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
        <div class="{{$baseClass}}__inner">
            <table class="{{$baseClass}}__table">
                @if($showCaption)
                    <caption>{{ $caption }}</caption>
                @endif

                @if($showHeader)
                    <thead class="{{$baseClass}}__head">
                        @if($filterable)
                            @field([
                                'type' => 'text',
                                'classList' => [
                                    'u-margin--2'
                                ],
                                'attributeList' => [
                                    'type' => 'search',
                                    'name' => 'search',
                                    'js-table-filter-input' => ''
                                ],
                                'label' => !empty($labels) && !empty($labels['searchPlaceholder']) ? $labels['searchPlaceholder'] : 'Search'
                            ])
                            @endfield
                        @endif
                        
                        <tr class="{{$baseClass}}__line">
                            @foreach($headings as $heading)
                                <th scope="col" class="{{$baseClass}}__column {{$baseClass}}__column-{{ $loop->index }}" js-table-sort--btn="{{ $loop->index }}">
                                    {{ $heading }}
                                    @if($sortable)
                                        @icon(['icon' => 'swap_vert', 'size' => 'md'])
                                        @endicon
                                    @endif
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                @endif

                <tbody class="{{$baseClass}}__body" js-sort-data-container js-table-data-container>
                    
                    @foreach($list as $row) 
                        <tr class="{{$baseClass}}__line {{$baseClass}}__line-{{ $loop->index }}" js-table-sort--sortable js-table-filter-item>
                            @foreach($row['columns'] as $column) 
                                <td scope="row" class="{{$baseClass}}__column {{$baseClass}}__column-{{ $loop->index }}" js-table-sort-data="{{ $loop->index }}" js-table-filter-data>
                                    {!! $column !!}
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>

                @if($showFooter)
                    <tfoot class="{{$baseClass}}__foot">
                        <tr class="{{$baseClass}}__line">
                            @foreach($headings as $heading)
                                <th scope="col" class="{{$baseClass}}__column {{$baseClass}}__column-{{ $loop->index }}">{{ $heading }}</th>
                            @endforeach
                        </tr>
                    </tfoot>
                @endif
            </table>
        
            @if($pagination)
                <div style="text-align: center;" class="u-padding--1" js-table-pagination>
                    @button([
                        'style' => 'basic',
                        'color' => 'primary',
                        'icon' => 'chevron_left',
                        'attributeList' => [
                            'js-table-pagination-btn' => 'prev'
                        ],
                    ])
                    @endbutton

                    <div class="u-display--inline-block" js-table-pagination--links>
                        @button([
                            'style' => 'basic',
                            'color' => 'primary',
                            'attributeList' => [
                                'js-table-pagination--link' => '1'
                            ],
                        ])
                        1
                        @endbutton
                    </div>

                    @button([
                        'style' => 'basic',
                        'color' => 'primary',
                        'icon' => 'chevron_right',
                        'attributeList' => [
                            'js-table-pagination-btn' => 'next'
                        ],
                    ])
                    @endbutton
                </div>
            @endif
        </div>
    </div>
@else
  <!-- No table list data -->
@endif