<x-app-layout>
    <x-slot name="header">
        <form action="{{ route('mobiles.index') }}" method="get" name="buscador">
            <div class="flex">
                <div class="pt-2 relative mx-12 text-gray-600">
                    <input
                        class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                        type="search" name="modelo" placeholder="Buscar modelo..." value="{{ $request->modelo }}">
                    <button type="submit" style="margin-left: -30px">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>


        </form>
    </x-slot>

    @if (session('mensaje'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Información',
            text: "{{ session('mensaje') }}",
        })
    </script>
    @endif


    @if($apple->count() || $samsung->count() || $xiaomi->count() || $huawei->count())
    @if($apple->count())
    <x-list>
        <div class="flex items-center">
            <div class="flex">
                <img class="rounded-full h-10 w-10 object-cover object-center"
                    src="{{ asset('storage/apple.png') }}" alt="">
            </div>
            <div class="ml-4">
                <div class="font-semibold text-xl text-gray-800 leading-tight">Apple</div>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-w-2xl mx-auto px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Apple</h2>
                <div
                    class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
                    @foreach ($apple as $item)
                        <div>
                            <div
                                class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <a href="{{ route('mobiles.show', $item) }}" class="group">
                                    <img src="{{ Storage::url($item->image) }}"
                                        class="w-full h-full group-hover:opacity-75">
                                </a>
                            </div>
                            <div class="flex">
                                <div>
                                    <h3 class="mt-4 text-sm text-gray-700">{{ $item->modelo }}</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">{{ $item->precio }} €</p>
                                </div>
                                <div class="display-grid mt-4 mx-auto">
                                    @if($item->stock > 0)
                                    <form action="{{route('mobiles.addCart', $item)}}" method="POST">
                                        @csrf
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                                            class="fa-solid fa-cart-shopping"></i></button>
                                    </form>
                                    @else
                                    <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">No stock</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-list>
    @endif

    @if($samsung->count())
    <x-list>
        <div class="flex items-center">
            <div class="flex">
                <img class="h-10 w-30 object-cover object-center"
                    src="{{ asset('storage/samsung.png') }}" alt="">
            </div>
            <div class="ml-4">
                <div class="font-semibold text-xl text-gray-800 leading-tight"></div>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-w-2xl mx-auto px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Samsung</h2>
                <div
                    class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
                    @foreach ($samsung as $item)
                        <div>
                            <div
                                class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <a href="{{ route('mobiles.show', $item) }}" class="group">
                                    <img src="{{ Storage::url($item->image) }}"
                                        class="w-full h-full group-hover:opacity-75">
                                </a>
                            </div>
                            <div class="flex">
                                <div>
                                    <h3 class="mt-4 text-sm text-gray-700">{{ $item->modelo }}</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">{{ $item->precio }} €</p>
                                </div>
                                <div class="display-grid mt-4 mx-auto">
                                    <form action="{{route('mobiles.addCart', $item)}}" method="POST">
                                        @csrf
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                                            class="fa-solid fa-cart-shopping"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-list>
    @endif

    @if($xiaomi->count())
    <x-list>
        <div class="flex items-center">
            <div class="flex">
                <img class="rounded-full h-10 w-10 object-cover object-center"
                    src="{{ asset('storage/xiaomi.png') }}" alt="">
            </div>
            <div class="ml-4">
                <div class="font-semibold text-xl text-gray-800 leading-tight">Xiaomi</div>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-w-2xl mx-auto px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Xiaomi</h2>
                <div
                    class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
                    @foreach ($xiaomi as $item)
                        <div>
                            <div
                                class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <a href="{{ route('mobiles.show', $item) }}" class="group">
                                    <img src="{{ Storage::url($item->image) }}"
                                        class="w-full h-full group-hover:opacity-75">
                                </a>
                            </div>
                            <div class="flex">
                                <div>
                                    <h3 class="mt-4 text-sm text-gray-700">{{ $item->modelo }}</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">{{ $item->precio }} €</p>
                                </div>
                                <div class="display-grid mt-4 mx-auto">
                                    <form action="{{route('mobiles.addCart', $item)}}" method="POST">
                                        @csrf
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                                            class="fa-solid fa-cart-shopping"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-list>
    @endif

    @if($huawei->count())
    <x-list>
        <div class="flex items-center">
            <div class="flex">
                <img class="rounded-full h-10 w-10 object-cover object-center"
                    src="{{ asset('storage/huawei.png') }}" alt="">
            </div>
            <div class="ml-4">
                <div class="font-semibold text-xl text-gray-800 leading-tight">Huawei</div>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-w-2xl mx-auto px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Huawei</h2>
                <div
                    class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
                    @foreach ($huawei as $item)
                        <div>
                            <div
                                class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <a href="{{ route('mobiles.show', $item) }}" class="group">
                                    <img src="{{ Storage::url($item->image) }}"
                                        class="w-full h-full group-hover:opacity-75">
                                </a>
                            </div>
                            <div class="flex">
                                <div>
                                    <h3 class="mt-4 text-sm text-gray-700">{{ $item->modelo }}</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">{{ $item->precio }} €</p>
                                </div>
                                <div class="display-grid mt-4 mx-auto">
                                    <form action="{{route('mobiles.addCart', $item)}}" method="POST">
                                        @csrf
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                                            class="fa-solid fa-cart-shopping"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-list>
    @endif

    @else

    <div class="mt-8">
        <p class="text-center font-bold">No se ha encontrado ningún móvil</p>
    </div>
    @endif
</x-app-layout>
<x-footer></x-footer>
