<?php


namespace Guilty\CraftSlugify;


use Cocur\Slugify\Bridge\Twig\SlugifyExtension;
use Cocur\Slugify\Slugify;
use Craft;
use craft\base\Plugin;

class CraftSlugify extends Plugin
{

     /**
     * To execute your plugin’s migrations, you’ll need to increase its schema version.
     *
     * @var string
     */
    public string $schemaVersion = '2.0.0';

    /**
     * Set to `true` if the plugin should have a settings view in the control panel.
     *
     * @var bool
     */
    public bool $hasCpSettings = false;

    /**
     * Set to `true` if the plugin should have its own section (main nav item) in the control panel.
     *
     * @var bool
     */
    public bool $hasCpSection = false;

    public function init()
    {
        parent::init();

        if (Craft::$app->request->getIsSiteRequest()) {
            $extension = new SlugifyExtension(Slugify::create());
            Craft::$app->view->registerTwigExtension($extension);
        }
    }

}