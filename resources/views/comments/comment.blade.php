<div class="p-4 border-left my-3">    
    <p>{{ $comment->comentario }}</p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#reply-{{$comment->id}}" aria-expanded="false" aria-controls="reply-{{$comment->id}}">
        Responder
    </button>
    <div class="collapse my-3" id="reply-{{$comment->id}}">
        <div class="card card-body">
            @include('comments.create', ['comment' => $comment])
        </div>
    </div>
    @if ($comment->replies)
    @include('comments.list', ['comments' => $comment->replies])
    @endif
</div>

<script>
    function submitForm()
    {
        document.getElementById('formBorrar').submit();
    }
</script>