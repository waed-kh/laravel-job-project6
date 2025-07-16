<style>
    body {
        background-color: #f5f7fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-container {
        max-width: 400px;
        margin: 100px auto;
        padding: 30px;
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-weight: 500;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    input[type="checkbox"] {
        margin-right: 5px;
    }

    .remember-me {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .btn-submit {
        width: 100%;
        padding: 10px;
        background-color: #48A7A5;
        border: none;
        color: white;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
        background-color: #48A7A5;
    }

    .forgot-link {
        display: block;
        text-align: right;
        margin-top: 10px;
        font-size: 13px;
        color: #48A7A5;
        text-decoration: none;
    }

    .forgot-link:hover {
        text-decoration: underline;
    }

    .invalid-feedback {
        color: red;
        font-size: 13px;
        margin-top: 5px;
    }
</style>

<div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="remember-me">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember Me</label>
        </div>

    <button type="submit" class="btn-submit">تسجيل الدخول</button>


        @if (Route::has('password.request'))
            <a class="forgot-link" href="{{ route('password.request') }}">
                Forgot your password?
            </a>
        @endif
    </form>
</div>
