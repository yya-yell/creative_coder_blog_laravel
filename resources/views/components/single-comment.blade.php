<div class="col-12 mx-auto mt-5">
    <div class="row justify-content-center">
       <div class="col-6">
        <x-card-wrapper>
            <div class="d-flex align-items-center">
                <img class="rounded-circle" src="{{$comment->user->avator}}" alt="" width="50" height="50">
                <h5 class="px-4">{{$comment->user->name}}</h5>
            </div>
            <small class="text-secondary">{{$comment->created_at->diffForHumans()}}</small>
            <p class="mt-3">{{$comment->body}}</p>
        </x-card-wrapper>
       </div>
    </div>
</div>