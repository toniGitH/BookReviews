<div> 

    <livewire:page-header /> 
     
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
