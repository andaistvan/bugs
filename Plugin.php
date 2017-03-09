<?php namespace Arteriaweb\Bugs;

use Backend;
use System\Classes\PluginBase;

/**
 * Bugs Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Bugs',
            'description' => 'eledelallat.hu proba...',
            'author'      => 'Arteriaweb',
            'icon'        => 'icon-bug'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Arteriaweb\Bugs\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'arteriaweb.bugs.some_permission' => [
                'tab' => 'Bugs',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'bugs' => [
                'label'       => 'Bugs',
                'url'         => Backend::url('arteriaweb/bugs/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['arteriaweb.bugs.*'],
                'order'       => 500,
            ],
        ];
    }
}
