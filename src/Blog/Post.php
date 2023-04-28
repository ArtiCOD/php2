<?php

namespace Geekbrains\Blog;

use Geekbrains\Person\Person;


class Post
{
    private int $id;
    private Person $author;
    private string $text;

    public function __construct(int $id, Person $author, string $text){
        $this->id = $id;
        $this->text = $text;
        $this->author = $author;
    } 

    public function __toString(){
        return $this->author . 'пишет : ' . $this->text;
    }

}