<x-forms.form-wrapper>
    <x-forms.label :name="$name"></x-label>
    <textarea name="{{$name}}"  class="form-control editor" id="" cols="30" rows="3" placeholder="Text your paragraph here .. 
   ">{{ old($name) }}</textarea>
    <x-error-handler name="{{$name}}" />
</x-forms.form-wrapper>