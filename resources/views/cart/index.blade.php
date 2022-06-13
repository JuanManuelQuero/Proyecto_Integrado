<x-app-layout>

    @if (session('mensaje'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Información',
                text: "{{ session('mensaje') }}",
            })
        </script>
    @endif

    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Carrito de Compra</h1>
                    <h2 class="font-semibold text-2xl">{{ \Cart::session(auth()->id())->getContent()->count() }}
                        Artículos</h2>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detalles Producto</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Cantidad</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Percio</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                </div>
                @foreach ($cartItems as $item)
                    <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                        <div class="flex w-2/5">
                            <div class="w-20">
                                <img class="h-24" src="{{ Storage::url($item->attributes->image) }}" alt="">
                            </div>
                            <div class="flex flex-col justify-between ml-4 flex-grow">
                                <span class="font-bold text-sm">{{ $item->attributes->modelo }}</span>
                                <span class="text-red-500 text-xs">{{ $item->name }}</span>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="cursor-pointer font-semibold hover:text-red-500 text-gray-500 text-xs">Eliminar</button>
                                </form>
                            </div>
                        </div>
                        <div class="flex justify-center w-1/5">

                            <form action="{{ route('cart.lessQuantity', $item->id) }}" method="POST">
                                @csrf
                                <button><i class="fa-solid fa-minus"></i></button>
                            </form>
                            <input class="mx-2 border text-center" disabled min="1" id=cantidad style="width: 60%"
                                value="{{ $item->quantity }}">
                            <form action="{{ route('cart.moreQuantity', $item->id) }}" method="POST">
                                @csrf
                                <button><i class="fa-solid fa-plus"></i></button>
                            </form>


                        </div>
                        <input class="text-center w-1/5 font-semibold text-sm" disabled value="{{ $item->price }}"
                            id=precio>€
                        <input class="text-center w-1/5 font-semibold text-sm " disabled
                            value="{{ $item->price * $item->quantity }}" id="total">€
                    </div>
                @endforeach

                <a href="{{ route('mobiles.index') }}" class="flex font-semibold text-indigo-600 text-sm mt-10"
                    style="width: 35%">

                    <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                        <path
                            d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                    </svg>
                    Continuar comprando
                </a>
            </div>

            @if (count($cartItems) > 0)
                <div id="summary" class="w-1/4 px-8 py-10">
                    <h1 class="font-semibold text-2xl">Pedido</h1>

                    <div class="border-t mt-8">
                        <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                            <span>Precio Total</span>
                            <span>{{ \Cart::session(auth()->id())->getTotal() }} €</span>
                        </div>

                        @if (count($cartItems) > 0)
                            <form action="{{ route('cart.vender', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Confirmar</button>
                            </form>
                        @endif

                        @if (count($cartItems) > 0)
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="mt-2 bg-red-500 font-semibold hover:bg-red-600 py-3 text-sm text-white uppercase w-full">Vaciar
                                    Carrito</button>
                            </form>
                        @endif
                    </div>
                </div>
            @else
                <div id="summary" class="w-1/4 px-8 py-10" style="text-align: center">
                    <h1 class="font-semibold text-2xl">Carrito vacío</h1>
                    <div class="mt-8">
                        <a href="{{ route('mobiles.index') }}"
                            class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 px-3 text-sm text-white uppercase"
                            style="width: 100%;">
                            Tienda</a>
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
