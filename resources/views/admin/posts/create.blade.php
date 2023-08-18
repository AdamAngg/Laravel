<x-layout>
    <x-setting heading="Post something">
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
    </x-setting>
</x-layout>
