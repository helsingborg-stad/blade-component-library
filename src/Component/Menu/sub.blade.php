{{--- Sub list (Recursive) ---}}
@if(isset($item['children']))
    @menu([
        'wrapper' => false,
        'items' => $item['children'],
        'classList' => [$baseClass, $baseClass . '__child']
    ])
    @endmenu 
@endif