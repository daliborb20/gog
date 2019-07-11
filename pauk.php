<?php
include("klase/DomDocumentParser.php");




function pratiLinkove($url)
{
    $parser = new DomDocumentParser($url);
    $listaLinkova = $parser -> pronadjiLinkove();

    foreach($listaLinkova as $link)
    {
        $href = $link -> getAttribute("href");
        echo $href . "<br>";
    }

}



$pocetnUrl = "https://www.blic.rs/";
pratiLinkove($pocetnUrl);


?>
