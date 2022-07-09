<div class="container mt-5">
    <div class="row">
        <hr>
        
        @foreach ($comments as $comment)
        <x-single-comment :comment="$comment"/>
        @endforeach
        <div class="mt-3">{{$comments->links()}}</div>
    </div>
</div>