@include('header')
<form method="POST" action="{{ route('register') }}" class="needs-validation">
    @csrf
    <h1 class="display-4">Register</h1>
    <div class="form-group">
        <label for="name" class="col-form-label">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email" class="col-form-label">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-control">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="col-form-label">Password</label>
        <input type="password" id="password" minlength="8" name="password" value="{{ old('password') }}" required class="form-control">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password_confirmation" class="col-form-label">Confirm Password</label>
        <input type="password" id="password_confirmation"  minlength="8"  name="password_confirmation" value="{{ old('password_confirmation') }}" required class="form-control">
        @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>