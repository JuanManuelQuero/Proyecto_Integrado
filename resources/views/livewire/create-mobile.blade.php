<div>
    <button wire:click="$set('isOpen', true)"
        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-mobile"></i>
        Nuevo</button>

    <x-jet-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            Nuevo Móvil
        </x-slot>

        <x-slot name="content">
            @wire
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-form-select name="marca" label="Marca"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                        @foreach ($marcas as $item)
                            <option>{{ $item }}</option>
                        @endforeach
                    </x-form-select>
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <x-form-input name="modelo" label="Modelo" placeholder="Modelo"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/>
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-form-input name="precio" type="number" label="Precio" placeholder="Precio"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"/>
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <x-form-input name="stock" type="number" label="Stock" placeholder="Stock"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-form-select name="color" label="Color"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                        @foreach ($colores as $item)
                            <option>{{ $item }}</option>
                        @endforeach
                    </x-form-select>
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <x-form-select name="almacenamiento" label="Almacenamiento"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        @foreach ($almacenamientos as $item)
                            <option>{{ $item }}</option>
                        @endforeach
                    </x-form-select>
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-form-textarea name="pantalla" placeholder="Caracteristicas de la pantalla" label="Pantalla" 
                    class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"/>
                </div>
                
                <div class="w-full md:w-1/2 px-3">
                    <x-form-textarea name="chip" placeholder="Caracteristicas del chip" label="Chip" 
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
                        <img src="{{ asset('storage/mobile/default.png') }}" class="object-cover object-center" />
                    @endif
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <button wire:click="crear" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-circle-plus"></i> Añadir </button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
