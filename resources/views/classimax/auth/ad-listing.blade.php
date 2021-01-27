@extends('classimax/auth/auth_layout')
@section('auth_content')
<section class="ad-post bg-gray py-5">
  <div class="container">
      <form action="{{ route('Ads.store') }}" method="POST">
        @csrf
          <!-- Post Your ad start -->
          <fieldset class="border border-gary p-4 mb-5">
                  <div class="row">
                      <div class="col-lg-12">
                          <h3>Publiez votre annonce</h3>
                      </div>
                      <div class="col-lg-6">
                          <h6 class="font-weight-bold pt-4 pb-1">Titre de l'annonce:</h6>
                          <input type="text" name="title" class="border w-100 p-2 bg-white text-capitalize" placeholder="Ajouter le titre ici">
                          {{-- <h6 class="font-weight-bold pt-4 pb-1">Ad Type:</h6>
                          <div class="row px-3">
                              <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white">
                                  <input type="radio" name="itemName" value="personal" id="personal">
                                  <label for="personal" class="py-2">Personal</label>
                              </div>
                              <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white ">
                                  <input type="radio" name="itemName" value="business" id="business">
                                  <label for="business" class="py-2">Business</label>
                              </div>
                          </div> --}}
                          <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                          <textarea name="description" id="" class="border p-3 w-100" rows="7" placeholder="Write details about your product"></textarea>
                      </div>
                      <div class="col-lg-6">
                          <h6 class="font-weight-bold pt-4 pb-1">Sélectionnez la catégorie d'annonce::</h6>
                          <select name="categorie" id="inputGroupSelect" class="w-100">
                              <option value="1">Select category</option>
                              <option value="2">Laptops</option>
                              <option value="3">iphone</option>
                              <option value="4">microsoft</option>
                              <option value="5">monitors</option>
                              <option value="6">11inch Macbook Air</option>
                              <option value="7">Study Table Combo</option>
                              <option value="8">11inch Macbook Air</option>
                              <option value="9">Study Table Combo</option>
                              <option value="10">11inch Macbook Air</option>
                          </select>
                          <div class="price">
                              <h6 class="font-weight-bold pt-4 pb-1">Prix ​​de l'article (Euros &euro;):</h6>
                              <div class="row px-3">
                                  <div class="col-lg-12 mr-lg-12 pl-0 bg-white my-2 ">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">&euro;</div>
                                        <input type="number" name="price" class="border-0 pl-2 py-2 w-100 price" placeholder=" Price" id="price">
                                      </div>
                                  </div>
                                  {{-- <div class="col-lg-4 mrx-4 rounded bg-white my-2 ">
                                      <input type="checkbox" value="Negotiable" id="Negotiable">
                                      <label for="Negotiable" class="py-2">Negotiable</label>
                                  </div> --}}
                              </div>
                          </div>
                          <div class="choose-file text-center my-4 py-4 rounded">
                              <label for="file-upload">
                                  <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                                  <span class="d-block">or</span>
                                  <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>
                                  <span class="d-block">Maximum upload file size: 500 KB</span>
                                  <input type="file"  class="form-control-file d-none file-input" multiple id="file-upload" name="file">
                              </label>
                          </div>
                      </div>
                      <div class="my_caroussel" id="preview">
                        {{-- <div>
                            <img  width="400" height="300"  class="mr-4" src="{{ asset('images/1.jpg') }}" alt="Card image cap">
                        </div>
                        <div>
                            <img  width="150" height="300" class="mr-4" src="{{ asset('images/2.jpg') }}" alt="Card image cap">
                        </div>
                        <div>
                            <img  width="50" height="300" class="mr-4" src="{{ asset('images/3.jpg') }}" alt="Card image cap">
                        </div>
                        <div>
                            <img  width="650" height="300" class="mr-4" src="{{ asset('images/4.jpg') }}" alt="Card image cap">
                        </div> --}}

                      </div>
                  </div>
          </fieldset>
          <!-- Post Your ad end -->

          <!-- seller-information start -->
          <fieldset class="border p-4 my-5 seller-information bg-gray">
              <div class="row">
                  <div class="col-lg-12">
                      <h3>Seller Information</h3>
                  </div>
                  <div class="col-lg-6">
                      <h6 class="font-weight-bold pt-4 pb-1">Contact Name:</h6>
                      <input type="text" placeholder="Contact name" class="border w-100 p-2">
                      <h6 class="font-weight-bold pt-4 pb-1">Contact Number:</h6>
                      <input type="text" placeholder="Contact Number" class="border w-100 p-2">
                  </div>
                  <div class="col-lg-6">
                      <h6 class="font-weight-bold pt-4 pb-1">Contact Name:</h6>
                      <input type="email" placeholder="name@yourmail.com" class="border w-100 p-2">
                      <h6 class="font-weight-bold pt-4 pb-1">Contact Name:</h6>
                      <input type="text" placeholder="Your address" class="border w-100 p-2">
                  </div>
              </div>
          </fieldset>
          <!-- seller-information end-->

          <!-- ad-feature start -->
          <fieldset class="border bg-white p-4 my-5 ad-feature bg-gray">
              <div class="row">
                  <div class="col-lg-12">

                      <h3 class="pb-3">Make Your Ad Featured
                          <span class="float-right"><a class="text-right font-weight-normal text-success" href="#">What
                                  is featured ad ?</a></span>
                      </h3>

                  </div>
                  <div class="col-lg-6 my-3">
                      <span class="mb-3 d-block">Premium Ad Options:</span>
                      <ul>
                          <li>
                              <input type="radio" id="regular-ad" name="adfeature">
                              <label for="regular-ad" class="font-weight-bold text-dark py-1">Regular Ad</label>
                              <span>$00.00</span>
                          </li>
                          <li>
                              <input type="radio" id="Featured-Ads" name="adfeature">
                              <label for="Featured-Ads" class="font-weight-bold text-dark py-1">Top Featured Ads</label>
                              <span>$59.00</span>
                          </li>
                          <li>
                              <input type="radio" id="urgent-Ads" name="adfeature">
                              <label for="urgent-Ads" class="font-weight-bold text-dark py-1">Urgent Ads</label>
                              <span>$79.00</span>
                          </li>
                      </ul>
                  </div>
                  <div class="col-lg-6 my-3">
                      <span class="mb-3 d-block">Please select the preferred payment method:</span>
                      <ul>
                          <li>
                              <input type="radio" id="bank-transfer" name="adfeature">
                              <label for="bank-transfer" class="font-weight-bold text-dark py-1">Direct Bank Transfer</label>
                          </li>
                          <li>
                              <input type="radio" id="Cheque-Payment" name="adfeature">
                              <label for="Cheque-Payment" class="font-weight-bold text-dark py-1">Cheque Payment</label>
                          </li>
                          <li>
                              <input type="radio" id="Credit-Card" name="adfeature">
                              <label for="Credit-Card" class="font-weight-bold text-dark py-1">Credit Card</label>
                          </li>
                      </ul>
                  </div>
              </div>
          </fieldset>
          <!-- ad-feature start -->

          <!-- submit button -->
          <div class="checkbox d-inline-flex">
              <input type="checkbox" id="terms-&-condition" class="mt-1">
              <label for="terms-&-condition" class="ml-2">By click you must agree with our
                  <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting Rules.</a></span>
              </label>
          </div>
          <button type="submit" class="btn btn-primary d-block mt-2">Post Your Ad</button>
      </form>
  </div>
</section>
@endsection