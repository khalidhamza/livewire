<div>
    Counter = {{ $counter }}

    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>

    <hr>
    @if (!empty($message))
        From data is {{ $message }}
    @endif


    <form wire:submit='save'>
        <input type="text" wire:model='title'><br><br>
        <div>
            @error('title') <span class="error">{{ $message }}</span> @enderror 
        </div>
        
        <textarea type="text" wire:model='content'></textarea> <br>
        <button type="submit" wire:confirm="Are you sure you want to Save?">Save</button>
    </form>

    <hr>

    {{-- <span x-text="await $wire.getTestData()"></span> --}}
</div>
