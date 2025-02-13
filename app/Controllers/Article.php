<?php

namespace App\Controllers;

use App\Entities\ArticleEntity;
use App\Models\ArticleModel;

class Article extends BaseController
{
    private $articleModel;

    public function __construct()
    {
        helper('text');
        $this->articleModel = new ArticleModel();
    }

    public function index()
    {
        $articles = $this->articleModel->getAllArticles();

        return view('article/index', ['articles' => $articles]);
    }

    public function detail($id)
    {
        $article = $this->articleModel->getArticleById($id);

        return view('article/detail', ['article' => $article]);
    }

    public function detailBySlug($slug)
    {
        $article = $this->articleModel->getArticleBySlug($slug);

        return view('article/detail', ['article' => $article]);
    }

    public function create()
    {
        return view('article/create');
    }

    public function store()
    {
        $dataArticle = $this->request->getPost();
        $dataArticle['slug'] = generateSlug($dataArticle['title']);
        $article = new ArticleEntity($dataArticle);
        $this->articleModel->addArticle($article);

        return redirect()->to('/article');
    }

    public function edit($id)
    {
        $article = $this->articleModel->getArticleById($id);

        return view('article/update', ["article" => $article]);
    }

    public function update()
    {
        $dataArticle = $this->request->getPost();
        $dataArticle['slug'] = generateSlug($dataArticle['title']);
        $updatedArticle = new ArticleEntity($dataArticle);
        $this->articleModel->updateArticle($updatedArticle);

        return redirect()->to('/article');
    }

    public function delete($id)
    {
        $this->articleModel->deleteArticle($id);

        return redirect()->to('/article');
    }
}
