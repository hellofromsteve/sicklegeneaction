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
        return [
            ['img' => 'image1.jpeg', 'title' => 'Free SCD screening at Akweibu JHS Cluster of Schools, Dansoman on World Sickle Cell Day 2025'],

            ['img' => 'image2.jpeg', 'title' => 'A student of Saleria Basic School reciting a poem on SCD during a free education and screening session at Odorkor'],

            ['img' => 'image3.jpeg', 'title' => 'Students of Akweibu JHS queued up for screening'],

            ['img' => 'image4.jpeg', 'title' => 'Donation to the GARH Sickle Cell Clinic, Pediatrics'],

            ['img' => 'image5.jpeg', 'title' => 'GF-SGA in a group photo with the Medical Director of GARH during a visit to the hospital’s sickle cell clinic in 2023'],

            ['img' => 'image6.jpeg', 'title' => 'GF-SGA donation and awareness education at GARH Children’s Ward'],

            ['img' => 'image7.jpeg', 'title' => "GF-SGA supporting GNS Foundation's Awareness Event"],

            ['img' => 'image8.jpeg', 'title' => 'GF-SGA partnership meeting with the Ablekuma North Health Directorate in Accra'],

            ['img' => 'image9.jpeg', 'title' => 'GF-SGA participation in ISCC Focus Group Discussion in May 2024'],

            ['img' => 'image10.jpeg', 'title' => 'GF-SGA and Rotary Club in a group photo during a SCD Awareness Education and Screening Exercise at the Presbyterian Basic School at Shiashie, East Legon in Accra'],

            ['img' => 'image11.jpeg', 'title' => 'GF-SGA participating in a SCD Advocacy Summit organised by Novartis in May 2024'],

            ['img' => 'image12.jpeg', 'title' => 'Community Engagement: SCD Awareness Creation and Education in Wa in the Upper West Region'],

            ['img' => 'image13.jpeg', 'title' => 'MOH/GHS National Sickle Cell Strategy Stakeholder Engagement Meeting in April 2024'],

            ['img' => 'image14.jpeg', 'title' => 'GF-SGA Awareness Creation, Education and Feed the Street Kids Drive at Shiashie, Madina Zongo in May 2024'],

            ['img' => 'image15.jpeg', 'title' => 'SGA and Rotary Club of Roman Ridge Awareness Creation at Juvenile Borstal Institute, Accra in March 2024'],

            ['img' => 'image16.jpeg', 'title' => "Awareness Education on Professional Development Day at Achimota Senior High School in February 2024"],

            ['img' => 'image17.jpeg', 'title' => 'A group photo with students of Achimota Senior High School after an Awareness and Education Day in 2024'],

            ['img' => 'image18.jpeg', 'title' => 'A group photo with the GARH Sickle Cell Association during a SCD Awareness and Education programme'],

            ['img' => 'image19.jpeg', 'title' => '2024 World Sickle Cell Day Activity: Awareness, Education and Free Screening Exercise at Saleria Basic School in Accra'],

            ['img' => 'image20.jpeg', 'title' => '7th June 2024 Supporting GNS Foundation Awareness Event'],

            ['img' => 'image21.jpeg', 'title' => ''],

            ['img' => 'image22.jpeg', 'title' => ''],
            ['img' => 'image23.jpeg', 'title' => ''],
            ['img' => 'image24.jpeg', 'title' => ''],
            ['img' => 'image25.jpeg', 'title' => ''],
            ['img' => 'image26.jpeg', 'title' => ''],
            ['img' => 'image27.jpeg', 'title' => ''],
            ['img' => 'image28.jpeg', 'title' => ''],
            ['img' => 'image29.jpeg', 'title' => ''],


            ['img' => 'image30.jpeg', 'title' => 'KOF interacting with a Sickle Cell Warrior at the 6th Symposium at Labadi Beach Hotel, 2016.'],

            ['img' => 'image31.jpeg', 'title' => 'A moment of engagement for KOF. Interacting with a mother at the Maternal  and Child Care  Hospital in Kumasi.'],

            ['img' => 'image32.jpeg', 'title' => 'KOF (middle) in a meeting with the staff of the Sickle Cell Foundation of Ghana. Seated to his left is Mrs Janet Ohene-Frempong, and to his right is Mrs Mary Lamptey, National Nurse Coordinator for NBS.'],
        ];
    }
}
