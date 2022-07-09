<x-admin.layout>
    <div class="container mt-5 py-5">
        <h3 class="text-center">create blog</h3>
        <x-card-wrapper>
            <form method="post" class="mt-3" enctype="multipart/form-data">
                @csrf
                <x-forms.input name="title" />
                <x-forms.input name="intro" />
                <x-forms.input name="thumbnail" type="file" />
                <x-forms.textarea name="body" />

                <x-forms.form-wrapper>
                <x-forms.label name="Category" />
                    <select name="category_id" id="" class="form-control mb-3">
                        <option value="">------</option>
                        @foreach ($categories as $cate)
                            <option value="{{ $cate->id }}"
                                {{ old('category_id') == $cate->id ? 'selected' : '' }}>
                                {{ $cate->name }}
                            </option>
                        @endforeach
                    </select>
                </x-forms.form-wrapper>
                <x-error-handler name="category_id" />
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </x-card-wrapper>
    </div>
</x-layout>
