<ul>
    @foreach($childs as $child)

        <li class="{{ $child->type }}" value="{{ $child->id }}">

            <p class="id_tree hide">{{ $child->id_tree }}</p>
            <p class="type_tree hide">{{ $child->type }}</p>
            <p class="type_file hide">{{ $child->id_file }}</p>
            <p class="file_tree hide">{{ $child->file }}</p>
            {{ $child->title }}

            @if(count($child->childs))
                @include('pages.ui_elements.children',['childs' => $child->childs])
            @endif

        </li>

    @endforeach
</ul>