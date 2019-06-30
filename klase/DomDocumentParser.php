<?php
class DomDocumentParser
{
    private $dok;
    public function __construct ($url)
    {
        $opcije = array("http" => array('method' => "GET", 'header' => "User-Agent: doodlBot/0.1\n")
        );
        $kontext = stream_context_create($opcije);
        $dok = new DomDocument();
        @$dok ->loadHTML(file_get_contents($url, false, $kontext));
    } 
}



?>
