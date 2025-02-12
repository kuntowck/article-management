<?php

namespace App\Entities;

class ArticleEntity
{
    private $id, $title, $content;

    public function __construct(array $data)
    {
        $this->id = $data['id'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->content = $data['content'] ?? '';
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}
