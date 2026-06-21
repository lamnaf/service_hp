<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        if (request()->is('admin/*')) {
            $portfolios = Portfolio::latest()->paginate(10);
            return view('admin.portfolios.index', compact('portfolios'));
        }

        $category = request('category', 'all');
        $query = Portfolio::latest();

        if ($category !== 'all') {
            $query->where('category', $category);
        }

        $portfolios = $query->paginate(9);
        $categories = Portfolio::select('category')->distinct()->pluck('category');
        $settings = \App\Models\Setting::pluck('value', 'key');
        return view('pages.portfolio', compact('portfolios', 'categories', 'settings', 'category'));
    }

    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        $settings = \App\Models\Setting::pluck('value', 'key');
        return view('pages.portfolio-detail', compact('portfolio', 'settings'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(StorePortfolioRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('before_image')) {
            $data['before_image'] = $request->file('before_image')->store('portfolios', 'public');
        }

        if ($request->hasFile('after_image')) {
            $data['after_image'] = $request->file('after_image')->store('portfolios', 'public');
        }

        Portfolio::create($data);

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio berhasil ditambahkan');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $data = $request->validated();

        if ($request->hasFile('before_image')) {
            if ($portfolio->before_image) {
                Storage::disk('public')->delete($portfolio->before_image);
            }
            $data['before_image'] = $request->file('before_image')->store('portfolios', 'public');
        }

        if ($request->hasFile('after_image')) {
            if ($portfolio->after_image) {
                Storage::disk('public')->delete($portfolio->after_image);
            }
            $data['after_image'] = $request->file('after_image')->store('portfolios', 'public');
        }

        $portfolio->update($data);

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio berhasil diupdate');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->before_image) {
            Storage::disk('public')->delete($portfolio->before_image);
        }
        if ($portfolio->after_image) {
            Storage::disk('public')->delete($portfolio->after_image);
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio berhasil dihapus');
    }
}
