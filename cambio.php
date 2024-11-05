<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CAMBIO</title>
    </head>
    <body>
    <style>
        .stileTabella {
            border: black, solid, 2px;
            border-collapse: collapse;
            text-align: center;
        }
        .stileTitolo {
            background-color: red;
            text-align: center;
        }
        .stileImmagini {
            width: 60px;
            height: 25px;
        }

    </style>
    <?php
        function stampaTabella ($cambio, $importoEuro, $valutaDiArrivo) {
            $importoEuroIntero = intval($importoEuro);
            $importoEuroIntero = round($importoEuroIntero, 2);
            $giorno = date("D");
            if ($giorno == "Sat" or $giorno =="Sun") {
                $commissioni = ($importoEuroIntero/100) * 5;
                $strCommissioni = "Commissione maggiorata";
            } else {
                $commissioni = ($importoEuroIntero/100) * 2.5;
                $strCommissioni = "Commissione non maggiorata";
            }
            $commissioni = round($commissioni, 2);
            if ($giorno == "Mon") {
                $giornoInItaliano = "Lunedì";
            } else if ($giorno == "Tue") {
                $giornoInItaliano = "Martedì";
            } else if ($giorno == "Wed") {
                $giornoInItaliano = "Mercoledì";
            } else if ($giorno == "Thu") {
                $giornoInItaliano = "Giovedì";
            } else if ($giorno == "Fri") {
                $giornoInItaliano = "Venerdì";
            } else if ($giorno == "Sat") {
                $giornoInItaliano = "Sabato";
            } else {
                $giornoInItaliano = "Domenica";
            }
            $importoArrivoSenzaCommissioni = $importoEuroIntero * $cambio["$valutaDiArrivo"];
            if ($valutaDiArrivo == "dollaro") {
                $strImmagineDiArrivo = "<img class='stileImmagini' src='.\immagini\us-flag.gif'>";
            } else if ($valutaDiArrivo == "yen") {
                $strImmagineDiArrivo = "<img class='stileImmagini' src='.\immagini\ja-flag.gif'>";
            } else if ($valutaDiArrivo == "francoSvizzero") {
                $strImmagineDiArrivo = "<img class='stileImmagini' src='.\immagini\sz-flag.gif'>";
            } else {
                $strImmagineDiArrivo = "<img class='stileImmagini' src='.\immagini\uk-flag.gif'>";
            }
            $importoTotale = $importoArrivoSenzaCommissioni + $commissioni;
            $importoTotale = round($importoTotale, 2);

            $data = date("d-m-Y");
            echo "<table class='stileTabella'>";
            echo "<tr><th class='stileTabella'>Data</th> <th class='stileTabella'>Giorno</th></th> <th class='stileTabella'>Importo in €</th>
            <th class='stileTabella'>Importo di arrivo senza le commissioni</th> <th class='stileTabella'>Commissioni in €</th>
            <th class='stileTabella'>Importo totale</th> </tr>";
            echo "<tr><td class='stileTabella'>$data</td> <td class='stileTabella'>$giornoInItaliano</td>
            <td class='stileTabella'>$importoEuroIntero<br><img class='stileImmagini' src='./immagini/it-flag.gif'></td>
            <td class='stileTabella'>$importoArrivoSenzaCommissioni <br> $strImmagineDiArrivo</td> 
            <td class='stileTabella'>$commissioni <br> $strCommissioni</td> <td style='stileTabella'>$importoTotale</td></tr>";
            echo "</table>";
        }

        $cambio = array("dollaro" => 1.06, "yen" => 165.58, "francoSvizzero" => 0.94, "sterlina" => 0.84);
        $importoEuro = $_GET["euro"];
        $valutaDiArrivo = $_GET["valutaDiArrivo"];
        echo "<h1 class='stileTitolo'>RISULTATI CONVERSIONE</h1>";
        stampaTabella ($cambio, $importoEuro, $valutaDiArrivo);
        echo "<a href='valuta.html'>Ritorna alla pagina precedente</a>";
    ?>
        
    </body>
</html>
