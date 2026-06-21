<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'totalServices' => Service::count(),
            'totalPortfolios' => Portfolio::count(),
            'totalTestimonials' => Testimonial::count(),
        ];

        return view('admin.dashboard', $data);
    }

    public function settings()
    {
        $settings = Setting::pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    public function settingsUpdate(Request $request)
    {
        $settings = $request->except('_token');

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->route('admin.settings')
            ->with('success', 'Pengaturan berhasil diupdate');
    }
}
