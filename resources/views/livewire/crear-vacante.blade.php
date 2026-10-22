<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model.live="titulo" :value="old('titulo')" placeholder="Titulo Vacante" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        {{-- pendiente un seeder e imprimirlo desde la BD --}}

        <select wire:model.live="salario" id="salario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>

            @endforeach
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />

    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        {{-- pendiente un seeder e imprimirlo desde la BD --}}
        <select wire:model.live="categoria" id="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>

            @endforeach
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />

    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')"/>
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model.live="empresa" :value="old('empresa')" placeholder="Empresa: ej. Netflix, Uber, Shopify"/>
        <x-input-error :messages="$errors->get('empresa')" class="mt-2"/>
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo Día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model.live="ultimo_dia" :value="old('ultimo_dia')" placeholder="Empresa: ej. Netflix, Uber, Shopify"/>
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2"/>
    </div>
    
    <div>
        <x-input-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" wire:model.live="descripcion" placeholder="Descripción general del puesto, experiencia, etc." h-72>

        </textarea>
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model.live="imagen" accept="image/*"/>
        <div class="my-5 w-80">
            @if ($imagen)
                Imagen:
                <img src="{{ $imagen->temporaryUrl() }}" alt="Imagen Subida">
            @endif
        </div>

        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>

    <x-primary-button>
        Crear Vacante
    </x-button>
</form>