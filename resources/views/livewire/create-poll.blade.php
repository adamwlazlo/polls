<div>
    Hello LIVEWIRE!!! <br/><br/>

    <form action="" wire:submit.prevent="createPoll">
        <label for="title">Title</label>
        <input type="text" id="title" wire:model.live="title"/>

        <div class="mt-4">
            @foreach($options as $index => $option)
                <div class="mt-2">
                    <label>Option {{ $index + 1 }}</label>

                    <div class="flex gap-2">
                        <input type="text" wire:model.live="options.{{ $index }}" />
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                </div>

            @endforeach
        </div>


        <div class="mt-4">
            <button class="btn" wire:click.prevent="addOption">
                Add Option
            </button>
        </div>

        <div class="mt-4 d-flex justify-content-end">
            <button class="btn" wire:click.prevent="resetPoll">Reset</button>
            <button class="btn" type="submit">Create Poll</button>
        </div>
    </form>
</div>
