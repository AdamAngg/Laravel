<x-layout>
    <x-setting heading="Manage Post">

        <ul role="list" class="divide-y divide-gray-100">
            @foreach ($posts as $post)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4 flex-row">
                        <div class="min-w-0 flex flex-col">
                            <p class="text-sm font-semibold leading-6 text-gray-900">{{ $post->title }}</p>
                        </div>
                    </div>
                    <form method="GET" action="/admin/posts">
                        <button href="admin/posts/{{ $post->id }}/edit">Edit</button>
                    </form>
                </li>
            @endforeach
        </ul>
        </div>
    </x-setting>
</x-layout>
