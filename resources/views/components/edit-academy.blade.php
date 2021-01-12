<x-layout>
    <div class="content-wrapper">
        <section class="content">
            <form action="{{ route('academies.update', ['academy' => $academy]) }}" method="POST" class="card shadow" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h1 class="content-title" style="text-align: center;">Edit Academy</h1>
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
                        <input type="text" class="form-control" id="name" name="name" placeholder="Academy Name" required="required" value="{{ old('name') ?? $academy->name }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('logo')) is-invalid @endif">
                    @if($errors->has('logo'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('logo') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="custom-file">
                        <label for="logo">Choose Logo</label>
                        <input type="file" accept=".jpg,.png,.jpeg,.gif,.svg" class="form-control" id="logo" name="logo" data-default-value="{{ old('logo') ?? $academy->logo }}" value="{{ old('logo') ?? $academy->logo }}">
                    </div>
                </div>
                <div class="form-group @if($errors->has('website')) is-invalid @endif">
                    <label for="website">Website</label>
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
                        <input type="text" class="form-control" id="website" name="website" placeholder="Website" value="{{ old('website') ?? $academy->website }}" autofocus>
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
                        <select class="form-control" id="country" name="country" required="required">
                            @foreach($countries as $country)
                                <option value="{{ $country }}" selected="{{ $academy->$country }}">{{ $country }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group @if($errors->has('state')) is-invalid @endif">
                    <label for="state">State</label>
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
                        <input type="text" class="form-control" id="state" name="state" placeholder="State" value="{{ old('state') ?? $academy->state }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('city')) is-invalid @endif">
                    <label for="city">City</label>
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
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{ old('city') ?? $academy->city }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('description')) is-invalid @endif">
                    <label for="description">Description</label>
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
                        <textarea class="form-control" id="description" name="description" placeholder="Description" autofocus>{{ old('description') ?? $academy->description }}</textarea>
                    </div>
                </div>
                <div class="form-group @if($errors->has('motto')) is-invalid @endif">
                    <label for="motto">Motto</label>
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
                        <input type="text" class="form-control" id="motto" name="motto" placeholder="Motto" value="{{ old('motto') ?? $academy->motto }}" autofocus>
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
                        <input type="date" class="form-control" id="date_of_establishment" name="date_of_establishment" placeholder="Date of Establishment" required="required" value="{{ old('date_of_establishment') ?? $academy->date_of_establishment }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('tags')) is-invalid @endif">
                    <label for="tags">Tags</label>
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
                        <input type="text" class="form-control" id="tags" name="tags" placeholder="Tags" value="{{ old('tags') ?? implode(' ', $academy->tags()->pluck('name')->toArray()) }}" autofocus>
                    </div>
                </div>
                <div class="form-group @if($errors->has('photographs[]')) is-invalid @endif">
                    @if($errors->has('photographs[]'))
                        <div class="invalid-feedback">
                            <ul>
                                @foreach ($errors->get('photographs[]') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="custom-file">
                        <label for="photographs[]">Choose Photographs</label>
                        <input type="file" multiple accept=".jpg,.png,.jpeg,.gif,.svg" class="form-control" id="photographs[]" name="photographs[]" data-default-value="{{ old('photographs') ?? implode(' ', $academy->photographs()->pluck('photograph')->toArray()) }}" value="{{ old('photographs') ?? implode(' ', $academy->photographs()->pluck('photograph')->toArray()) }}">
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Update">
                </div>
            </form>
        </section>
    </div>
</x-layout>
