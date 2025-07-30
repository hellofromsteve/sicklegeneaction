<x-layout title="Our Groundwork - Seven">

    <!-- About Us Start -->
    <div class="help-area pt-10 pb-80 ptb-sm-60 ">

        <div class="pb-50">
            <div class="container">

                <h4 class="pt-10">7. A Model for Compassion, Commitment, Collaboration, Cooperation, and Collegiality</h4>
                <h5 class="pt-20 px-4 mb-3">Ghana’s Groundwork for Unrelenting Advocacy and Compassionate Care</h5>

                <div class="text-justify pt-10 px-4" >
                    <p class="text-black">“KOF was a fierce champion and tireless advocate for people living with SCD; he, himself, has had a son with the disease. Devotion to the cause of SCD through advocacy, research, and education was for him more than a career but the essence of life itself.”</p>
                </div>

                <div class="text-justify pt-10 px-4" >
                    <p class="text-black">“KOF was known for his warmth, humility, and kindness. He has inspired and mentored many SCD clinicians and researchers in the US, Africa, and around the world.” </p>
                </div>

                <div class="text-justify  px-4">
                    <p class="text-black">
                        In memoriam: <br>Kwaku Ohene-Frempong (1946–2022), <br>Isaac Odame, MD
                        <a class="text-primary" href="https://onlinelibrary.wiley.com/doi/full/10.1002/ajh.26681">Click Here To Read</a>
                    </p>
                </div>


                <div class="pb-20 pt-20">
                    <p class="text-center fw-bold mt-1">
                        These qualities help to build partnerships <br>that, along with adequate funding, <br>
                        can vastly prolong and improve <br> the  lives of millions of
                        individuals <br> living   with sickle cell disease.
                    </p>

                    <div class="container">
                        <div class="container my-2">

                            <div class="row row-cols-1 row-cols-sm-2 g-4">
                                @for ($i = 1; $i <= 2; $i++)
                                    <div class="col">
                                        <div class="h-100 shadow-sm">
                                            <img src="{{ asset('img/about/groundworks/model' . $i . '.png') }}"
                                                 class="card-img-top w-75 mx-auto d-block"
                                                 style="max-height: 180px; object-fit: contain;"
                                                 alt="Compassion, Commitment, Collaboration">
                                        </div>
                                    </div>
                                @endfor
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- Our Mission End -->



</x-layout>
