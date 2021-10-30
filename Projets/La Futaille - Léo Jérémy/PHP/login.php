<?php
    $user = $_POST['userConnexion'];
    $mdp = $_POST['mdpConnexion'];
    if($bdd = mysqli_connect('localhost', 'root', '', 'lafutaillbdd')){
        $rep = mysqli_query($bdd, 'SELECT userConnexion FROM connexion WHERE connexion IS NOT NULL');
        $nb = mysqli_num_rows($rep);
        echo "TU VAS MARCHER" . $nb;
    }
    else{
        echo "marche po";
    }
        










?>