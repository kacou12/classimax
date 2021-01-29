<div>
    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border border">
                        <h3 class="bg-gray p-4">Register Now</h3>
                        <form wire:submit.prevent="register">
                            <fieldset class="p-4">
                              {{-- name --}}
                                <input type="text" placeholder="Nom d'utilisateur*" wire:model="name" wire:model="name" value="{{ old('name') }}" name="name" class="@if($errors->has('name'))form-control is-invalid @else border p-3 w-100 my-2 @endif name">
                                <div class="mb-3">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>

                                {{-- email --}}
                                <input type="email" placeholder="Email*" name="email" value="{{ old('email') }}" wire:model="email" class="@if($errors->has('name'))form-control is-invalid @else border p-3 w-100 my-2 @endif email">
                                <div class="mb-3">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>

                                {{-- password --}}
                                <input type="password" placeholder="Mot de passe*" name="password" wire:model="password" value="{{ old('password') }}" class="@if($errors->has('name'))form-control is-invalid @else border p-3 w-100 my-2 @endif password">
                                <div class="mb-3">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>

                                {{-- password_confirmation --}}
                                <input type="password" placeholder="Confirmation du mot de passe*" name="password_confirmation" value="{{ old('password_confirmation') }}" class="@if($errors->has('name'))form-control is-invalid @else border p-3 w-100 my-2 @endif password_confirmation">
                                <div class="mb-3">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>

                                {{-- <div class="loggedin-forgot d-inline-flex my-3">
                                        <input type="checkbox" id="registering" class="mt-1">
                                        <label for="registering" class="px-2">By registering, you accept our <a class="text-primary font-weight-bold" href="terms-condition.html">Terms & Conditions</a></label>
                                </div> --}}
                                <button type="submit" class="btn btn-primary mt-3 sendButton  ">Register Now</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>