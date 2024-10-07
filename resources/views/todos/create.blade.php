@include('header')
<h1 class="display-4">Create New Todo</h1>

<form action="{{ route('todos.store') }}" method="post" class="needs-validation">
    @csrf
    <div class="form-group">
        <label for="title" class="col-form-label">Title</label>
        <input type="text" id="title" name="title" required class="form-control">
    </div>
    <div class="form-group">
        <label for="description" class="col-form-label">Description</label>
        <textarea id="description" name="description" required class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
