<div>
    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border border">
                        <h3 class="bg-gray p-4">Register Now</h3>
                        @if(session()->has('no_log'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('no_log') }}
                            </div> 
                        @enderror
                        <form wire:submit.prevent="register" id="register_form">
                            <fieldset class="p-4">
                              {{-- name --}}
                              <div class="div_name mb-4">
                                <input type="text"  placeholder="Nom d'utilisateur*" wire:model="name" name="name" value="{{ old('name') }}" class=" @if($errors->has('name'))form-control is-invalid @else border p-3 w-100 my-2 @endif name">
                                @error('name')
                                
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>

                                {{-- email --}}
                                <input type="email" placeholder="Email*" name="email" value="{{ old('email') }}" wire:model="email" class="@if($errors->has('email'))form-control is-invalid @else border p-3 w-100 my-2 @endif email">
                                <div class="mb-3">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" style="display: block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>

                                {{-- password --}}
                                <div class="div_password mb-2">                                      
                                    <input type="password" placeholder="Mot de passe*" wire:model="password" name="password" value="{{ old('password') }}"  class=" @if($errors->has('password'))form-control is-invalid @else border p-3 w-100 my-2 @endif password">
                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>


                                
                                {{-- password_confirmation --}}
                                <div class="div_password mb-2">                                      
                                    <input type="password" placeholder="Confirmation du mot de passe*" wire:model="password_confirmation" name="password_confirmation" value=""  class=" @if($errors->has('password_confirmation'))form-control is-invalid @else border p-3 w-100 my-2 @endif password_confirmation">
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
                                <button type="submit" class="btn btn-primary mt-3 sendButton" style="color: white">
                                    <span class="gif">
                                        <img src="{{ asset('images/loading.gif') }}" alt=""> 
                                    </span>
                                    Register now
                                    
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>