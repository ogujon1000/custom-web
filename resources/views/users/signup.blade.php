<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/d4492f0e4d.js" crossorigin="anonymous"></script>

    {{-- jQuery 3.6.0 --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->

    {{-- jQuery UI 1.12.1 --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{-- Bootstrap 4.4 --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link href="/css/forms.css" rel="stylesheet">
</head>

<body>

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-dark custom-signup">
                    <div class="card-body p-5 text-center">
                        {{-- <form action="{{ route('save') }}" method="post">
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif

                            @csrf --}}
                            <div class="mb-md-5 mt-md-4">

                                <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
                                &nbsp;
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email"
                                        value="{{ old('email') }}" />
                                    {{-- <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name"
                                        value="{{ old('name') }}">
                                    {{-- <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        value="{{ old('password') }}">
                                    {{-- <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="password">Confirm Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password2"
                                        value="{{ old('password') }}">
                                    {{-- <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span> --}}
                                </div>

                                <button class="btn btn-outline-dark btn-lg px-5" type="submit">Register</button>

                            </div>

                            <div>
                                <p class="mb-0">Already have an account? <a href="{{ route('signin') }}"
                                        class="text-dark-50 fw-bold">Login</a>
                                </p>
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
