<?php namespace Luna\MaterialTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class MaterialThemeServiceProvider extends AddonServiceProvider
{

    protected $plugins = [];

    protected $commands = [];

    protected $routes = [];

    protected $middleware = [];

    protected $listeners = [];

    protected $aliases = [];

    protected $bindings = [];

    protected $providers = [];

    protected $singletons = [];

    protected $overrides = [
        'anomaly.module.posts::categories/index' => 'theme::partials/categories/index',
        'anomaly.module.posts::tags/index' => 'theme::partials/tags/index',
        'anomaly.module.posts::posts/index' => 'theme::partials/posts/index',
    ];

    protected $mobile = [];

    public function register()
    {
    }

    public function map()
    {
    }

}
