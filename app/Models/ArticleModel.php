<?php

namespace App\Models;

use App\Entities\ArticleEntity;
use CodeIgniter\Model;

class ArticleModel extends Model
{
    private $articles = [], $session;

    public function __construct()
    {
        $this->session = session();
        $this->articles = $this->session->get('articles') ?? [];
    }

    private function saveData()
    {
        $this->session->set('articles', $this->articles);
    }

    public function getAllArticles()
    {
        return $this->articles;
    }

    public function getArticleById($id)
    {
        foreach ($this->articles as $article) {
            if ($article->getId() === $id) {
                return $article;
            }
        }
    }

    public function addArticle(ArticleEntity $dataArticle)
    {
        $this->articles[] =  $dataArticle;
        $this->saveData();
    }

    public function updateArticle(ArticleEntity $dataArticle)
    {
        foreach ($this->articles as $key => $article) {
            if ($article->getId() === $dataArticle->getId()) {
                $this->articles[$key] = $dataArticle;
                $this->saveData();
            }
        }
    }

    public function deleteArticle($id)
    {
        foreach ($this->articles as $key => $article) {
            if ($article->getId() === $id) {
                unset($this->articles[$key]);
                $this->saveData();
            }
        }
    }
}
