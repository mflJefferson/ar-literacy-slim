<?php

use SlimSession\Helper;

return [

    \Slim\Views\PhpRenderer::class => DI\factory(function () {
        return new \Slim\Views\PhpRenderer(
            __DIR__ . "/../app/View"
        );
    }),

];
