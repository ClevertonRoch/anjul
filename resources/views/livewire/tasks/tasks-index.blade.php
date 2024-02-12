<div class="grid justify-items-center bg-gray-200">
    <div class="sm:w-11/12 lg:w-1/3 md:w-2/3 bg-white p-5 my-10">
        <div class="mb-5 text-blue-700 text-4xl bg-gray-100 p-2 text-center">
            Tasks
        </div>
        <div>
            @if (session('success'))
            <div wire:dirty.debounce.250ms class="w-full bg-green-600 text-white">
                {{ session('success') }}
            </div>
            @endif
        </div>
        <form wire:submit="save">
            <!-- Title -->
            <div class="mt-4">
                <label for="title">Title</label>
                <input wire:model.live="title" id="title" class="block mt-1 w-full" type="text" name="title" autofocus
                    autocomplete="title" />
                @error('title')
                <span class="text-red-400">{{ $message }}</span>
                @enderror

            </div>
            <!-- Slug -->
            <div class="mt-4">
                <label for="slug">Slug</label>
                <input wire:model="slug" readonly id="slug" class="block mt-1 w-full" type="text" name="slug" autofocus
                    autocomplete="slug" />
                @error('slug')
                <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>
            <!-- Description -->
            <div class="mt-4">
                <label for="description">Description</label>

                <textarea wire:model="description"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                    id="description" class="block mt-1 w-full" type="text" name="description"
                    autocomplete="new-description">
                </textarea>
                @error('description')
                <span class="text-red-400">{{ $message }}</span>
                @enderror

            </div>
            <!-- Status -->
            <div class="mt-4">
                <label for="status">Status</label>

                <select wire:model.live="status" name="status" id="status"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                    <option value='' selected>SELECT STATUS</option>
                    @foreach (\App\Enums\StatusType::cases() as $status)
                    <option value="{{ $status->value }}">{{ $status->name }}</option>
                    @endforeach
                </select>
                @error('status')
                <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <!-- priority -->
            <div class="mt-4">
                <label for="priority">Priority</label>
                <select wire:model="priority" name="priority"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                    <option value='' selected>SELECT PRIORITY</option>
                    @foreach (\App\Enums\PriorityType::cases() as $priority)
                    <option value="{{ $priority->value }}">{{ $priority->name }}</option>
                    @endforeach
                </select>
                @error('priority')
                <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>
            <!-- deadline -->
            <div class="mt-4">
                <label for="deadline">Deadline</label>
                <input wire:model="deadline" name="deadline" id="deadline" class="block mt-1 w-full" type="date" />
                @error('deadline')
                <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4" wire:loading>
                Saving data...
            </div>
            <div class="flex items-center justify-center mt-4" wire:loading.remove>
                <livewire:component.button-primary text='valor' />
            </div>
        </form>
    </div>
</div>