<?php

if(isset($_POST['btnSacuvaj'])){
    $brojReda = $_POST['id'];
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];

    $file = fopen("../../data/studenti.txt", "r"); 
    $podaci = file("../../data/studenti.txt");
    fclose($file);

    // Brisemo sve vrednosti fajla i upisujemo nove!
    $noviSadrzajFajla = "";

    for($i = 0; $i < count($podaci); $i++){
        if($i == $brojReda){ // red za izmenu
            $student = explode("\t", $podaci[$i]);
            $indeks = trim($student[2]);
            $noviSadrzajFajla .= "{$ime}\t{$prezime}\t{$indeks}\n"; // nove vrednosti tog reda
        } else {
            $noviSadrzajFajla .= $podaci[$i]; // ostali redovi
        }
    }

    $file = fopen("../../data/studenti.txt", "w"); // "w" -> upisivanje ispocetka! prebrise sve i pise od 1. linije
    fwrite($file, $noviSadrzajFajla);
    fclose($file);

    header("Location: ../../zadatak.php");
}