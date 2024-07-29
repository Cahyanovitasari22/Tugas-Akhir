<?php

namespace App\Services;

use RealRashid\SweetAlert\Facades\Alert;

class AlertService
{
    public function success($message)
    {
        Alert::success('Berhasil', $message);
    }

    public function info($message)
    {
        Alert::info('Berhasil', $message);
    }

    public function error($message)
    {
        Alert::error('Gagal', $message);
    }
}