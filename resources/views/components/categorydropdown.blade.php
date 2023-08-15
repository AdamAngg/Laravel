    <x-drop-down>
        <x-slot name="trigger">
            <button class="py-2 pl-3 pr-9 text-sm font-semibold lg:w-32 text-left lg:inline-flex w-full">
            
                {{$currentCategory}}

                <x-drop-down-arrow />
            </button>
        </x-slot>

        <x-drop-down-item href="/" :statement="isset($currentCategory) && $currentCategory === 'Categories'">All</x-drop-down-item>

        @foreach($categories as $category)

        <x-drop-down-item href="/?category={{$category->slug}}&{{http_build_query(request()->except('category'))}}" :statement="isset($currentCategory) && $currentCategory === $category->name">
            {{$category->name}}
        </x-drop-down-item>

        @endforeach

    </x-drop-down>