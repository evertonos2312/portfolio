<div class="p-8">
    <form wire:submit.prevent="update">
        <div>
            <label class="block">
                <span class="text-gray-700">Nome</span>
                <input name="name"
                       class="form-input bg-gray-200 border-gray-300 focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full"
                       type="text" wire:model.defer="language.name">
                @error('language.name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </label>
        </div>
    </form>
</div>
