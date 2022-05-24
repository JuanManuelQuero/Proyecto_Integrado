<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mx-auto my-12">
    
    <x-tabla>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" wire:click="ordenar('name')" class="cursor-pointer px-6 py-3 text-left text-xs font-base text-gray-500 uppercase whitespace-nowrap w-12">
                        Nombre usuario <i class="fa-solid fa-sort"></i>
                    </th>
                    <th scope="col" wire:click="ordenar('email')" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Email <i class="fa-solid fa-sort"></i>
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Foto
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider" colspan="2">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($users as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{$item->name}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">{{$item->email}}</div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex-items-center">
                            <div class="flex">
                                <img class="h-12 w-12 object-center object-cover rounded-full" src="{{Storage::url($item->profile_photo_path)}}" alt="">
                                
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap w-6">
                        <button wire:click="edit({{$item}})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                            <i class="fa-solid fa-edit"></i>
                        </button>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap w-6">
                        <button wire:click="borrar({{$item}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            <i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-tabla>

    <div class="mt-2">
        {{ $users->links() }}
    </div>


    <!-- Ventana Modal Editar -->
    <x-jet-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            Actualizar datos usuario
        </x-slot>

        <x-slot name="content">
            @wire
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <x-form-input name="user.name" label="Nombre del usuario" placeholder="Nombre usuario"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></x-form-input>
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                        <x-form-input name="user.email" type="email" label="Email del usuario" placeholder="Email usuario"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></x-form-input>
                    </div>

                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <x-form-input name="user.password" type="password" label="Contraseña del usuario" placeholder="Contraseña usuario"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></x-form-input>
                    </div>
                </div>
            @endwire
        </x-slot>

        <x-slot name="footer">
            <button wire:click="actualizar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-edit"></i> Actualizar
            </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
