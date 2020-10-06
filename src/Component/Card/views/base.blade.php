@includeWhen($image && $image['src'], 'Card.components.image')
@includeWhen($heading || $subHeading || $content || $collapsible, 'Card.partials.body')
@includeWhen($tags || $buttons, 'Card.partials.footer')