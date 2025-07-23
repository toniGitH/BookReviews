<header class="flex justify-between">
    <div>
        <h2>¡Hola, {{ $name }}!</h2>
        <p>Esta es la lista de tus reviews de libros</p>
    </div>
    <form>
        <span class="mr-2">Tu nombre:</span>
        <input type="text" wire:model.live.debounce.500ms="name">
        <button>Actualizar</button>
    </form>
</header>
