<?php
class DomDocumentParser
{
    private $dok;
    public function __construct($url)//public -> moze se pozvati van klase
    {
     
        $opcije = [
            'http' => [
                'method'=>'GET', 'header' => 'User-Agent: doodleBot/0.1\n'
            ]
        ];

        $kontekst = stream_context_create($opcije);
        $this -> dok = new DomDocument();
        @$this -> dok -> loadHTML(file_get_contents($url, false, $kontekst));//supersing errors:D

    }
    public function pronadjiLinkove()
    {
        return $this -> dok -> getElementsByTagName("a");
    }

}


?>
