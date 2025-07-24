<x-layout title="Our Groundwork">

    <!-- About Us Start -->
    <div class="help-area pt-10 pb-115 ptb-sm-60 ">
        <div class="container">
            <div class="section-title text-center ">
                <h1 class="text-danger">Our Groundwork</h1>
                <h2 class="text-black-50">1992-2022</h2>
            </div>
        </div>

        <div class="pb-50">
            <div class="container text-center">
                <h3>8 Key Accomplishments to Maintain and Build Upon in Ghana
                </h3>

            </div>
        </div>


        <div class="pb-50">
            <div class="container ">
                @php
                    $topics = [
                        'The Sickle Cell Foundation of Ghana – A Source of National and Global Leadership',
                        'Newborn Screening (NBS) and Sickle Cell Clinics – Crucial for Saving Lives',
                        'Hydroxyurea (HU) – A Disease-Altering Drug Available Through a Public-Private Partnership',
                        'Global Partnerships and Collaborations – A Benefit to Sickle Cell Warriors and Families',
                        'Centers of Excellence (COEs) for Management of Sickle Cell Disease in Regional Hospitals',
                        'The Kumasi Center for Sickle Cell Disease and Blood – For Treatment, Training, and Research',
                        'A Model for Compassion, Commitment, Collaboration, Cooperation, and Collegiality – Essential for Partnerships',
                        'The SPARCo Treatment Guidelines – The Way Forward Until a Cure is Widely Accessible and Affordable',
                    ];
                @endphp

                <div class="row ">
                    @foreach($topics as $topic)
                        <div class="col-12 col-md-10 mb-4">
                            <a href="{{ route('home') }}" class="d-block text-primary fw-bold text-decoration-none">
                                {{ $topic }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="pb-50">
            <div class="container text-center">
                <div class="container text-center my-5">
                    <div class="row justify-content-center">
                        <!-- Image Column 1 -->
                        <div class="col-12 col-md-6 mb-3">
                            <img src="{{ asset('img/about/groundwork1.png') }}"
                                 alt="GF-SGA Launch Image 1"
                                 class="img-fluid rounded shadow-sm"
                                 style="height: 250px; width: 70%; object-fit: cover;">
                        </div>

                        <!-- Image Column 2 -->
                        <div class="col-12 col-md-6 mb-3">
                            <img src="{{ asset('img/about/groundwork2.png') }}"
                                 alt="GF-SGA Launch Image 2"
                                 class="img-fluid rounded shadow-sm"
                                 style="height: 250px; width: 70%; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Caption below images -->
                    <p class="mt-3 fw-bold text-black">
                        Launch of the Ghana Foundation for Sickle Gene Action (GF-SGA) <br>
                        <small class="text-muted">November 2023</small>
                    </p>
                </div>


                <h4>Building Upon 30 Years of Solid Groundwork
                </h4>

                <div class="text-justify pt-10" >
                    <p class="text-black"><strong>In 2023, we formed the Ghana Foundation for Sickle Gene Action (GF-SGA)<br>to support efforts to build upon and scale up proven solutions
                            <br>that will save lives and significantly reduce the preventable pain and suffering
                            <br> experienced by our Sickle Cell Warriors and their Families.</strong></p>

                </div>

            </div>
        </div>
    </div>
    <!-- Our Mission End -->



</x-layout>
