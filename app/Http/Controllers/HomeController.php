<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function sitemap()
    {
        $services = Service::all();
        $settings = Setting::pluck('value', 'key');
        $url = config('app.url');

        return response()->view('pages.sitemap', compact('services', 'settings', 'url'))->header('Content-Type', 'text/xml');
    }

    public function index()
    {
        $services = Service::all();
        $portfolios = Portfolio::latest()->take(6)->get();
        $testimonials = Testimonial::latest()->take(5)->get();
        $settings = Setting::pluck('value', 'key');

        return view('pages.home', compact('services', 'portfolios', 'testimonials', 'settings'));
    }

    public function about()
    {
        $settings = Setting::pluck('value', 'key');
        return view('pages.about', compact('settings'));
    }

    public function services()
    {
        $services = Service::all();
        $settings = Setting::pluck('value', 'key');
        return view('pages.services', compact('services', 'settings'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::latest()->get();
        $categories = Portfolio::select('category')->distinct()->pluck('category');
        $settings = Setting::pluck('value', 'key');
        return view('pages.portfolio', compact('portfolios', 'categories', 'settings'));
    }

    public function contact()
    {
        $settings = Setting::pluck('value', 'key');
        return view('pages.contact', compact('settings'));
    }
}
