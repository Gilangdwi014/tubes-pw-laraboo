<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>
    <img src="" class="customGambar" alt="">
    <div class="container">
        <div class="row justify-content-end customPosisi">
            <div class="col-lg-4">
                <main class="form-signin w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal warnaText text-center">Registration Form</h1>
                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="name"
                                class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                                placeholder="Name" required value="{{ old('name') }}">
                            <label for="name">Full Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username"
                                class="form-control @error('username') is-invalid @enderror" id="username"
                                placeholder="Username" required value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                        <small class="d-block text-center mt-3 customSmallItem">Already registered? <a
                                href="/login">Login</a></small>
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
