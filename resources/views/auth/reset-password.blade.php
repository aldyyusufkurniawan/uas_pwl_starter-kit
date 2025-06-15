<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Reset Password - NewsSphere</title>
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
      margin-bottom: 1.25rem;
    }
    input::placeholder {
      color: #638688;
    }
    input:focus {
      outline: none;
      border-color: #71c9ce;
      box-shadow: 0 0 6px #71c9ce;
    }
    .btn-reset {
      width: 100%;
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
    .btn-reset:hover,
    .btn-reset:focus-visible {
      background-color: #49a3ad;
      box-shadow: 0 12px 30px rgb(73 163 173 / 0.5);
      outline-offset: 3px;
      outline: 3px solid #49a3ad;
      transform: translateY(-3px);
    }
    .back-to-login {
      margin-top: 1.5rem;
      font-size: 0.9rem;
      text-align: center;
      color: #71c9ce;
      font-weight: 600;
      text-decoration: none;
      display: block;
      transition: color 0.3s ease;
    }
    .back-to-login:hover,
    .back-to-login:focus {
      color: #49a3ad;
      outline-offset: 3px;
      outline: 3px solid #49a3ad;
    }
    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after {
        transition: none !important;
      }
    }
  </style>
</head>
<body>
  <form class="form-container" aria-label="Reset password form" method="POST" action="{{ route('password.store') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    <h1 style="font-family: 'Newsreader', serif; font-weight: 800; font-size: 2rem; letter-spacing: -0.015em; margin-bottom: 1.5rem; text-align: center; color: #111718;">Reset your password</h1>
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    <label for="email">Email address</label>
    <input
      type="email"
      id="email"
      name="email"
      placeholder="you@example.com"
      autocomplete="email"
      required
      aria-required="true"
      value="{{ old('email', $request->email) }}"
    />
    @error('email')
      <div style="color:#e53935; font-size:0.95rem; margin-top:4px;">{{ $message }}</div>
    @enderror
    <label for="password">New Password</label>
    <input
      type="password"
      id="password"
      name="password"
      placeholder="Create a new password"
      autocomplete="new-password"
      required
      aria-required="true"
    />
    @error('password')
      <div style="color:#e53935; font-size:0.95rem; margin-top:4px;">{{ $message }}</div>
    @enderror
    <label for="password_confirmation">Confirm Password</label>
    <input
      type="password"
      id="password_confirmation"
      name="password_confirmation"
      placeholder="Confirm your new password"
      autocomplete="new-password"
      required
      aria-required="true"
    />
    @error('password_confirmation')
      <div style="color:#e53935; font-size:0.95rem; margin-top:4px;">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn-reset" aria-label="Reset your password">Reset Password</button>
    <div style="margin-top: 1.5rem; text-align: center; font-family: 'Newsreader', serif; font-size: 1.05rem; color: #111718;">
      Back to
      <a href="{{ route('login') }}" style="color: #71c9ce; font-weight: 700; text-decoration: underline; margin-left: 4px;">Login</a>
    </div>
  </form>
</body>
</html>
