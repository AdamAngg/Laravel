@auth
    <x-panel>
        <form action="{{ $post->slug }}/comments" method="post" class="">
            @csrf
            <header class="flex">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" class="rounded-xl">
                <h2 class="ml-4">Want to paricpate?</h2>
            </header>

            <x-form.textarea name="body" />

            <div class="flex justify-end mt-10 border-t border-gray-200 pt-6">
                <x-form.submit-button>Post</x-form.submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold"><a class="hover:underline" href="/register">register</a> OR <a href="/login"
            class="hover:underline">Login
        </a> to comment</p>
@endauth
