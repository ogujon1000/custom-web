<div class="container vh-100">
    <div class="row justify-content-center h-100">
        <div class="card my-auto custom-signin">
            <div class="card-header text-center font-weight-bolder">
                Sign Up
            </div>
            <div class="card-body">
                <form action="{{ route('save') }}" method="post">

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

                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="user">Username</label>
                        <input type="user" class="form-control" name="user" value="{{ old('user') }}">
                        <span class="text-danger">
                            @error('user')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password2">Confirm Password</label>
                        <input type="password" class="form-control" name="password2" value="{{ old('password') }}">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="text-center btn btn-primary w-100">Register</button>
                    <!--<a class="btn btn-primary w-100" href="login.html" role="button">Register</a>-->
                    <a class="btn btn-link w-100" href="{{ route('signin') }}" role="button"><small>Already have
                            an
                            account?</small></a>

                </form>

            </div>

        </div>

    </div>

</div>

