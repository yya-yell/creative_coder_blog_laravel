<x-admin.layout>
    <div class="container mt-5">
        <div class="row">
            <div class="my-5 pt-5">
                <x-card-wrapper>
                    <div class="col-md-12 mt-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Intro</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $index => $blog)
                                    <tr>
                                        <th scope="row">{{$index + 1}}</th>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->intro}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <form action="/admin/blog/{{$blog->slug}}/detete" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-outline-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$blogs->links()}}
                    </div>
                </x-card-wrapper>
            </div>
        </div>
    </div>
</x-admin.layout>
