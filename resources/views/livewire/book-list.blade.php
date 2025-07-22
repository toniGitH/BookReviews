<div>
    <header>
        <div>
            <h2>¡Hola, {{ $name }}!</h2>
            <p>Esta es la lista de tus reviews de libros</p>
        </div>
    </header class="flex justify-between">
    <ul class="list">
        @foreach($books as $book)
            <li wire:key="book-{{ $book->id }}">
                <h3>{{ $book->title }}</h3>
                <h4>{{ $book->author }}</p>
                <p>Rating: {{ $book->review }}/10</p>
            </li>
        @endforeach
    </ul>
</div>
