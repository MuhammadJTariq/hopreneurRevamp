<?php 
/*require './rest.php'; */
class RestSingle{
    private $title;
    private $description;

    private $content;

    private function content(){
        
    }

    private function sidebar(){

    }

    private function extractHeadings($html) {
    $dom = new DOMDocument();

    // suppress HTML warnings
    libxml_use_internal_errors(true);

    $dom->loadHTML($html);

    libxml_clear_errors();

    $headings = [];

    for ($i = 1; $i <= 2; $i++) {
        $tags = $dom->getElementsByTagName("h$i");

        foreach ($tags as $tag) {
            $headings[] = [
                'tag' => "h$i",
                'text' => trim($tag->textContent)
            ];
        }
    }

    return $headings;
}

}


?>