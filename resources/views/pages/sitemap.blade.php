<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ $url }}</loc>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ $url }}/about</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ $url }}/services</loc>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ $url }}/portfolio</loc>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ $url }}/contact</loc>
        <priority>0.6</priority>
    </url>
    @foreach ($services as $service)
        <url>
            <loc>{{ $url }}/services/{{ $service->slug }}</loc>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>
