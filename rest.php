<?php 

Class Rest {
    private $debug = __DIR__ . '/debug.log';
    private $path = "https://hopreneur.com/cms/wp-json/wp/v2/posts/";
    private $find_post_id = "https://hopreneur.com/cms/wp-json/wp/v2/posts/";
    private $find_author_id = "https://hopreneur.com/cms/wp-json/wp/v2/users/";
    private $find_categories = "https://hopreneur.com/cms/wp-json/wp/v2/categories?post=";
    public $author_id;

    public $post_id;
    public function fetch($path, $id = null){
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

    private function getCategories($values){
        $categories = array();
    }

    private function getAuthor($values){
        $author = array();
    }

    public function getTitle(){

    }

    public function getExcerpt(){

    }

    public function __call($method, $args) {

    }


}



?>
