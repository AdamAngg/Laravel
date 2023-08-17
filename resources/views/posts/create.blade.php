<x-layout>
    <section class="px-6 py-8">

        <h1 class="text-center font-bold uppercase text-xs text-gray-700">Log In</h1>
        <x-panel class="max-w-sm mx-auto">

            <form method="POST" action="/admin/posts">
                @csrf

                <div class="mb-6">

                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        title
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded" type="text" name="title" id="title"
                        value="{{ old('title') }}" required>

                </div>

                @error('title')
                    <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                @enderror

                <div class="mb-6">

                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        excerpt
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded" type="text" name="excerpt"
                        id="excerpt" value="{{ old('excerpt') }}" required>

                </div>

                @error('excerpt')
                    <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                @enderror

                <div class="mb-6">

                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        body
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded" type="text" name="body"
                        id="body" value="{{ old('body') }}" required>

                </div>

                @error('body')
                    <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                @enderror

                <div class="mb-6">

                    <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        category_id
                    </label>

                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                </div>

                @error('category')
                    <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                @enderror

                <x-submit-button>Publish</x-submit-button>

                </div>
            </form>

        </x-panel>
    </section>
</x-layout>
