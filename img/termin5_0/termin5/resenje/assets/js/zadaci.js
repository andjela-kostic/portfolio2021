$(document).ready(function(){
    let zadaci = [
        "<b>FUNKCIJE:</b> - <b style='color:red'><a href='https://www.php.net/manual/en/function.fopen.php' target='_blank'>fopen()</a></b> - otvaranje fajla, <b style='color:red'><a href='https://www.php.net/manual/en/function.file.php' target='_blank'>file()</a></b> - citanje iza fajla, <b style='color:red'><a href='https://www.php.net/manual/en/function.fwrite.php' target='_blank'>fwrite()</a></b>, <b style='color:red'><a href='https://www.php.net/manual/en/function.fclose.php' target='_blank'>fclose()</a></b>",
        "<b>KORAK 1 - UPIS U FAJL (forma.php)</b> - Upisati podatke o novom studentu u tekstualni fajl <b>studenti.txt</b>. Podaci: Ime, prezime i broj indeksa.",
        "<b style='color:red'>Broj indeksa se generise na sledeci nacin: Za 1 veci broj od najveceg broja indeksa u <u>tekucoj godini</u>.</b>",
        "<b>KORAK 2 - PRIKAZ IZ FAJLA (zadatak.php)</b> - Na stranici &quot;zadatak.php&quot; prikazati studente iz fajla u skladu sa template-om.",
        "<b>KORAK 3 - BRISANJE IZ FAJLA (delete.php)</b> - Klikom na link &quot;Obrisi&qupot; obrisati studenta iz fajla.",
        "<b style='color:red'>POMOC: Izcitati redove iz fajla. Prebrisati sadrzaj fajla i upisati sve redove sem izabranog za brisanje.</b>",
        "<b>KORAK 4 - IZMENA IZ FAJLA (forma.php)</b> - Klikom na link &quot;Izmeni&qupot;, izmeniti podatke o studentu iz fajla.",
        "<b style='color:red'>POMOC: Izcitati redove iz fajla. Prebrisati sadrzaj fajla i ponovo upisati sve redove uz promenu podataka u redu za izmenu.</b>",
    ];

    let ispis = "";
    for(let zadatak of zadaci){
        ispis += `<tr>
        <td>
          <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
            <span class="form-check-sign">
            <span class="check"></span>
            </span>
          </label>
          </div>
        </td>
        <td>${ zadatak }</td>
      </tr>`;
    }

    $("#zadaci_tabela").html(ispis);
})