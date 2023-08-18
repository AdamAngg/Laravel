<x-form.field>
    <x-form.label name="category" />

    <select name="category_id" id="category_id">
        @foreach (\App\Models\Category::all() as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</x-form.field>

<x-form.error name="category" />
