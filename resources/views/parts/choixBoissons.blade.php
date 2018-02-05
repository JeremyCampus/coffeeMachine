<div class="container text-left tis_Container">
        <div class="row">
            <div class="col-md-7">
              @foreach ($boissons as $boisson)
                <?php $text=str_replace(' ','', $boisson->LIBELLE); ?>
                <div id="{{$text}}" href="{{$boisson->PRIX}}" class="choix">
                  <h3>{{$boisson->LIBELLE}}</h3><h4> {{$boisson->PRIX/100}}</h4>
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
