<div>

    <flux:modal name="create-note" class="md:w-900">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Update note</flux:heading>
                <flux:text class="mt-2">Make your notes.</flux:text>
            </div>

            <flux:input 
            label="name" 
            wire:model="name"
            placeholder="Your name" />
            
            <flux:input 
            label="email" 
            wire:model="email"
            placeholder="Your email" />
            
            <flux:input 
            label="wa_number" 
            wire:model="wa_number"
            placeholder="Your number" />
            
            <flux:input 
            label="content" 
            wire:model="content"
            placeholder="Your message" />

            <flux:input label="Date of birth" type="date" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click="save" >Save</flux:button>
            </div>
        </div>
    </flux:modal>
</div>