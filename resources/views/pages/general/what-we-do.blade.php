<x-layout title="What We Do">

    <!-- About Us Start -->
    <div class="help-area pt-10 pb-115 ptb-sm-60 ">
        <div class="container">
            <div class="section-title text-center ">
                <h1 class="text-black">What We Do</h1>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="accordion" id="scdAccordion">

                    <!-- 1. Alignment with Ghana’s Strategy -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed fw-bolder fs-5 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                1. We align with Ghana’s National SCD Strategy
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#scdAccordion">
                            <div class="accordion-body">
                                <p class="text-black fs-5">
                                    We align with Ghana’s National Strategy for Sickle Cell Disease and support Ghana’s 6 Implementation Strategies designed to improve health outcomes of individuals with SCD.
                                </p>
                                <p class="text-black fs-5 mb-1">Specifically, this includes engaging in actions that help to:</p>
                                <ul class="text-black fs-5 ps-4 mb-0">
                                    <li>1. Ensure universal newborn screening for SCD.</li>
                                    <li>2. Develop mechanisms for catch-up screening.</li>
                                    <li>3. Improve Facilities, Laboratory, and Diagnostic Capacities, Equipment, Infrastructure.</li>
                                    <li>4. Build Capacity on SCD – Skilled Workforce, Pre-Service Training Institutions.</li>
                                    <li>5. Improve Access to Medicines, Technologies, and Innovation.</li>
                                    <li>6. Develop Outreach Services for SCD.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Identify Needs and Successes -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-bolder fs-5 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. We identify needs and successes
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#scdAccordion">
                            <div class="accordion-body">
                                <p class="text-black fs-5">We monitor and report on nationwide needs and successes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Raise Awareness -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-bolder fs-5 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. We raise awareness and provide education
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#scdAccordion">
                            <div class="accordion-body">
                                <p class="text-black fs-5">We raise and attempt to maintain public awareness and understanding about sickle cell disease.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Amplify Voices -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed fw-bolder fs-5 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. We amplify sickle cell warrior voices
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#scdAccordion">
                            <div class="accordion-body">
                                <p class="text-black fs-5">We amplify the voices of Sickle Cell Warriors and their Families by sharing their stories, experiences, and advocacy through our platforms and events.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Fill Screening Gaps -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed fw-bolder fs-5 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5. We fill screening gaps and facilitate enrollment in our medical care system
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#scdAccordion">
                            <div class="accordion-body">
                                <p class="text-black fs-5">We fill potential sickle cell screening gaps at selected events. We then enroll individuals, as needed, into the National Health Insurance Scheme (NHIS) program and connect them with the assigned healthcare center within their community for further care and treatment.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container text-center my-2 pt-30">
            <!-- Section Title -->

            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 g-4">
                <div class="col">
                    <img src="{{ asset('img/about/healthy_baby.jpg') }}" alt="Healthy Baby" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col">
                    <img src="{{ asset('img/about/healthy_young.jpg') }}" alt="Healthy Child" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col">
                    <img src="{{ asset('img/about/healthy_teen.png') }}" alt="Healthy Adolescent" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col">
                    <img src="{{ asset('img/about/healthy_adult.jpg') }}" alt="Healthy Young Adult" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col">
                    <img src="{{ asset('img/about/healthy_old.jpg') }}" alt="Healthy Older Adult" class="img-fluid rounded shadow-sm">
                </div>
            </div>

{{--
            <p class="mt-10 fw-bolder text-black">
             Images of Awo & Team Doing the Work
            </p>
             --}}
        </div>


    </div>
    <!-- Our Mission End -->

</x-layout>
