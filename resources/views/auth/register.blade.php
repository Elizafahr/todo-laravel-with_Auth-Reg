<form method="POST" action="{{ route('register') }}">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    @error('name')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    @error('email')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <label for="password">Password</label>
    <input type="password" id="password" minlength="8" name="password" value="{{ old('password') }}" required>
    @error('password')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" id="password_confirmation"  minlength="8"  name="password_confirmation" value="{{ old('password_confirmation') }}" required>
    @error('password_confirmation')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <button type="submit">Register</button>
</form>