<?php

namespace App\Observers;

use App\Models\Link;
use Cache;

class LinkObserver
{
    public function saved(Link $link)
    {
        # code...
        Cache::forget($link->cache_key);
    }
}
