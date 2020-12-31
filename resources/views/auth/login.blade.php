<x-layout>
    <div class="content-wrapper d-flex justify-content-center align-items-center">
        <section class="w-400">
            <form action="{{ route('login') }}" method="POST" class="card shadow">
                @csrf
                <h1 class="content-title" style="text-align: center;">Login</h1>
                <div class="form-group @if($errors->has('email')) is-invalid @endif">
                    <label for="email" class="required">Email</label>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('email') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text pl-10 pr-10" data-toggle="tooltip" data-title="Must be formatted as an email address."><i class="fa fa-envelope-o"></i></span>
                        </div>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required="required" value="{{ old('email') }}" autocomplete="email" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('password')) is-invalid @endif">
                    <label for="password" class="required">Password</label>
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('password') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="padding-left: 15px; padding-right: 15px;" data-toggle="tooltip" data-title="Must be at least 8 characters long."><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required" autocomplete="current-password">
                        <div class="input-group-append">
                            <span class="input-group-text" id="password-toggle" style="cursor: pointer;"
                                  onclick="toggleVisibility(`#password`, '#password-toggle')"
                                  data-toggle="tooltip" data-title="Show Text"><i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-checkbox">
                        <input type="checkbox" id="remember-me" autocomplete="on">
                        <label for="remember-me">Remember me</label>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Submit">
                </div>
                @if (\Illuminate\Support\Facades\Route::has('password.request'))
                    <div style="text-align: center;">
                        <a href="{{ route('password.request') }}" class="hyperlink-underline">Forgot your password?</a>
                    </div>
                @endif
            </form>
        </section>
    </div>

    <x-password-visibility-toggler/>
</x-layout>
