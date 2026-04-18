<?php

/*
 * This file is part of little100/fontawesome.
 *
 *  Copyright (c) 2025 little100.
 *
 *  For the full copyright and license information, please view the LICENSE.md
 *  file that was distributed with this source code.
 *
 */

namespace Little100\FontAwesome;

use Little100\FontAwesome\Content\Frontend;
use Little100\FontAwesome\Providers\FontAwesomePreloads;
use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->content(Frontend::class),

    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->content(Frontend::class),

    new Extend\Locales(__DIR__.'/locale'),

    (new Extend\ServiceProvider())
        ->register(FontAwesomePreloads::class),

    (new Extend\Settings())
        ->default('little100-fontawesome.kitUrl', '')
        ->default('little100-fontawesome.type', 'free'),
];
