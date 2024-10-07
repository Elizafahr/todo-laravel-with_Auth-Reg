<h1>Todos</h1>

<ul>
    @foreach($todos as $todo)
        <li>
            {{ $todo->title }}
            ({{ $todo->completed ? 'Completed' : 'Not Completed' }})
            <form action="{{ route('todos.updateStatus', $todo) }}" method="post">
                @csrf
                @method('patch')
                <input type="checkbox" name="completed" {{ $todo->completed ? 'checked' : '' }}>
                <button type="submit">Update Status</button>
            </form>
            <a href="{{ route('todos.edit', $todo) }}">Edit</a>
            <form action="{{ route('todos.destroy', $todo) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
          
          
           
        </li>
    @endforeach
</ul>

<a href="{{ route('todos.create') }}">Create New Todo</a>
