<?php

if(isset($_GET['id'])){
    $brojReda = $_GET['id'];
    
    $file = fopen("../../data/studenti.txt", "r"); 
    $podaci = file("../../data/studenti.txt");
    fclose($file);

    // Brisemo sve vrednosti fajla i upisujemo nove!
    $noviSadrzajFajla = "";

    for($i = 0; $i < count($podaci); $i++){
        if($i != $brojReda){
            $noviSadrzajFajla .= $podaci[$i];
        }
    }

    $file = fopen("../../data/studenti.txt", "w"); // "w" -> upisivanje ispocetka! prebrise sve i pise od 1. linije
    fwrite($file, $noviSadrzajFajla);
    fclose($file);

    header("Location: ../../zadatak.php");
}