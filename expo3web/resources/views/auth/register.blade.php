    @extends('layouts.auth')
    @section('content')
        
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Register!</h3></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('name') is-invalid @enderror" id="inputname" type="name" value="{{ old('name') }}" placeholder="name@example.com" name="name" required autocomplete="name" autofocus/>
                                            <label for="name">Name</label>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" type="email" value="{{ old('email') }}" placeholder="name@example.com" name="email" required autocomplete="email" autofocus/>
                                            <label for="email">Email address</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" value="{{ old('password') }}" placeholder="Enter Password" name="password" required autocomplete="password"/>
                                            <label for="password">Password</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('password') is-invalid @enderror" id="password-confirm" type="password" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password"/>
                                            <label for="password-confirm">Confirm Password</label>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                            <button type="submit" class="btn btn-primary">Register</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ route('login') }}">Already have an Account? Log In!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    </div>
@endsection