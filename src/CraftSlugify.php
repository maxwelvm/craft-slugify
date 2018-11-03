<?php


namespace Guilty\CraftSlugify;


use Cocur\Slugify\Bridge\Twig\SlugifyExtension;
use Cocur\Slugify\Slugify;
use Craft;
use craft\base\Plugin;

class CraftSlugify extends Plugin
{
    public function init()
    {
        parent::init();

        if (Craft::$app->request->getIsSiteRequest()) {
            $extension = new SlugifyExtension(Slugify::create());
            Craft::$app->view->registerTwigExtension($extension);
        }
    }

}