<?php

namespace App\Services\Navbar;

use App\Models\Navbar;
use Illuminate\Support\Facades\Cache;

class NavbarService
{
    /**
     * Create a new class instance.
     */

        protected string $cacheKey = 'navbar.selected_layout';

    public function __construct()
    {
        //
    }

    public function getLayout(): ?int
    {
        return Cache::rememberForever($this->cacheKey, function () {
            return Navbar::query()->value('layout_no');
        });
    }

       public function setLayout(int $layoutNo): void
    {
        Navbar::query()->updateOrInsert(['id' => 1], ['layout_no' => $layoutNo]);
        Cache::forever($this->cacheKey, $layoutNo);
    }

    public function clearCache(): void
    {
        Cache::forget($this->cacheKey);
    }


}
