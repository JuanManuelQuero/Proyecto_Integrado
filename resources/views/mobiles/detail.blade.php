<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Características') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
                    <div class="w-full relative flex items-center justify-center">

                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <div class="flex flex-row-reverse">
                                    <a href="{{route('mobiles.index')}}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class=""></i> Volver</a>
                                </div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">{{$mobile->modelo }}</h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">{{$mobile->marca}}</p>
                                <img src="{{ Storage::url($mobile->image) }}"
                                    class="h-124 w-24 object-cover object-center" alt="">
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Modelo</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$mobile->modelo}}</dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Stock</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$mobile->stock}} unidades
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Almacenamiento</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{$mobile->almacenamiento}}</dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Precio</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$mobile->precio}} €</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Pantalla</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$mobile->pantalla}}</dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Chip</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$mobile->chip}}</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Comentarios -->
            <div class="p-4 w-full bg-white my-8 rounded-lg border shadow-md sm:p-8">
                <div class="card-body">
                    <h5 class="my-4">Comentarios en <b>"{{ $mobile->modelo }}" </b> </h5>
                    <div class="w-full border-t border-gray-300 my-2"></div>
                    <!-- Crear un comentario -->
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
                    <br>
                    
                    <!-- Lista de comentarios y responder a un comentario -->
                    @foreach ($comments as $comment)
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-footer></x-footer>