@props(['heading'])
<section class="px-6 mx-auto max-w-4xl py-8">

    <h1 class="text-center font-bold uppercase text-xs text-gray-700 border-b pb-2">{{ $heading }}</h1>
    <div>

        <aside class="w-48">
            <h4>Links</h4>
            <ul>
                <li><a href="/admin/posts">All posts</a></li>
                <li><a href="/admin/posts/create">New post</a></li>
            </ul>
        </aside>
        <main class="flex-1">
            <x-panel class="max-w-sm mx-auto">
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
