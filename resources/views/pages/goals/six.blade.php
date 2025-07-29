<x-layout title="Facilities, Equoment & Infrastructure">

    <!-- About Us Start -->
    <div class="help-area pt-10 pb-80 ptb-sm-60 ">

        <div class="pb-50">
            <div class="container">

                <h4 class="pt-10 text-center">Goal No. 6</h4>
                <h5 class="pt-20 px-4">Adequate Facilities, Equipment, Supplies, and Infrastructure</h5>


                <h5 class="pt-20 px-4">In Alignment with Ghana’s National Strategy for Sickle Cell Disease</h5>


                <h5 class="pt-20 px-4">Strategic objective 3: Improve health outcomes of individuals with SCD</h5>

                <div class="text-justify pt-10 px-4" >
                    <p class="text-black">•	Implementation Strategy 5: Improve Access to Medicines, Technologies, and Innovation</p>
                </div>


                <div class="text-justify  ps-5 pe-4">
                    <h5 class="text-black">   Our Goal for the Completion of the Kumasi Center for SCD Excellence</h5>
                    <p class="text-black">
                        To assist in identifying the support needed to complete the construction and equipping of the Sickle Cell and Blood Center at Komfo Anokye Teaching Hospital in Kumasi, supported by Otumfuo Osei Tutu II, and intended to provide clinical care, education and training, and research.
                    </p>
                </div>



            </div>
        </div>

        <div class="pb-50">
            <div class="container">

                <div class="container">
                    <div class="container my-2">

                        <div class="row row-cols-1 row-cols-sm-2 g-4">
                            @for ($i = 2; $i <= 3; $i++)
                                <div class="col">
                                    <div class="h-100 shadow-sm">
                                        <img src="{{ asset('img/about/groundworks/ksc' . $i . '.png') }}"
                                             class="card-img-top w-75 mx-auto d-block"
                                             style="max-height: 180px; object-fit: contain;"
                                             alt="Compassion, Commitment, Collaboration">
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <p class="text-center fw-bold mt-1 text-black">
                            Sickle Cell and Blood Center
                            at Komfo Anokye Teaching Hospital in Kumasi
                            <br>
                        </p>

                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- Our Mission End -->



</x-layout>
