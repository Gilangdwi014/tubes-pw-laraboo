<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <img src="" class="customGambar" alt="">
    <div class="container">
        <div class="row justify-content-end customPosisi">
            <div class="col-lg-4">

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal warnaText text-center">Please sign in</h1>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="email" name="email"
                                class="form-control @error('email')  is-invalid @enderror" id="email"
                                placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <br>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                        <small class="d-block text-center mt-3 customSmallItem">
                            Not registered?
                            <a href="/register">Register Now!</a>
                        </small>
                        <small class="d-block text-center mt-3 customSmallItem">
                            Back To <a href="/">Home</a>
                        </small>
                    </form>
                </main>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
