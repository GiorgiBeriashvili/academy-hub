<x-layout>
    <div class="content-wrapper d-flex justify-content-center align-items-center">
        <section class="w-400">
            <form action="{{ route('register') }}" method="POST" class="card shadow">
                @csrf
                <h1 class="content-title" style="text-align: center;">Register</h1>
                <div class="form-group @if($errors->has('username')) is-invalid @endif">
                    <label for="username" class="required">Username</label>
                    @if($errors->has('username'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('username') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text pl-10 pr-10" data-toggle="tooltip" data-title="Only letters, numbers, dashes and underscores allowed."><i class="fa fa-user-o"></i></span>
                        </div>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required" value="{{ old('username') }}" autofocus autocomplete="username">
                    </div>
                </div>
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
                        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required="required" value="{{ old('email') }}" autocomplete="email">
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
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required" autocomplete="new-password">
                        <div class="input-group-append">
                            <span class="input-group-text" id="password-toggle" style="cursor: pointer;"
                                  onclick="toggleVisibility(`#password`, '#password-toggle')"
                                  data-toggle="tooltip" data-title="Show Text"><i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group @if($errors->has('password_confirmation')) is-invalid @endif">
                    <label for="confirm-password" class="required">Confirm password</label>
                    @if($errors->has('password_confirmation'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('password_confirmation') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="padding-left: 15px; padding-right: 15px;" data-toggle="tooltip" data-title="Must match the above password exactly."><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Confirm password" required="required" autocomplete="new-password">
                        <div class="input-group-append">
                            <span class="input-group-text" id="change-password-toggle" style="cursor: pointer;"
                                  onclick="toggleVisibility(`#confirm-password`, '#change-password-toggle')"
                                  data-toggle="tooltip" data-title="Show Text"><i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="Submit">
            </form>
        </section>
    </div>

    <x-password-visibility-toggler/>
</x-layout>
