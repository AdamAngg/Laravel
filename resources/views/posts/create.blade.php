<x-layout>
    <section class="px-6 py-8">

        <h1 class="text-center font-bold uppercase text-xs text-gray-700">Post something</h1>
        <x-panel class="max-w-sm mx-auto">

            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title" />
                <x-form.input name="excerpt" />
                <x-form.input name="files" type="file" />
                <x-form.textarea name="body" />
                <x-form.category />

                <x-form.submit-button>Publish</x-form.submit-button>

                </div>
            </form>

        </x-panel>
    </section>
</x-layout>
