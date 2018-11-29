<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use LaravelDay\Article\UseCase\ListArticles\ListArticles;

class ListArticlesController extends Controller
{
    public function __invoke()
    {
        $listArticles = new ListArticles();
        $articles = $listArticles();

        return response()->json($articles);
        /*
        return response()->json([
            [
                'title' => 'Articolo 1',
                'body' => 'Questo è un articolo',
                'creationDate' => '2018-11-29 00:00:00'
            ]
        ]);
        */
    }
}
