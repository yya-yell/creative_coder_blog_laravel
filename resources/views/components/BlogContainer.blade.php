 <!-- blogs section -->
 <section class="container text-center" id="blogs">
     <h1 class="display-5 fw-bold mb-4">Blogs</h1>
     <div class="">
        <x-drop-down/>
         {{-- <select name="" id="" class="p-1 rounded-pill mx-3">
             <option value="">Filter by Tag</option>
         </select> --}}
     </div>
     <form action="" class="my-3">
         <div class="input-group mb-3">
            @if(request('category'))
            <input type="hidden" name="category" value="{{request('category')}}"/>
            @endif
             <input type="text" name="search" autocomplete="false" class="form-control" placeholder="Search Blogs..."  
             value="{{request('search')}}"/>

             <button class="input-group-text bg-primary text-light" id="basic-addon2" type="submit">
                 Search
             </button>
         </div>
     </form>
     <div class="row">
         @if (!empty(request('search')))
            @if(request('category'))
                <a href="/?category={{request('category')}}">Clear Search</a>
            @elseif(request('author'))
                <a href="/?author={{request('author')}}">Clear Search</a>
            @else
            <a href="/">Clear Search</a>
            @endif
         @endif
         @forelse ($blogs as $blog)
             <x-AllBlog :blog="$blog" />
             @empty
                <p class="text-center">No Blogs found.</p>
         @endforelse
         {{$blogs->links()}}

     </div>
 </section>
