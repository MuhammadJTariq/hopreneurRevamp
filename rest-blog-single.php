<?php 

class RestSingle{
    private $title;
    private $description;
    private $content;

    private $debug = __DIR__ . '/debug.log';
    public static $slug;
    private $path = "https://hopreneur.com/cms/wp-json/wp/v2/posts?slug=";

    private $ipc;

    public function __construct(){
        $this->ipc = new Rest();
    }

    private function returnIntro($data, $category){
        $title = $data['title']['rendered'];
        $category = $category[0]['name'];

       return <<<HTML
        <div class="breadcrumb">
            <a href="/blog">Journal</a>
            <span class="sep">/</span>
            <a href="#">{$category}</a>
            <span class="sep">/</span>
            <span class="current">{$title}</span>
        </div>
        HTML;
    }

    public function content(){
        $data = $this->ipc->fetch($this->path, self::$slug);
        $values = $data[0];
        //$message = "This is the data for the single blog" . $values;
        //file_put_contents($this->debug, $message); // check for any errors
        $cat_id = $values['categories'][0];
        $category = $this->ipc->fetch($this->ipc->buildPath($cat_id, 1));
        //var_dump($category);
        echo $this->returnIntro($values, $category);
        echo $this->returnHero($values);



    }

    public function returnHero($values){
        return <<<HTML
        <section class="post-hero">
        <div class="post-hero-inner">

        <div class="post-hero-left">
            <div>
                <div class="post-meta-top">
                <!-- ✏️ EDIT: category, date -->
                <span class="post-category">AI & Automation</span>
                <span class="post-meta-sep"></span>
                <span class="post-date">December 12, 2024</span>
                </div>

                <!-- ✏️ EDIT: post title -->
                <h1 class="post-title">{$values['title']['rendered']}</h1>

                <!-- ✏️ EDIT: intro sentence / excerpt -->
                <p class="post-excerpt"> 
                    {$values['excerpt']['rendered']}
            </div>

            <div class="post-hero-footer">
                <div class="author-block">
                <!-- ✏️ EDIT: initials, name, title -->
                <div class="author-avatar">MK</div>
                <div>
                    <span class="author-name">Marcus Kim</span>
                    <span class="author-title-sm">Lead Engineer, Hopreneur</span>
                </div>
                </div>
                <div class="post-stats">
                <!-- ✏️ EDIT: read time, publish date -->
                <div class="post-stat">
                    <span class="post-stat-val">8 min</span>
                    <span class="post-stat-label">Read time</span>
                </div>
                <div class="post-stat">
                    <span class="post-stat-val">Dec '24</span>
                    <span class="post-stat-label">Published</span>
                </div>
                </div>
            </div>
            </div>



        HTML;
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