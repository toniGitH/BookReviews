<div class="create">
    <header class="flex justify-between">
        <div>
            <h3>Crear nuevo libro</h3>
        </div>
    </header>

    <form wire:submit='save'>
        <div class="field">
            <label>Book Title:</label>
            <input type="text" wire:model="title">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="field">
            <label>Book Author:</label>
            <input type="text" wire:model="author">
            @error('author')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="field">
            <label>Book Rating:</label>
            <input type="number" wire:model="rating">
            @error('rating')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button>Añadir Libro</button>
    </form>
</div>
