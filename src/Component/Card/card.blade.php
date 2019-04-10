<!-- card.blade.php -->
<div class="c-card">
    @if($image)
    <img class="c-card__image" src="{{$image}}" alt="">
    @endif
    <div class="c-card__body">
        @if($title)
        <h4 class="c-card__title">{{$title}}</h4>
        @endif
        @if($content)
        <p class="c-card__text">{{$content}}</p>
        @endif

        @component_button([
            'href' => 'http://helsingborg.se/?variant=1', 
            'label' => "Button one", 
            'isOutlined' => true, 
            'isPrimary' => false
        ])

        @component_button([
            'href' => 'http://helsingborg.se/?variant=2', 
            'label' => "Button two", 
            'isOutlined' => true, 
            'isPrimary' => true
        ])

        @component_button([
            'href' => 'http://helsingborg.se/?variant=3', 
            'label' => "Button three", 
            'isOutlined' => false, 
            'isPrimary' => true
        ])

        @component_table([
            'list' => [
                ['Hello', 'Hi!', 'Howdy'],
                ['Goodbye', 'Bye', 'See ya!']
            ],
            'headings' => ['Formal', 'Casual', 'Redneck'],
            'showFooter' => true,
            'isSmall' => true
        ])

        @component_breadcrumb([
            'list' => [
                ['href' => 'https://google.se', 'label' => 'Main page'],
                ['href' => 'https://google.se', 'label' => 'Sub page'],
                ['href' => 'https://google.se', 'label' => 'Sub sub page'],
            ]
        ])

        @component_pagination([
            'list' => [
                ['href' => 'https://google.se', 'label' => 'Main page'],
                ['href' => 'https://google.se', 'label' => 'Sub page'],
                ['href' => 'https://google.se', 'label' => 'Sub sub page'],
            ]
        ])

        @component_listing([
            'list' => [
                ['href' => 'https://google.se', 'label' => 'Main page'],
                ['href' => 'https://google.se', 'label' => 'Sub page'],
                ['href' => 'https://google.se', 'label' => 'Sub sub page'],
            ],
            'elementType' => "ol"
        ])

        @component_notice([
            'content' => "This is the content of this masterpiece called notice.",
            'isWarning' => true
        ])

        @component_image([
            'src'=> "https://picsum.photos/300/200?image=1026",
            'alt' => "This is a image",
            'caption' => "Hey, I am a caption"
        ])

        @component_accordion([
            'list'=> [
                ['heading' => "Mattis Risus Tristique Commodo", 'content' => "Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor."],
                ['heading' => "Mattis Risus Tristique Commodo", 'content' => "Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor."],
                ['heading' => "Mattis Risus Tristique Commodo", 'content' => "Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor."],
                ['heading' => "Mattis Risus Tristique Commodo", 'content' => "Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor."]
            ]
        ])

        @component_code([])

    </div>
</div>
