<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e9c7a7, #f78820);
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
        }
        .login-card h3 {
            font-weight: 600;
            color: #e29521;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .btn-login {
            background: #e29521;
            color: #fff;
            font-weight: 500;
            border-radius: 50px;
            transition: 0.3s ease;
        }
        .btn-login:hover {
            background: #e47105;
        }
        .form-control {
            border-radius: 10px;
        }
        .small-text {
            font-size: 0.9rem;
            text-align: center;
            margin-top: 1rem;
        }
        @media (max-width: 576px) {
            .login-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h3>Login Admin</h3>
        <form method="POST" action="{{ route('loginProses') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Admin</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password Admin</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password" required>
            </div>
            <button type="submit" class="btn btn-login w-100">Login</button>
        </form>
        <div class="small-text">
            <p>© {{ date('Y') }} Admin Panel</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
