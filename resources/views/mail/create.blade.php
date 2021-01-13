<x-layout>
    <div class="content-wrapper d-flex justify-content-center align-items-center">
        <section class="w-400">
            <form enctype="multipart/form-data" action="{{ route('mail.send') }}" method="POST" class="card shadow">
                @csrf
                <h1 class="content-title" style="text-align: center;">Send Mail</h1>
                <div class="form-group @if($errors->has('mail')) is-invalid @endif">
                    <label for="mail" class="required">Email</label>
                    @if($errors->has('mail'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('mail') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text pl-10 pr-10" data-toggle="tooltip" data-title="Must be formatted as an email address."><i class="fa fa-envelope-o"></i></span>
                        </div>
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="email@example.com" required="required" value="{{ old('email') }}" autocomplete="email" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Send">
                </div>
            </form>
        </section>
    </div>
</x-layout>
