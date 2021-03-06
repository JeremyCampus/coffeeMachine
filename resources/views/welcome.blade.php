@extends("/default")


@section('titre')
  Ma machine à Café
@endsection

@include('parts/gestionStockBdd')


@section('content')

  @include('parts/sucres')
  <div class="container text-left tis_Container">
          <div class="row">
              <div class="col-md-7">
                @foreach ($boissons as $boisson)
                  <?php $text=str_replace(' ','', $boisson->libelle); ?>
                  <div id="{{$text}}" href="{{$boisson->prix}}" class="choix">
                    <h3>{{$boisson->libelle}}</h3><h4> {{$boisson->prix/100}}</h4>
                  </div>
                 @endforeach

              <form class="" action="/maBoisson" method="post">
                {{ csrf_field() }}
                  <input type="hidden" id="prix" name="prix" value="">
                  <input type="hidden" id="id" name="id" value="">
                  <input type="hidden" id="monnaieMise" name="monnaieMise" value="0">
                  <input type="hidden" id="sucrePourPHP" name="sucrePourPHP" value="0">
                  <input type="submit" id="valid" name="submit" class="btn-style btn" value="Valider">
              </form>
              </div>
          </div>
      </div>
  {{-- @include('parts/maBoisson') --}}
  @include('parts/pieces')

@endsection
