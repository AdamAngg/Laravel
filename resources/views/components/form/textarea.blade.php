@props(['name'])
<x-form.field>
    <x-form.label name="name" />
    <textarea placeholder="Quick fill comment section now" name="{{ $name }}" id=""
        class="w-full text-sm focus:outline focus:ring" cols="30" rows="5" required></textarea>
    <x-form.error name="{{ $name }}" />
</x-form.field>
