<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mx-auto my-12">
    <div class="my-2 flex flex-row-reverse">
        @livewire('create-mobile')
    </div>
    <x-tabla>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" wire:click="ordenar('marca')"
                        class="cursor-pointer px-6 py-3 text-left text-xs font-base text-gray-500 uppercase whitespace-nowrap w-12">
                        Marca <i class="fa-solid fa-sort"></i>
                    </th>
                    <th scope="col" wire:click="ordenar('modelo')"
                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                        Modelo <i class="fa-solid fa-sort"></i>
                    </th>
                    <th scope="col" wire:click="ordenar('precio')"
                        class="cursor-pointer px-6 py-3 text-left text-xs font-base text-gray-500 uppercase w-12">
                        Precio <i class="fa-solid fa-sort"></i>
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"
                        colspan='2'>
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($mobiles as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{ $item->marca }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex">
                                <img class="h-124 w-24 object-cover object-center"
                                    src="{{ Storage::url($item->image) }}" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">{{ $item->modelo }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $item->precio }} €
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap w-6">
                        <button wire:click="edit({{ $item }})"
                            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                            <i class="fa-solid fa-edit"></i></button>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap w-6">
                        <button wire:click="borrar({{ $item }})"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            <i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-tabla>

    <div class="mt-2">
        {{ $mobiles->links() }}
    </div>

    <!-- Ventana Modal Editar -->

    <x-jet-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            Editar Móvil
        </x-slot>

        <x-slot name="content">
            @wire
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-form-select name="mobile.marca" label="Marca"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                        @foreach ($marcas as $item)
                            <option>{{ $item }}</option>
                        @endforeach
                    </x-form-select>
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <x-form-input name="mobile.modelo" label="Modelo" placeholder="Modelo"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/>
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-form-input name="mobile.precio" type="number" label="Precio" placeholder="Precio"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/>
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <x-form-input name="mobile.stock" type="number" label="Stock" placeholder="Stock"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-form-select name="mobile.color" label="Color"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                        @foreach ($colores as $item)
                            <option>{{ $item }}</option>
                        @endforeach
                    </x-form-select>
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <x-form-select name="mobile.almacenamiento" label="Almacenamiento"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        @foreach ($almacenamientos as $item)
                            <option>{{ $item }}</option>
                        @endforeach
                    </x-form-select>
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-form-textarea name="mobile.pantalla" placeholder="Caracteristicas de la pantalla" label="Pantalla" 
                    class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"/>
                </div>
                
                <div class="w-full md:w-1/2 px-3">
                    <x-form-textarea name="mobile.chip" placeholder="Caracteristicas del chip" label="Chip" 
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/>
                </div>
            </div>
            @endwire
            <div class='flex mt-2'>
                <div>
                    <input type="file" class="form-control" name="image" wire:model="image" accept="image/*" />
                    <x-jet-input-error for="image" class="mt-2" />
                </div>

                <div>
                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" class="object-cover object-center" />
                    @else
                        <img src="{{ Storage::url($mobile->image) }}" class="object-cover object-center" />
                    @endif
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <button wire:click="actualizar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-edit"></i> Actualizar </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
<x-footer></x-footer>
