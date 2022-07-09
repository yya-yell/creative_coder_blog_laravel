<x-layout>
    @if(session('success'))
    <div class="d-flex justify-content-center mt-4">
        <div class="alert alert-success alert-dismissible fade show mt-5 text-center w-75" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    </div>
    @endif
    <x-Hero/>

    <x-BlogContainer :blogs="$blogs" />

    <x-Subscribe/>
    
</x-layout>
    

