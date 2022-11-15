<ul style="display: flex; justify-content: center; margin-top: 50px;">
    @foreach ($paginator->linkCollection() as $link)
    <li style="display: inline; margin: 0 0.2rem;">
        @if ($link['active'])
            <span style="text-decoration: none; color: black; background-color: yellow; border-radius: 20px; padding: 10px;">{!! $link['label'] !!}</span>
        @else
            <a style="text-decoration: none; color: yellow; background-color: black; border-radius: 20px; padding: 10px;" href="{{ $link['url'] }}">{!! $link['label'] !!}</a>
        @endif
    </li>
    @endforeach
</ul>