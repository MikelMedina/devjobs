<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>
    <form wire:submit.prevent="postularme" class="w-96 mt-5">
        @if (session('mensaje'))
            <p  class="bg-green-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                {{ session('mensaje') }}
            </p>
        @endif


        <div class="mb-4">
            <x-input-label for="cv" :value="__('Curriculum u Hoja de Vida')" />
            <x-text-input id="cv" type="file" accept=".pdf" wire:model.live="cv" class="block mt-1 w-full"/>
            @error('cv')
                <x-input-error :messages="$errors->get('cv')" class="mt-2"/>
            @enderror

        </div>

        <x-primary-button class="my-5">
            {{__('Postularme')}}
        </x-primray-button>
    </form>
</div>
