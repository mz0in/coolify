<dialog id="newEmptyProject" class="modal">
    <form method="dialog" class="flex flex-col gap-2 rounded modal-box" wire:submit='submit'>
        <input placeholder="Your Cool Project" id="name" label="Name" required />
        <x-forms.input placeholder="This is my cool project everyone knows about" id="description" label="Description" />
        <button onclick="newEmptyProject.close()" type="submit">
            Save
        </x-forms.button>
    </form>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
