<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($institutes as $institute)
    <url>
        <loc>{{Config::get('constants.WEB_URL')}}institute/{{$institute->institute_type->slug}}/{{$institute->slug}}</loc>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
</urlset>
