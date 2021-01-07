<x-layout>
    <div class="content-wrapper">
        <section class="content">
            <form action="{{ route('login') }}" method="POST" class="card shadow">
                @csrf
                <h1 class="content-title" style="text-align: center;">Create Academy</h1>
                <div class="form-group @if($errors->has('name')) is-invalid @endif">
                    <label for="name" class="required">Name</label>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('name') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Academy Name" required="required" value="{{ old('name') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('logo')) is-invalid @endif">
                    <label for="logo" class="required">Logo</label>
                    @if($errors->has('logo'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('logo') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="logo" name="logo" placeholder="Logo" required="required" value="{{ old('logo') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('website')) is-invalid @endif">
                    <label for="website" class="required">Website</label>
                    @if($errors->has('website'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('website') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="website" name="website" placeholder="Website" required="required" value="{{ old('website') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('country')) is-invalid @endif">
                    <label for="country" class="required">Country</label>
                    @if($errors->has('country'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('country') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="country" name="country" placeholder="Country" required="required" value="{{ old('country') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('state')) is-invalid @endif">
                    <label for="state" class="required">State</label>
                    @if($errors->has('state'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('state') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="state" name="state" placeholder="State" required="required" value="{{ old('state') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('city')) is-invalid @endif">
                    <label for="city" class="required">City</label>
                    @if($errors->has('city'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('city') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required="required" value="{{ old('city') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('description')) is-invalid @endif">
                    <label for="description" class="required">Description</label>
                    @if($errors->has('description'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('description') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" required="required" value="{{ old('description') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('motto')) is-invalid @endif">
                    <label for="motto" class="required">Motto</label>
                    @if($errors->has('motto'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('motto') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="motto" name="motto" placeholder="Motto" required="required" value="{{ old('motto') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('date_of_establishment')) is-invalid @endif">
                    <label for="date_of_establishment" class="required">Date of Establishment</label>
                    @if($errors->has('date_of_establishment'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('date_of_establishment') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="date_of_establishment" name="date_of_establishment" placeholder="Date of Establishment" required="required" value="{{ old('date_of_establishment') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('verified')) is-invalid @endif">
                    <label for="verified" class="required">Verified</label>
                    @if($errors->has('verified'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('verified') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="verified" name="verified" placeholder="Verified" required="required" value="{{ old('verified') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('tags')) is-invalid @endif">
                    <label for="tags" class="required">Tags</label>
                    @if($errors->has('tags'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('tags') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="tags" name="tags" placeholder="Tags" required="required" value="{{ old('tags') }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('photographs')) is-invalid @endif">
                    <label for="photographs" class="required">Photographs</label>
                    @if($errors->has('photographs'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('photographs') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" id="photographs" name="photographs" placeholder="Photographs" required="required" value="{{ old('photographs') }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Submit">
                </div>
            </form>
        </section>
    </div>
</x-layout>
