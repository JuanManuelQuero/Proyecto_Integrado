<x-app-layout>

    <body class="bg-gray-800 text-gray-100 px-8 py-12">
        <form action="{{route('contacto.enviar')}}" name="c" method="POST">
            @csrf
        <div
            class="max-w-screen-xl mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
            <div class="flex flex-col justify-between">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold leading-tight">Contacte con nosotros si tiene algún problema</h2>
                </div>
                <div class="mt-8 text-center">
                    <img src="{{asset('storage/contacto.png')}}" alt="">
                </div>
            </div>
            <div class="">
                <div>
                    <span class="uppercase text-sm text-gray-600 font-bold">Su nombre</span>
                    <input
                        name="nombre"
                        class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" placeholder="">
                </div>
                <div class="mt-8">
                    <span class="uppercase text-sm text-gray-600 font-bold">Sus apellidos</span>
                    <input
                        name="apellidos"
                        class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" placeholder="">
                </div>
                <div class="mt-8">
                    <span class="uppercase text-sm text-gray-600 font-bold">Su email</span>
                    <input
                        name="email"
                        class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="email">
                </div>
                <div class="mt-8">
                    <span class="uppercase text-sm text-gray-600 font-bold">Mensaje</span>
                    <textarea
                        name="mensaje"
                        class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="mt-8">
                    <button type="submit"
                        class="uppercase text-sm font-bold tracking-wide bg-indigo-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                        Enviar
                    </button>
                </div>
            </div>
        </div>
        </form>
    </body>
</x-app-layout>
