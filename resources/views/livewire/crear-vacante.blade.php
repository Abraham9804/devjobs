<form class="md:w-1/2 space-y-5">
    <div>
        <x-input-label for="titulo" :value="__('Titulo vacante')" />
        <x-text-input id="titulo" wire:model.live="titulo" class="block mt-1 w-full" type="text" :value="old('titulo')" placeholder="Titulo vacante"/>
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="sueldo" :value="__('Sueldo mensual')" />
        <select id="sueldo" class="block mt-1 w-full" wire:model.live="sueldo"/>
            <option>== Elija el salario --</option>
            @foreach ($salarios as $salario)
                <option value={{$salario->id}}>{{$salario->salario}}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('sueldo')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select id="categoria" class="block mt-1 w-full" wire:model.live="categoria"/>
            <option>== Elija la categoria --</option>
            @foreach ($categorias as $categoria)
                <option value={{$categoria->id}}>{{$categoria->categoria}}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')" placeholder="Empresa: ej. Netflix, Uber, Shopify"/>
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')"/>
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descriptcion del puesto')" />
        <textarea id="descripcion" class="block mt-1 w-full h-72" name="ultimo_dia">
        </textarea>
    </div>
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <input type="file" id="imagen" class="block mt-1 w-full" name="imagen">
    </div>

    <x-primary-button>Crear vacante</x-primary-button>
</form>
