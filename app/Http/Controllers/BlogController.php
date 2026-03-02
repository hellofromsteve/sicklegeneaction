<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = $this->blogContent();
        return view('pages.general.blog-page', compact('blogs'));
    }

    public function blogContent()
    {
        $blogs  = [
            [
                'img' => 'sgaf-launch.jpg',
                'title' => 'Launch Of Sickle Gene Action Foundation Ghana',
                'date' => 'Dec 04, 2023',
                'url' => 'https://www.graphic.com.gh/news/general-news/ghana-news-sickle-gene-action-foundation-launched-to-support-sickle-cell-warriors.html',
            ],
            [
                'img' => 'honour-founder.webp',
                'title' => 'SGAF Founder - Victoria A. Twumasi Honoured',
                'date' => 'June 10, 2024',
                'url' => 'https://www.graphic.com.gh/news/general-news/ghana-news-sickle-cell-disease-advocate-honoured.html',
            ],
            [
                'img' => 'adopt-treatment.jpg',
                'title' => 'SGAF Founder - appeals to Mahama to adopt treatment of SCD under ‘Mahama Cares’',
                'date' => 'June 28, 2024',
                'url' => 'https://citinewsroom.com/2025/06/ghana-foundation-for-sickle-gene-action-appeals-to-mahama-to-adopt-treatment-of-scd-under-mahama-cares/',
            ],
            [
                'img' => 'screening.webp',
                'title' => 'SGAF Organises screening exercise for schoolchildren at Ablekuma',
                'date' => 'Augu 10 2024',
                'url' => 'https://www.graphic.com.gh/news/general-news/sickle-cell-ngo-organises-screening-exercise-for-schoolchildren-at-ablekuma.html',
            ],
            [
                'img' => 'mahama-plead.jpeg',
                'title' => 'SGAF Ghana Urges New Born Screening ',
                'date' => 'June 17, 2025',
                'url' => 'https://www.gbcghanaonline.com/news/health/sickle-cell-2/2025/',
            ],
        ];

        return $blogs;
    }
}
