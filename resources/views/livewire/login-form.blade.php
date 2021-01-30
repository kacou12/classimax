<div>
    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border">
                        <h3 class="bg-gray p-4">Login Now</h3>

                        @if(session()->has('no_log'))
                            <div class="alert alert-danger" role="alert">
                                <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>{{ session('no_log') }}</p>
                            </div>
                        @elseif(session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>{{ session('success') }}</p>
                            </div>
                        @enderror

                        <form wire:submit.prevent="login" id="login_form">
                            <fieldset class="p-4">
                                  {{-- name --}}
                                  <div class="div_name mb-4">
                                    <input type="text"  placeholder="Nom d'utilisateur*" wire:model="name" name="name" value="{{ old('name') }}" class=" @if($errors->has('name'))form-control is-invalid @else border p-3 w-100 my-2 @endif val1">
                                    @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                  </div>
    
                                  {{-- password --}}
                                  <div class="div_password mb-2">                                      
                                    <input type="password" placeholder="Mot de passe*" wire:model="password" name="password" value="{{ old('password') }}"  class=" @if($errors->has('password'))form-control is-invalid @else border p-3 w-100 my-2 @endif val2">
                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                  </div>
    
                                <div class="loggedin-forgot">
                                    <input type="checkbox" id="keep-me-logged-in">
                                    <label for="keep-me-logged-in" class="pt-3 pb-2">Keep me logged in</label>
                                </div>
                                {{-- d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold --}}
                                <button type="submit" class="btn btn-primary mt-3 sendButton" style="color: white">
                                    <span class="gif">
                                        <img src="{{ asset('images/loading.gif') }}" alt=""> 
                                    </span>
                                    Log in
                                    
                                </button>
                                <a class="mt-3 d-block  text-primary" href="#">Forget Password?</a>
                                <a class="mt-3 d-inline-block text-primary" href="{{ route('register') }}">Register Now</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
