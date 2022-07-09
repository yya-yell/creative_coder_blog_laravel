@props(['name', 'type' => 'text'])
<x-forms.form-wrapper>
    <x-forms.label :name="$name">
        </x-label>
        <input value="{{ old($name) }}" type="{{ $type }}" class="form-control" id="{{ $name }}"
            name="{{ $name }}">
        <x-error-handler name="{{ $name }}" />
</x-forms.form-wrapper>
