<?php

namespace Backpack\TranslationManager;

use Backpack\TranslationManager\AutomaticServiceProvider;
use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'hncore';
    protected $packageName = 'translation-manager';
    protected $commands = [];
}
