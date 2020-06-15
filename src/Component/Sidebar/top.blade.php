<div class="{{$baseClass}}__subcontainer--top">
    @foreach ($top_items as $item)
    <div class="{{$baseClass}}__item">
        <a class="{{$baseClass}}__link" href="{{$item['href']}}" aria-label="{{$item['label']}}" item-active="{{isset($item['active']) ? "true" : "false"}}"  {{ $item['attributeList'] }}>
            {{$item['label']}}
        </a>
    </div>
    @endforeach
</div>

@divider(['size' => 'lg', 'style' => 'solid'])
@enddivider
