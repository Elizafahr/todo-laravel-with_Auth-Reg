@include('header')
<h1 class="display-4">Edit Todo</h1>

<form action="{{ route('todos.update', $todo) }}" method="post" class="needs-validation">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="title" class="col-form-label">Title:</label>
        <input type="text" name="title" value="{{ $todo->title }}" class="form-control">
    </div>
    <div class="form-group mt-5  ">
        <label for="completed" class="col-form-label">Completed:</label>
        <input type="checkbox" class="  ml-2"    name="completed" {{ $todo->completed ? 'checked' : '' }} class="form-check-input">
    </div>
    <button type="submit" class="btn btn-primary">Update Todo</button>
</form>