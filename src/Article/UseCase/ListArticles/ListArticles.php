<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: gianluca.dacosta
 * Date: 11/29/2018
 * Time: 3:02 PM.
 */

namespace LaravelDay\Article\UseCase\ListArticles;

class ListArticles
{
    public function __invoke(): array
    {
        return [
            [
                'title' => 'Articolo 1',
                'body' => 'Questo è un articolo',
                'creationDate' => '2018-11-29 00:00:00',
            ],
        ];
    }
}
