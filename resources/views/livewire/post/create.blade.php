<form wire:submit.prevent="save">
    <label for="title">Title:</label>
    <input type="text" id="title" wire:model="title" required>

    <label for="content">Content:</label>
    <textarea id="content" wire:model="content" required></textarea>

    <button type="submit">Save</button>
</form>
