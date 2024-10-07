<h1>Create New Todo</h1>

<form action="{{ route('todos.store') }}" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" id="title" name="title" required>
    <br>
    <label for="description">Description</label>
    <textarea id="description" name="description" required></textarea>
    <br>
    <button type="submit">Create</button>
</form>