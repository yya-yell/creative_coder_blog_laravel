<x-layout>
    <div class="container" style="margin-top: 5rem !important">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img src='{{asset("storage/$blog->thumbnail")}}'
                    class="card-img-top" alt="..." />
                <h3 class="my-3">{{ $blog->title }}</h3>
                <div>
                    <div><small><a href="/author/{{ $blog->user->user_name }}">Author :
                                {{ $blog->user->name }}</a></small></div>
                    <div><small>Category : {{ $blog->category->name }}</small></div>
                    <div><small>{{ $blog->created_at->diffForHumans() }}</small></div>
                </div>
                <p class="lh-md mt-5">
                    {!! $blog->body !!}
                </p>
                @auth
                    <form action="/blog/{{$blog->slug}}/subscribtion" method="post">
                        @csrf
                        @if (auth()->user()->isSubscribed($blog))
                            <button class="btn btn-danger">Unsubscribe</button>
                        @else
                            <button class="btn btn-warning">Subscribe</button>
                        @endif
                    @endauth
                </form>
            </div>
        </div>
    </div>


    @auth
        <x-Comment-form :blog="$blog" />
    @else
        <p class="col-6 text-center mt-5">Please <a href="/login">login</a> to comment.</p>
    @endauth
    @if ($blog->comments->count())
        <h4 class="text-secondary text-center mt-3">Comments {{$blog->comments->count()}}</h4>
        <x-comments :comments="$blog
            ->comments()
            ->latest()
            ->paginate(2)
            ->withQueryString()" />
    @endif
    {{-- <x-Subscribe /> --}}
    <x-BlogYouMayLike :blogs="$randomBlogs" />
</x-layout>
