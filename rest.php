<?php 

Class Rest {
    private $path;
    private $method;
    public function __construct() {
        $this->path = "https://hopreneur.com/cms/wp-json/wp/v2/posts";
        $this->fetch();

    }

    public function fetch(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        } else {
            $data = json_decode($response, true);
            print_r($data);
            $this->clean($data);
        }
    }

    private function getCategories($values){
        $categories = array();
    }

    private function getAuthor($values){
        $author = array();
    }
    private function clean($data){
        $values = [];
        foreach($data as $item){
            if($item['status'] === "publish"){
                $values["id"] = $item['id'];
                $values['title'] = $item['title']['rendered'];
                $values['excerpt'] = $item['excerpt']['rendered'];
                //$values['categories'] = function to get the names
                //$values['author'] = function to get the name
            
            

            }
            
        }

        return $values;

    }

    public function __call($method, $args) {

    }


}



?>