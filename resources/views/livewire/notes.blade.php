<div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Notes') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">{{ __('Manage your notes') }}</flux:subheading>
    <flux:separator variant="subtle" />

    <flux:modal.trigger name="create-note">
        <flux:button class="mt-4">Create Note</flux:button>
    </flux:modal.trigger>

    @session('success')
    <div 
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 3000)"
        class="fixed top-5 right-5 bg-green-600 text-white px-4 py-2 rounded shadow"
        role="alert"
    >
        <p>{{ $value }}</p>
    </div>
    @endsession('success')

    <livewire:create-note />
    <livewire:edit-note />

    {{-- Notes Table --}}

    <table class="table-auto w-full bg-slate-900 shadow-md rounded-md mt-5 border border-slate-700">
        <thead class="bg-slate-800 text-white">
            <tr>
                <th class="px-4 py-2 text-left border-l border-r border-slate-700">Name</th>
                <th class="px-4 py-2 text-left border-l border-r border-slate-700">Email</th>
                <th class="px-4 py-2 text-left border-l border-r border-slate-700">Wa_Number</th>
                <th class="px-4 py-2 text-left border-l border-r border-slate-700">Text</th>
                <th class="px-4 py-2 text-center border-l border-r border-slate-700">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($notes as $note)
            <tr class="border-t border-slate-800">
                <td class="px-4 py-2 border-l border-r border-slate-800 text-white">{{ $note->name }}</td>
                <td class="px-4 py-2 border-l border-r border-slate-800 text-white">{{ $note->email }}</td>
                <td class="px-4 py-2 border-l border-r border-slate-800 text-white">{{ $note->wa_number }}</td>
                <td class="px-4 py-2 border-l border-r border-slate-800 text-white">{{ $note->content }}</td>
                <td class="px-4 py-2 text-center border-l border-r border-slate-800">
                    <div class="flex flex-row gap-2 justify-center">
                        <flux:button wire:click="edit({{ $note->id }})">Edit</flux:button>
                        <flux:button variant="danger" wire:click="delete({{ $note->id }})">Delete</flux:button>
                    </div>
                </td>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-2 text-center text-slate-400 border-l border-r border-slate-800 bg-slate-900">
                            No Notes Found.
                        </td>
                    </tr>
                </tr>
                @endforelse
        </tbody>
    </table>

    {{-- Pagination Links --}}
    <div class="mt-4">
        {{ $notes->links() }}
    </div>   
    
    {{-- Delete Modal --}}

    <flux:modal name="delete-note" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Delete project?</flux:heading>

                <flux:text class="mt-2">
                    <p>You're about to delete this project.</p>
                    <p>This action cannot be reversed.</p>
                </flux:text>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>

                <flux:button type="submit" variant="danger" wire:click="deleteNote()">Delete note</flux:button>
            </div>
        </div>
    </flux:modal>
</div>