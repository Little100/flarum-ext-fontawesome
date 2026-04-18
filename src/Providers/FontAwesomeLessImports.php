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

namespace Little100\FontAwesome\Providers;

use Flarum\Foundation\AbstractServiceProvider;

/**
 * FontAwesomePreloads has been removed in the FA7 upgrade.
 * Font Awesome 7 Free is loaded via CDN, so no local font preloading is needed.
 * Font Awesome 7 Kit (Pro/Free) loads fonts via JavaScript, so no preloading is needed either.
 */
class FontAwesomeLessImports extends AbstractServiceProvider
{
    public function register(): void
    {
    }
}
