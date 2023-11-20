<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    
    {{-- <input type="text" wire:model='todo'>
    <button type="button" wire:click='add'>Add</button> --}}

    <form wire:submit='add'>
        {{-- model.live. --}}
        {{-- model.chnage --}}
        {{-- model.blur --}}
        <input type="text" wire:model='todo'>

        <button type="submit">Add</button>
        {{-- <div>cureent todo {{ $todo }}</div> --}}
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
