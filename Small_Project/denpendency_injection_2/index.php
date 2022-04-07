<?php
require_once "vendor/autoload.php";

use app\post\Post;
use app\author\Author;


class Index{
    public function __construct(){
        $fname = "wai";
        $lname = "colar";
        $content = "This is the ice cool .";

        $author = new Author($fname, $lname);
        
        $post = new Post($author, $content);
        $this->answerOut($post);
    }

    public function answerOut(Post $post){
        $author = $post->getAuthor();
        // $content = $post->getContent();
        echo $author->getFirstName();
        echo " ";
        echo $author->getLastName();
        echo "<br/>";
        // echo $content->getContent();
        // echo $content;
    }
}

new Index();