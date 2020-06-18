<?php
namespace Grav\Plugin;

use Composer\Autoload\ClassLoader;
use Grav\Common\Plugin;

/**
 * Class CustomTemplatesPlugin
 * @package Grav\Plugin
 */
class CustomTemplatesPlugin extends Plugin
{
    /**
     * @return array
     *
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => [
                ['autoload', 100000], // TODO: Remove when plugin requires Grav >=1.7
                ['onPluginsInitialized', 0]
            ]
        ];
    }

    /**
    * Composer autoload.
    *
    * @return ClassLoader
    */
    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    /**
     * Initialize the plugin
     * 
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        $default = 100;
        $priority = $this->config->get('plugins.custom-templates.priority', $default);

        if (!is_numeric($priority)) {
            $priority = $default;
        }

        $this->enable([
		    'onTwigTemplatePaths' => ['onTwigTemplatePaths', abs($priority)]
        ]);

    }

    /**
     * Add data/templates directory to Twig lookup paths
     *
     */
    public function onTwigTemplatePaths()
    {
                
        $user_path = $this->grav['locator']->findResource('user://');
        $templates_dir = '/data/templates';
        $templates_path = $user_path . $templates_dir;

        // If the location for custom templates does not exist create it
        if (!file_exists($templates_path)) {
            mkdir($templates_path, 0775, true);
        }

        // Get the priority
        $priority = $this->config->get('plugins.custom-templates.priority', 100);

        // Add local templates folder to the Twig templates search path
        if (!is_numeric($priority) && strtolower($priority) == 'top') {
            array_unshift($this->grav['twig']->twig_paths, $templates_path);
        }
        else {
            $this->grav['twig']->twig_paths[] = $templates_path;
        }

    }

}
