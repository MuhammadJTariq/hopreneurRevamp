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
        //$category = $category[0]['name'];

       return <<<HTML
        <div class="breadcrumb">
            <a href="/blog">Journal</a>
            <span class="sep">/</span>
            <a href="#">Hello</a>
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
        $author_id = $this->ipc->fetch(($this->ipc->find_author_id), $values['author']);
        $name = $author_id['name'];
        //var_dump($author_id);
        //file_put_contents($this->debug, json_encode($author_id));
        $this->title = $values['title']['rendered'];
        $this->content = $values['content']['rendered'];
        $content = $values['content'];
        file_put_contents($this->debug, json_encode($content));
        $cat_id = $values['categories'][0];
        $category = $this->ipc->fetch($this->ipc->buildPath($cat_id, 1));
        $extras = [
            'author_name' => $name,
        ];
        $this->extractHeadings();
        //var_dump($category);
        echo $this->returnIntro($values, $category);
        echo $this->returnHero($values, $extras);



    }

    public function returnHero($values, $extras){
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
                <div class="post-excerpt">
                    {$values['excerpt']['rendered']}
                </div>
            </div>

            <div class="post-hero-footer">
                <div class="author-block">
                <!-- ✏️ EDIT: initials, name, title -->
                <div class="author-avatar">MK</div>
                <div>
                    <span class="author-name">{$extras['author_name']}</span>
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

    public function sidebar(){
        $headings = $this->extractHeadings();
        return <<<HTML
        <aside class="post-sidebar-left">
            <div class="toc-label">Contents</div>
            <!-- ✏️ EDIT: match h2/h3 IDs in your prose -->
            <ul class="toc-list" id="toc">
            <li><a href="#background">{$headings[0]}</a></li>
            <li><a href="#problem">The Problem We Were Solving</a></li>
            <li><a href="#architecture">Architecture Overview</a></li>
            <li class="toc-h3"><a href="#llm-selection">Choosing an LLM</a></li>
            <li class="toc-h3"><a href="#data-pipeline">The Data Pipeline</a></li>
            <li><a href="#integration">Integration Process</a></li>
            <li><a href="#pitfalls">Pitfalls We Hit</a></li>
            <li><a href="#results">Results & Numbers</a></li>
            <li><a href="#takeaways">Key Takeaways</a></li>
            </ul>

            <div class="sidebar-divider"></div>

            <div class="share-label">Share</div>
            <div class="share-buttons">
            <a href="#" class="share-btn"><span class="share-icon">𝕏</span> Twitter</a>
            <a href="#" class="share-btn"><span class="share-icon">in</span> LinkedIn</a>
            <a href="#" class="share-btn"><span class="share-icon">🔗</span> Copy link</a>
            </div>
        </aside>


        HTML;

    }

    private function extractHeadings() {
    $dom = new DOMDocument();

    // suppress HTML warnings
    libxml_use_internal_errors(true);

    $dom->loadHTML($this->content);

    libxml_clear_errors();

    $headings = [];
    $listElements = [];

    for ($i = 1; $i <= 3; $i++) {
        $tags = $dom->getElementsByTagName("h$i");

        foreach ($tags as $tag) {
            $headings[] = [
                'tag' => "h$i",
                'text' => trim($tag->textContent)
            ];
        }
    }
    $tags = $dom->getElementsByTagName('li');
    foreach($tags as $tag){
        $listElements[] = [
            'tagContent' => trim($tag->textContent),
        ];

    }
    file_put_contents($this->debug, json_encode($headings));
    file_put_contents($this->debug, json_encode($listElements));

    return $headings;

   /* <div class="callout">
        <span class="callout-icon">💡</span>
        <div>
          <div class="callout-label">Key insight</div>
          <p>When evaluating AI integration projects, the highest-ROI interventions are almost always the ones that automate <strong>high-frequency, low-judgement tasks</strong> — not the flashy "AI agents" that sound better in demos.</p>
        </div>
</div> return patterns for each element that fits */
}

}


?>