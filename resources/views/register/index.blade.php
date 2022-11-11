<!doctype html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="img/WhatsApp_Image_2021-12-27_at_13.24.42-removebg-preview.png">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5  ">
            <div class="col-md-6">
                <main class="form-signin w-100 col-md-4">
                    <form action="/register" method="post">
                        @csrf
                        <h2>Silahkan daftarkan akun anda</h2>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid
                            @enderror" name="name" id="name"
                                placeholder="Nama">
                            <label for="name">Nama</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid
                            @enderror" name="email" id="email"
                                placeholder="name@example.com">
                            <label for="email">Email</label>

                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <div class="form-floating mb-3">
                            <input type="username" class="form-control @error('username') is-invalid
                            @enderror" name="username" id="username"
                                placeholder="Username">
                            <label for="username">Username</label>

                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid
                            @enderror" name="password" id="password"
                                placeholder="Password">
                            <label for="password">Password</label>

                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <button class="w-50 btn btn-lg btn-primary">Daftar</button>
                    </form>
                    <small class="d-block text-center mt-3 fs-6">Sudah Punya akun ?? <a href="/login"
                            class="text-decoration-none">Silahkan Masuk</a></small>
                </main>
            </div>
        </div>
    </div>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
