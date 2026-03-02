<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function gallery()
    {
        $images = $this->getImages();
        return view('pages.general.gallery', compact('images'));
    }


    public function getImages()
    {
        return[
            ['img' => 'image1.jpeg', 'title' => 'Image 1'],
            ['img' => 'image2.jpeg', 'title' => 'Image 2'],
            ['img' => 'image3.jpeg', 'title' => 'Image 3'],
            ['img' => 'image4.jpeg', 'title' => 'Image 4'],
            ['img' => 'image5.jpeg', 'title' => 'Image 5'],
            ['img' => 'image6.jpeg', 'title' => 'Image 6'],
            ['img' => 'image7.jpeg', 'title' => 'Image 7'],
            ['img' => 'image8.jpeg', 'title' => 'Image 8'],
            ['img' => 'image9.jpeg', 'title' => 'Image 9'],
            ['img' => 'image10.jpeg', 'title' => 'Image 10'],
            ['img' => 'image11.jpeg', 'title' => 'Image 11'],
            ['img' => 'image12.jpeg', 'title' => 'Image 12'],
            ['img' => 'image13.jpeg', 'title' => 'Image 13'],
            ['img' => 'image14.jpeg', 'title' => 'Image 14'],
            ['img' => 'image15.jpeg', 'title' => 'Image 15'],
            ['img' => 'image16.jpeg', 'title' => 'Image 16'],
            ['img' => 'image17.jpeg', 'title' => 'Image 17'],
            ['img' => 'image18.jpeg', 'title' => 'Image 18'],
            ['img' => 'image19.jpeg', 'title' => 'Image 19'],
            ['img' => 'image20.jpeg', 'title' => 'Image 20'],
        ];
    }
}
