<?php
class Thesaurus
{
    private $thesaurus;
    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }
    public function getSynonyms($word)
    {
        $synonims = (!empty($this->thesaurus[$word]) ? $this->thesaurus[$word] : array());
        return json_encode(array('word'=>$word, 'synonyms'=>$synonims));
    }
}
$thesaurus = new Thesaurus(
    array 
        (
            "buy" => array("purchase"),
            "big" => array("great", "large")
	)
); 
echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("buy");
echo "\n";
echo $thesaurus->getSynonyms("agelast");


<?php
class Thesaurus
{
    private $thesaurus;
    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }
    public function getSynonyms($word)
    {
        {
   return json_encode(["word" => $word, "synonyms" => $this->thesaurus[$word] ?? []]);
}
    }
}
$thesaurus = new Thesaurus(
    array 
        (
            "buy" => array("purchase"),
            "big" => array("great", "large")
	)
); 
echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("buy");
echo "\n";
echo $thesaurus->getSynonyms("agelast");