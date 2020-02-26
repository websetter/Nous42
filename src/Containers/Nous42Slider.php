<?php

namespace Nous42\Containers;

use Plenty\Plugin\Templates\Twig;

class Nous42Slider
{
    public function call(Twig $twig):string
    {
        return $twig->render('Nous42::Components.Slider');
    }
}
