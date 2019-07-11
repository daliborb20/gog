<?php
include("klase/DomDocumentParser.php");




function pratiLinkove($url)
{
    $parser = new DomDocumentParser($url);

}



$pocetnUrl = "https://www.blic.rs/";
pratiLinkove($pocetnUrl);


?>
