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

    public function videos()
    {
        $videos = $this->getVideos();
        return view('pages.general.videos', compact('videos'));
    }

    public function getVideos()
    {
        return [
            ['id' => 'rn86SatOJvM', 'title' => 'About SCD by KOF.'],
            ['id' => 'xjN1XK9W3fg', 'title' => 'Launch of GF-SGA'],
            ['id' => 'vpTRvUQu5z8', 'title' => '2025 WSCD at Akweibu Basic School'],
            ['id' => 'n-mr75tiuC8', 'title' => 'The Definition of Hope'],
        ];
    }


    public function getImages()
    {
        return [
            ['img' => 'image1.jpeg', 'title' => 'Free Sickle Cell Disease (SCD) Screening at Akweibu JHS Cluster of Schools, Dansoman, during World Sickle Cell Day, 2025.'],

            ['img' => 'image2.jpeg', 'title' => 'A student of Saleria Basic School reciting a poem on SCD during a Free Education and Screening Session, Odorkor–Accra, 2024.'],

            ['img' => 'image3.jpeg', 'title' => 'Students of Akweibu JHS queued for SCD screening during an outreach programme.'],

            ['img' => 'image4.jpeg', 'title' => 'Donation presentation to the Greater Accra Regional Hospital (GARH) Paediatric Sickle Cell Clinic.'],

            ['img' => 'image5.jpeg', 'title' => 'GF-SGA team in a group photograph with the Medical Director of GARH during a visit to the Hospital’s Sickle Cell Clinic, 2023.'],

            ['img' => 'image6.jpeg', 'title' => 'GF-SGA donation and awareness education session at the GARH, Children\'s Ward'],

            ['img' => 'image7.jpeg', 'title' => 'GF-SGA supporting the GNS Foundation SCD Awareness Event.'],

            ['img' => 'image8.jpeg', 'title' => 'GF-SGA partnership meeting with the Ablekuma North Health Directorate, Accra.'],

            ['img' => 'image9.jpeg', 'title' => 'GF-SGA participation in the ISCC Focus Group Discussion, 2024.'],

            ['img' => 'image10.jpeg', 'title' => 'GF-SGA and Rotary Club members during an SCD Awareness Education and Screening Exercise at Presbyterian Basic School, Shiashie–East Legon, Accra.'],

            ['img' => 'image11.jpeg', 'title' => 'GF-SGA participation in the SCD Advocacy Summit organized by Novartis, May 2024.'],

            ['img' => 'image12.jpeg', 'title' => 'Community Engagement: SCD Awareness Creation and Education programme in Wa, Upper West Region.'],

            ['img' => 'image13.jpeg', 'title' => 'Ministry of Health/Ghana Health Service National Sickle Cell Strategy Stakeholder Engagement Meeting, 2024.'],

            ['img' => 'image14.jpeg', 'title' => 'GF-SGA Awareness Creation, Education, and Feed the Street Kids Drive at Shiashie, Madina Zongo, 2024.'],

            ['img' => 'image15.jpeg', 'title' => 'SGA and Rotary Club of Roman Ridge Awareness Creation programme at the Juvenile Borstal Institute, Accra, March 2024.'],

            ['img' => 'image16.jpeg', 'title' => 'SCD Awareness Education during Professional Development Day at Achimota Senior High School, 2024.'],

            ['img' => 'image17.jpeg', 'title' => 'Group photograph with students of Achimota Senior High School after an SCD Awareness and Education Session, 2024.'],

            ['img' => 'image18.jpeg', 'title' => 'Group photograph with the GARH Sickle Cell Association during an SCD Awareness and Education Programme.'],

            ['img' => 'image19.jpeg', 'title' => 'World Sickle Cell Day: Awareness Creation, Education, and Free Screening Exercise at Saleria Basic School, Accra, 2024.'],

            ['img' => 'image20.jpeg', 'title' => 'World Sickle Cell Day: Awareness Creation, Education, and Free Screening Exercise at Saleria Basic School, Accra, 2024.'],

            ['img' => 'image21.jpeg', 'title' => 'Mrs. Janet Ohene-Frempong (Patron) and the SGA Team engaging students of Akweibu Basic School, Accra.'],

            ['img' => 'image22.jpeg', 'title' => 'SGA team engaging students of Akweibu Basic School, Accra.'],
            ['img' => 'image23.jpeg', 'title' => 'SGA team engaging students of Akweibu Basic School, Accra.'],
            ['img' => 'image24.jpeg', 'title' => 'Group photograph with students of Salaria 1 & 2 Basic Schools after an SCD Education Session and Screening Exercise.'],
            ['img' => 'image25.jpeg', 'title' => 'SCD education discussion on OTEC FM, Ashanti Region.'],
            ['img' => 'image26.jpeg', 'title' => 'SGA in collaboration with ISCC educating the public on SCD on Joy FM, Accra.'],
            ['img' => 'image27.jpeg', 'title' => 'Group photograph with students of Salaria 1 & 2 Basic Schools.'],
            ['img' => 'image28.jpeg', 'title' => 'Group photograph with students of Salaria 1 & 2 Basic Schools.'],
            ['img' => 'image29.jpeg', 'title' => 'Mrs. Mary Lamptey, National Nurse Coordinator for Newborn Screening (NBS), educating students of Akweibu Basic School on SCD.'],


            ['img' => 'image30.jpeg', 'title' => 'KOF interacting with a Sickle Cell Warrior at the 6th Symposium at Labadi Beach Hotel, 2016.'],

            ['img' => 'image31.jpeg', 'title' => 'A moment of engagement for KOF. Interacting with a mother at the Maternal  and Child Care  Hospital in Kumasi.'],

            ['img' => 'image32.jpeg', 'title' => 'KOF (middle) in a meeting with the staff of the Sickle Cell Foundation of Ghana. Seated to his left is Mrs Janet Ohene-Frempong, and to his right is Mrs Mary Lamptey, National Nurse Coordinator for NBS.'],
        ];

    }
}
