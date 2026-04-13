<?php 

Class Rest {
    private $debug = __DIR__ . '/debug.log';
    private $path = "https://hopreneur.com/cms/wp-json/wp/v2/posts/";
    private $pathLimit = "https://hopreneur.com/cms/wp-json/wp/v2/posts?";
    private $find_post_id = "https://hopreneur.com/cms/wp-json/wp/v2/posts/";
    private $find_author_id = "https://hopreneur.com/cms/wp-json/wp/v2/users/";
    private $find_categories = "https://hopreneur.com/cms/wp-json/wp/v2/categories?post=";
    private $all_categories = "https://hopreneur.com/cms/wp-json/wp/v2/categories";

    public $author_id;

    public $post_id;
    public static function fetch($path, $id = null){
        $data = null;

        if($id){
            $path .= $id;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        } else {
            $data = json_decode($response, true);
        }

        curl_close($ch);

        return $data;
    }

    public function returnCat($id){
        $data = $this->fetch($this->find_categories, $id);
        return $data[0]['name'];
    }

    public function returnHead(){
    $data = $this->fetch($this->pathLimit, 'per_page=3');

    foreach($data as $post){
        $this->post_id = $post['id'];

        $title = $post['title']['rendered'];
        $excerpt = $post['excerpt']['rendered'];
        $slug = $post['slug'];

        $this->author_id = $post['author'];
        $author_name = $this->returnRecentAuthor();

        $date = !empty($post['date']) 
            ? date('F j, Y', strtotime($post['date'])) 
            : '';
        $cat_name = $this->returnCat($this->post_id);

        $array_values = [
            'id' => $post['id'],
            'title' => $title,
            'excerpt' => $excerpt,
            'author_name' => $author_name,
            'date' => $date,
            'category' => $cat_name,
            'slug' => $slug,
        ];

        echo $this->format($array_values);
    }
}

   private function format(array $data)
{
    return <<<HTML
<a href="blog/{$data['slug']}" class="post-card fade-up">
    <div class="post-card-thumb" data-id="{$data['id']}">
        <div class="post-card-thumb-grid"></div>
        <div class="post-card-thumb-glow"></div>

        <div class="post-thumb-placeholder">UX</div>
        <span class="post-cat-tag">{$data['category']}</span>
    </div>

    <div class="post-card-body">
        <div class="post-card-meta">
            <span>Nov 28, 2024</span>
            <div class="dot"></div>
            <span>6 min read</span>
        </div>

        <h3>{$data['title']}</h3>
        <p>{$data['excerpt']}</p>

        <div class="post-card-footer">
            <div class="post-author-sm">
                <div class="post-avatar-sm">SR</div>
                <span>{$data['author_name']}</span>
            </div>
            <span class="post-arrow">→</span>
        </div>
    </div>
</a>
HTML;
}
    public function returnRecentAuthor(){
        $author = $this->fetch($this->find_author_id, $this->author_id);
        $name = $author['name'];
        //file_put_contents($this->debug, $author);
        return $name;


    }


    public  function getRecent(){
        $values = $this->fetch($this->path, "?per_page=1");
        $post = is_array($values) && isset($values[0]) ? $values[0] : null;

        if (!$post) {
            return '';
        }

        $postId = $post['id'] ?? '';
        $title = $post['title']['rendered'] ?? '';
        $excerpt = $post['excerpt']['rendered'] ?? '';
        $date = !empty($post['date']) ? date('F j, Y', strtotime($post['date'])) : '';
        $this->author_id = $post['author'];
        $this->post_id = $postId;

        return "
        <div class=\"featured-content\" data-id=\"{$postId}\">
          <div>
            <div class=\"featured-meta\">
              <span class=\"meta-label cat\">Latest Post</span>
              <span class=\"meta-sep\"></span>
              <span class=\"meta-label date\">{$date}</span>
            </div>
            <h2>{$title}</h2>
            <p>
              {$excerpt}
            </p>
          </div>
        </div>
        ";



    }

  private function returnCatNames(){
        $ids = [];
        $values = $this->fetch($this->all_categories);
        foreach ($values as $val){
            if($val['name'] === 'Development'){
                $ids[] = $val['id'];
                
            }
            if($val['name'] === 'Strategy'){
                $ids[] = $val['id'];
            }

        }

        return $ids;
        
    }

    public function returnTail(){
        $ids = $this->returnCatNames();
        $development = $this->fetch($this->buildPath($ids[0], 2));
        $strategy = $this->fetch($this->buildPath($ids[1], 1));
        foreach ($development as $dev){
            echo $this->buildtail($dev);
        }
        foreach ($strategy as $strat){
            echo $this->buildtail($strat);
        }
    }

    private function buildtail($values){
        $date = !empty($values['date']) 
            ? date('F j, Y', strtotime($values['date'])) 
            : '';
    return <<<HTML
    <a href="blog/{$values['slug']}" class="post-row fade-up">
      <div class="post-row-thumb">
        <div class="post-row-thumb-grid"></div>
        <div class="post-row-thumb-val">BR</div>
      </div>
      <div class="post-row-body">
        <div class="post-row-meta">
          <span class="cat" data-id="{$values['id']}">Development</span>
          <span>·</span>
          <span>$date</span>
        </div>
        <h3>{$values['title']['rendered']}</h3>
        <p>{$values['excerpt']['rendered']}
        </p>
      </div>
      <div class="post-row-right">
        <span class="read-time">4 min read</span>
        <span class="read-link">Read →</span>
      </div>
</a>
HTML;
    }

    private function buildPath($cat_num, $per_page) {
    return sprintf(
        "https://hopreneur.com/cms/wp-json/wp/v2/posts?categories=%d&per_page=%d",
        $cat_num,
        $per_page
    );
}


}



?>
