<div class="max-w-lg shadow-md bg-gray-100">
    <form action="{{ route('comments.create', $mobile) }}" method="POST" class="w-full p-4">
        @csrf
        @if (isset($comment->id))
            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
        @endif

        <input type="hidden" name="user_id" value="{{ \auth()->id() }}">
        <div class="mb-2">
            <label for="comentario" class="text-lg text-gray-600">Añadir comentario</label>
            <textarea name="comentario" id="comentario"
                class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1"
                placeholder=""></textarea>
        </div>
        <div>
            <button type="submit" class="px-3 py-2 text-sm text-blue-100 bg-blue-600 rounded">
                Publicar
            </button>
        </div>
    </form>
</div>
