<?php

if(isset($_POST['btnSacuvaj'])){
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];

    $brojIndeksa = 1;
    $godinaIndeksa = date("y");

    // ZADATAK: Broj indeksa se racuna: Indeks poslednjeg unetog studenta + 1

    // Citanje iz fajla
    $fileReadWrite = fopen("../../data/studenti.txt", "a+"); // "a" -> append na postojeci sadrzaj, "+" da bismo mogli i da citamo iz fajla

    $podaci = file("../../data/studenti.txt"); // niz REDOVA iz fajla

    // Provera da li postoje podaci u fajlu
    if(count($podaci) > 0){

        // Trazenje broja indeksa poslednjeg unetog studenta sa NAJVECIM indeksom /19 (trenutne godine)
        foreach($podaci as $podatak){

            $student = explode("\t", $podatak);
            $indeksStudenta = explode("/", $student[2]);
            $godina = trim($indeksStudenta[1]);// trim - zato sto "\n" pravi razmak na kraju reda

            // Ako je indeks studenta veci od trenutne vrednosti za broj indeksa
            if(($godina == $godinaIndeksa) && ($indeksStudenta[0] >= $brojIndeksa)){
                $brojIndeksa = ((int) $indeksStudenta[0]) + 1;
            }
        }
    }

    $indeks = $brojIndeksa."/".$godinaIndeksa;
    

    $podaciZaUnos = "{$ime}\t{$prezime}\t{$indeks}\n";

    // Upisivanje u fajl
    fwrite($fileReadWrite, $podaciZaUnos);
    fclose($fileReadWrite);

    header("Location: ../../zadatak.php");
}