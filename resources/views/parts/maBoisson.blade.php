
    <!-- maBoissons -->
    <div class="container text-left tis_Container">
            <div class="row">
                <div id="monGobelet" class="col-sm-4 col-sm-push-6 fixed-bottom">
                    <img id="imgGobelet" class="imgBoisson" src="images/Gobelet.png"/>
                </div>
                <div id="maBoisson" class="col-sm-4 col-sm-push-6 fixed-bottom">
                <?php
                         if(isset($valide)) {
                            $majId = ucwords($id);
                            echo $majId;

                            echo '<img id="imgBoisson'.$majId.' " class="imgBoisson visible" src="images/'. $id .'.png"/>';
                        }
                ?>
                    <img id="imgBoissonCaféaulait" class="imgBoisson" src="images/Caféaulait.png"/>
                    <img id="imgBoissonCappuccino" class="imgBoisson" src="images/cappuccino.png"/>
                    <img id="imgBoissonChocolatIntense" class="imgBoisson" src="images/chocolatIntense.png"/>
                    <img id="imgBoissonThé" class="imgBoisson" src="images/thé.png"/>
                    <img id="imgBoissonCaféLong" class="imgBoisson" src="images/Caféaulait.png"/>
                </div>
                <div id="zoneSucres" class="col-sm-5 col-sm-push-7 col-md-2 col-md-push-8  fixed-bottom">
                <?php
                if(isset($valide))
                {
                    if($nbSucre>0){
                        for($i = 0; $i < $nbSucre ; $i++)
                        {
                            echo  "<img class='img-responsive sucres sucresBoisson' src='images/monSucre.png'/>";
                        }
                    }
                }
                ?>
                </div>
                <div id="zoneTouillette" class="col-xs-2 col-xs-push-7 fixed-bottom">

                <?php
                 if(isset($valide))
                 { if($nbSucre>0){ ?>
                    <img id="imgTouillette" class="imgBoisson visible" src="images/touillette.png"/>
                <?php
                }else{
                ?>
                    <img id="imgTouillette" class="imgBoisson" src="images/touillette.png"/>
                <?php
                }
            }
                ?>
                    </div>
            </div>
        </div>
    <!-- End maBoissons -->
