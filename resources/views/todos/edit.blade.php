<h1>Edit Task</h1>
<form action="{{ route('todos.update', $todo) }}" method="post">
    @csrf
    @method('patch')
 
     <label for="title">Title</label>
    <input type="text" id="title" name="title" value="{{ $todo->title }}" required>
    <br>
    <label for="description">Description</label>
    <textarea id="description" name="description" required>{{ $todo->description }}</textarea>
    <br>
    <button type="submit">Update</button>
</form>