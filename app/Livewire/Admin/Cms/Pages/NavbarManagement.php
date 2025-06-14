<?php

namespace App\Livewire\Admin\Cms\Pages;

use Throwable;
use App\Helpers\Flash;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Services\Navbar\NavbarService;

class NavbarManagement extends Component
{

    public function select(int $value, NavbarService $navbar)
    {
        try {
            $navbar->setLayout($value);
            $navbar->clearCache();

            Log::channel('navbar_layout')->info("Navbar Layout set to $value by ". Auth::user()->email, [
                'admin_id' => Auth::id(),
                'ip' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);

            Flash::success('Layout Selected Successfully');


            return;
        } catch (Throwable $e) {

            Log::channel('navbar_layout')->info('Failed to select layout', [
                'admin_id' => Auth::id(),
                'ip' => request()->ip(),
                'timestamp' => now(),
            ]);

            Flash::error($e->getMessage());

            return;
        }

    }
    public function render()
    {
        return view('livewire.admin.cms.pages.navbar-management');
    }
}
