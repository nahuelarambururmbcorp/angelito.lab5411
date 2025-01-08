<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">


    @foreach ($articles as $article)
        <url>
            <loc>https://dolar-bluehoy.com.ar/{{$article->slug}}</loc>
            <lastmod>{{ $article->updated_at->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <news:news>
                <news:publication>
                    <news:name>Dolar Blue Hoy</news:name>
                    <news:language>es</news:language>
                </news:publication>
                <news:publication_date>{{ $article->published_at }}</news:publication_date>
                <news:title>{{ $article->title }}</news:title>
                <news:keywords>{{ $article->keywords }}</news:keywords>
            </news:news>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
