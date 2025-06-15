<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - NewsSphere</title>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link
    rel="stylesheet"
    as="style"
    onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Newsreader%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
  />
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <style>
    body {
      font-family: Newsreader, "Noto Sans", sans-serif;
      background-color: #ffffff;
      color: #111718;
      min-height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }
    .form-container {
      width: 100%;
      max-width: 400px;
      border: 1px solid #dce5e5;
      border-radius: 1rem;
      padding: 2rem 2.5rem;
      background-color: #f9fafb;
      box-shadow: 0 6px 20px rgb(33 150 156 / 0.1);
      transition: box-shadow 0.3s ease;
    }
    .form-container:hover, .form-container:focus-within {
      box-shadow: 0 10px 30px rgb(33 150 156 / 0.2);
    }
    h1 {
      font-weight: 800;
      font-size: 2rem;
      letter-spacing: -0.015em;
      margin-bottom: 1.5rem;
      text-align: center;
      color: #111718;
    }
    label {
      display: block;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: #111718;
    }
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 0.625rem 1rem;
      border-radius: 0.75rem;
      border: 1px solid #dce5e5;
      background-color: #f0f4f4;
      font-size: 1rem;
      font-family: inherit;
      color: #111718;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    input[type="email"]::placeholder,
    input[type="password"]::placeholder {
      color: #638688;
    }
    input[type="email"]:focus,
    input[type="password"]:focus {
      outline: none;
      border-color: #71c9ce;
      box-shadow: 0 0 6px #71c9ce;
      background-color: #e3fdfd;
    }
    .checkbox-container {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-top: 1rem;
      margin-bottom: 1rem;
    }
    input[type="checkbox"] {
      width: 1.25rem;
      height: 1.25rem;
      border-radius: 0.25rem;
      border: 1px solid #dce5e5;
      accent-color: #71c9ce;
      cursor: pointer;
      flex-shrink: 0;
      transition: box-shadow 0.3s ease;
    }
    input[type="checkbox"]:focus-visible {
      outline-offset: 3px;
      outline: 3px solid #71c9ce;
    }
    .checkbox-label {
      font-size: 0.925rem;
      color: #111718;
      cursor: pointer;
      user-select: none;
    }
    .forgot-password {
      margin-left: auto;
      font-size: 0.9rem;
      text-decoration: none;
      color: #71c9ce;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    .forgot-password:hover,
    .forgot-password:focus {
      color: #49a3ad;
      outline-offset: 3px;
      outline: 3px solid #49a3ad;
    }
    .btn-login {
      width: 100%;
      margin-top: 1.5rem;
      padding: 0.75rem 0;
      background-color: #71c9ce;
      border-radius: 1rem;
      border: none;
      color: white;
      font-weight: 800;
      font-size: 1.125rem;
      cursor: pointer;
      box-shadow: 0 8px 20px rgb(113 201 206 / 0.35);
      transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    }
    .btn-login:hover,
    .btn-login:focus-visible {
      background-color: #49a3ad;
      box-shadow: 0 12px 30px rgb(73 163 173 / 0.5);
      outline-offset: 3px;
      outline: 3px solid #49a3ad;
      transform: translateY(-3px);
    }
    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after {
        transition: none !important;
      }
    }
  </style>
</head>
<body>
  <form class="form-container" method="POST" action="{{ route('login') }}" aria-label="Login form" novalidate>
    @csrf
    <h1 style="font-family: 'Newsreader', serif; font-weight: 800; font-size: 2.2rem; letter-spacing: -0.015em; text-align: center; margin-bottom: 2rem;">
      Login to NewsSphere
    </h1>
    @if (session('status'))
      <div style="color: #71c9ce; text-align:center; margin-bottom:18px; font-weight:600;">{{ session('status') }}</div>
    @endif
    <label for="email">Email address</label>
    <input
      type="email"
      id="email"
      name="email"
      placeholder="you@example.com"
      autocomplete="email"
      required
      aria-required="true"
      aria-describedby="email-desc"
      value="{{ old('email') }}"
      autofocus
    />
    @error('email')
      <div style="color:#e53935; font-size:0.95rem; margin-top:4px;">{{ $message }}</div>
    @enderror
    <label for="password" style="margin-top: 1.25rem;">Password</label>
    <input
      type="password"
      id="password"
      name="password"
      placeholder="Enter your password"
      autocomplete="current-password"
      required
      aria-required="true"
      aria-describedby="password-desc"
    />
    @error('password')
      <div style="color:#e53935; font-size:0.95rem; margin-top:4px;">{{ $message }}</div>
    @enderror
    <div class="checkbox-container">
      <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} />
      <label for="remember" class="checkbox-label">Remember me</label>
      <a href="{{ route('password.request') }}" class="forgot-password" tabindex="0">Forgot password?</a>
    </div>
    <button type="submit" class="btn-login" aria-label="Log in to your account">Login</button>
<div style="margin-top: 1.5rem; text-align: center; font-family: 'Newsreader', serif; font-size: 1.05rem; color: #111718;">
  Don't have an account?
  <a href="{{ route('register') }}" style="color: #71c9ce; font-weight: 700; text-decoration: underline; margin-left: 4px;">Register here</a>
</div>
  </form>
</body>
</html>

