
@extends("/default")


@section('titre')
Ingrédients
@endsection

@section('content')
  <div class="col-xs-offset-2 col-xs-8">

  <table class="greyGridTable marge_Top">
     <thead> <!-- En-tête du tableau -->
         <tr>
             <th>Materiel</th>
             <th>Nom</th>
             <th>Nombre</th>
             <th>Supprimer</th>
             <th>Ajouter</th>
         </tr>
     </thead>

     <tbody> <!-- Corps du tableau -->
       <tr>
           <td><img class="café" src="images/vue2-assets/eau.png"></td>
           <td><img class="title" src="images/Titreeau.png"></td>
           <td><h3>3901</h3></td>
           <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
           <td><button type="button" class="btnAjout">AJOUTER</button></td>
       </tr>
       <tr>
           <td><img class="café" src="images/vue2-assets/cafe.png"></td>
           <td><img class="title" src="images/TitreCafe.png"></td>
           <td><h3>3901</h3></td>
           <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
           <td><button type="button" class="btnAjout">AJOUTER</button></td>
       </tr>
       <tr>
           <td><img class="café" src="images/vue2-assets/chocolat.png"></td>
           <td><img class="title" src="images/Titrechocolat.png"></td>
           <td><h3>3901</h3></td>
           <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
           <td><button type="button" class="btnAjout">AJOUTER</button></td>
       </tr>
       <tr>
           <td><img class="café" src="images/vue2-assets/lait.png"></td>
           <td><img class="title" src="images/Titrelait.png"></td>
           <td><h3>3901</h3></td>
           <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
           <td><button type="button" class="btnAjout">AJOUTER</button></td>
       </tr>
       <tr>
           <td><img class="café" src="images/vue2-assets/the.png"></td>
           <td><img class="title" src="images/Titrethe.png"></td>
           <td><h3>3901</h3></td>
           <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
           <td><button type="button" class="btnAjout">AJOUTER</button></td>
       </tr>

     </tbody>
  </table>
</div>

<!-- 
  <div class="col-xs-8 marge_Top">
         <div class="container-fluid text-center">
          <div class="col-xs-offset-1 col-xs-8">


              <div class="row ingr">
                  <div class="row"><img class="title" src="images/TitreCafe.png">
                  </div>
                  <div id="café"><h3>3799</h3></div>
                  <img class="café" src="images/vue2-assets/cafe.png">
              </div>

                <div class="row ingr">
                  <div class="row"><img class="title" src="images/Titrechocolat.png">
                  </div>
                  <div id="chocolat"><h3>99936</h3></div>
                  <img class="chocolat" src="images/vue2-assets/chocolat.png">
              </div>

                <div class="row ingr">
                  <div class="row"><img class="title" src="images/Titrelait.png">
                  </div>
                  <div id="lait"><h3>23</h3></div>
                  <img class="lait" src="images/vue2-assets/lait.png">
              </div>

                <div class="row ingr">
                  <div class="row"><img class="title" src="images/Titrethe.png">
                  </div>
                  <div id="thé"><h3>69</h3></div>
                  <img class="thé" src="images/vue2-assets/the.png">
              </div>

          <br><br>

          </div>

      <div class="col-xs-offset-1 col-xs-2">
        <div class="row">
            <div class="row"><img class="title" src="images/Titreeau.png">
            </div>
            <div id="eau"><h3>816</h3></div>
            <img class="eau" src="images/vue2-assets/eau.png">
        </div>

      </div> -->
  <!--
          <div class="row">
              <img class="title" src="images/Titre.png">
          </div>
          <div class="row">
             <div id="eau">
             </div>
             <img src="images/vue2-assets/EAU.png">
         </div>    -->
     </div>
  </div>
  </div>
@endsection
