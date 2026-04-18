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

namespace Little100\FontAwesome\Content;

use Flarum\Frontend\Document;
use Flarum\Settings\SettingsRepositoryInterface;

class Frontend
{
    protected SettingsRepositoryInterface $settings;

    public function __construct(SettingsRepositoryInterface $settings)
    {
        $this->settings = $settings;
    }

    public function __invoke(Document $document): void
    {
        $faType = $this->settings->get('little100-fontawesome.type');

        if ($faType === 'kit') {
            $kitUrl = htmlspecialchars($this->settings->get('little100-fontawesome.kitUrl'));
            $document->head[] = "<script src='$kitUrl' crossorigin='anonymous'></script>";
        } elseif ($faType === 'free') {
            $document->head[] = "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7/css/all.min.css'>";
        }
    }
}
