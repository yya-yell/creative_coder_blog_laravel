<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-2 mt-5">
                <ul class="list-group mt-5 pt-5">
                    <li class="list-group-item"><a href="/admin/blogs">Blogs</a></li>
                    <li class="list-group-item"><a href="/admin/blog/create">Create Blog</a></li>
                  </ul>
            </div>
            <div class="col-10">{{$slot}}</div>
        </div>
    </div>
</x-layout>