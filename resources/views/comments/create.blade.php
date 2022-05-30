<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
            <div class="w-full relative flex items-center justify-center">
                <form action="{{ route('comments.create', $mobile) }}" method="POST">
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
                        <button class="px-3 py-2 text-sm text-blue-600 border border-blue-500 rounded">
                            Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
