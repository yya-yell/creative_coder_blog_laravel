<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <x-card-wrapper>
                <form method="POST" action="/blog/{{ $blog->slug }}/comment">
                    @csrf
                    <div class="mb-3">
                        <textarea name="body" class="form-control border-0" placeholder="say something about this blog..." id="" cols="10"
                            rows="3"></textarea>
                        <x-error-handler name="body"/>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Send</button>
                </form>
            </x-card-wrapper>
        </div>
    </div>
</div>