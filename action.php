<?php

require_once 'vendor/autoload.php';

use App\classes\News;
use App\classes\Category;



if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'all-news')
    {
        $category = new Category();
        $categories = $category->category();
        $news = new News();
        $news_a = $news->index();
        include 'pages/allNews.php';
    }elseif ($_GET['pages'] == 'category-news')
    {
        $category = new Category();
        $categories = $category->category();
        $news = new News();
        $news_a = $news->shortNews($_GET['category_id']);
        include 'pages/allNews.php';
    }
}