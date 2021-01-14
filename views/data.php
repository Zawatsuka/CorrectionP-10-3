<div class="container mt-5">
    <div class="row">
        <div class="col-12 p-3">
            <img src="assets\img\ty.gif" alt="merci" class="img-fluid mt-5" width="1000">
            <h3 class="mt-5 text-center">Bonjour <?= $firstname . " ". $name ?></h3>
            <p class="text-center mt-5">Recapitulatif du formulaire ...</p>
            <ul class="text-center">
                <li class="mt-3">Vous avez <?= $age ;?> ans</li>
                <li class="mt-3"><?php 
                        if($gender == "Homme"){
                            echo "vous etes un ".$gender;
                        } else if($gender == "Femme"){
                            echo "vous etes une ".$gender;
                        } else if($gender == "GreyMan") {
                            echo "vous avez mis ".$gender;
                        } else{
                            echo "vous n'avez rien mis";
                        }
                ?>
                </li class="mt-3">
                <li class="mt-3">Et vous venez de la société : <?= $company;?> </li>
            </ul>
        </div>
    </div>

</div>