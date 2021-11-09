<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($jobs as $job)
    <url>
        <loc>{{Config::get('constants.WEB_URL')}}job/{{$job->user->user_name}}/{{$job['slug']}}</loc>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
</urlset>
