@extends('classimax/auth/auth_layout')
@section('auth_content')
<section class="ad-post bg-gray py-5">
  <div class="container">
      <form action="{{ route('Ads.store') }}" method="POST" enctype="multipart/form-data">
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
                          <textarea name="description"  id="" class="border p-3 w-100" rows="7" placeholder="Decrivez votre annonce "></textarea>
                      </div>
                      <div class="col-lg-6">
                          <h6 class="font-weight-bold pt-4 pb-1">Sélectionnez la catégorie de votre annonce:</h6>
                          <select name="categorie" id="inputGroupSelect" class="w-100">
                              <option value="1">Aucune categorie selectionnée </option>
                              <option value="2">Prestation de service</option>
                              <option value="3">Immobilier</option>
                              <option value="4">Mode et vêtement</option>
                              <option value="5">animaux domestiques</option>
                              <option value="6">Autres</option>
                          </select>
                          <div class="price">
                              <h6 class="font-weight-bold pt-4 pb-1">Prix ​​de l'article (Euros &euro;):</h6>
                              <div class="row px-3">
                                  <div class="col-lg-12 mr-lg-12 pl-0 bg-white my-2 ">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">&euro;</div>
                                        <input type="number" name="price" class="border-0 pl-2 py-2 w-100 price" placeholder=" Prix" id="price">
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
                                  <span class="d-block font-weight-bold text-dark">Veillez respecter notre politique d'upload de fichiers: </span>
                                  <span class="d-block btn btn-danger text-white my-3 select-files disabled" style="cursor: not-allowed"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Taille maximale des images: 500 KB</span>
                                  
                              </label>
                          </div>
                      </div>
                      <div class="my_caroussel input-images choose-file" >
                      </div>
                  </div>
          </fieldset>
          <!-- Post Your ad end -->

          <!-- seller-information start -->
         

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