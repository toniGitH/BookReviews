<div>
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
        
    <ul class="list">
        @foreach($books as $book)
            <li wire:key="book-{{ $book->id }}">
                <button wire:click="delete({{ $book->id }})">Eliminar</button>
                <h3>{{ $book->title }}</h3>
                <h4>{{ $book->author }}</p>
                <p>Rating: {{ $book->rating }}/10</p>
            </li>
        @endforeach
    </ul>
</div>
