@include('header')
<h1 class="display-4">Todos</h1>

<ul class="list-group">
    @foreach($todos as $todo)
        <li class="list-group-item">
            {{ $todo->title }}
            ({{ $todo->completed ? 'Completed' : 'Not Completed' }})
            <form action="{{ route('todos.updateStatus', $todo) }}" method="post" class="d-inline ml-5">
                @csrf
                @method('patch')
                <input type="checkbox" name="completed" {{ $todo->completed ? 'checked' : '' }} class="form-check-input">
                <button type="submit" class="btn btn-sm btn-primary">Update Status</button>
            </form>
            <a href="{{ route('todos.edit', $todo) }}" class="btn btn-sm btn-secondary">Edit</a>
            <form action="{{ route('todos.destroy', $todo) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </li>
    @endforeach
</ul>

<a href="{{ route('todos.create') }}" class="btn btn-primary">Create New Todo</a>
