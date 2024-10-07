@include('header')
<form method="POST" action="{{ route('login') }}" class="needs-validation">
    @csrf
    <h1 class="display-4">Login</h1>
    <div class="form-group">
        <label for="email" class="col-form-label">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-control">
    </div>
    <div class="form-group">
        <label for="password" class="col-form-label">Password</label>
        <input type="password" id="password" name="password" value="{{ old('password') }}" required class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>