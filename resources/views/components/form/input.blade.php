@props(['name', 'type' => 'text', 'value'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input class="border border-gray-400 p-2 w-full rounded" type="{{ $type }}" name="{{ $name }}"
        id="{{ $name }}" value="{{ $value }}" required>

</x-form.field>

<x-form.error name="{{ $name }}" />
