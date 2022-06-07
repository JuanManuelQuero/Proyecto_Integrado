<div class="p-4 my-6">
    <div class="p-4 w-full bg-white my-8 rounded-lg border shadow-md sm:p-8">
            <b>{{ $comment->user->name }}</b>
            <p>{{ $comment->comentario }}</p>
            <div class="my-3" id="reply-{{ $comment->id }}">
                <div>
                    @include('comments.create', ['comment' => $comment])
                </div>
            </div>
        <div class="px-6"></div>
        @if ($comment->replies)
            @include('comments.list', ['comments' => $comment->replies])
        @endif
    </div>
</div>

