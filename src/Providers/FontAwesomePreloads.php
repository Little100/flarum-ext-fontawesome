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
use Flarum\Settings\SettingsRepositoryInterface;

class FontAwesomePreloads extends AbstractServiceProvider
{
    public function boot(SettingsRepositoryInterface $settings): void
    {
        $this->container->extend('flarum.frontend.default_preloads', function (array $preloads) use ($settings) {
            $preloads = array_filter($preloads, fn ($preload) => ! str_contains($preload['href'], 'fonts/fa-'));

            $faType = $settings->get('little100-fontawesome.type');

            if ($faType === 'kit') {
                $preloads[] = [
                    'href' => $settings->get('little100-fontawesome.kitUrl'),
                    'as' => 'script',
                    'crossorigin' => 'anonymous',
                ];
            }

            return $preloads;
        });
    }
}
