<x-layout title="Our Groundwork - Six">

    <!-- About Us Start -->
    <div class="help-area pt-10 pb-80 ptb-sm-60 ">

        <div class="pb-50">
            <div class="container">

                <h4 class="pt-10 text-black">6. The Kumasi Sickle Cell and Blood Centre</h4>
                <h5 class="pt-20 px-4 mb-5 text-black">Ghana’s Groundwork for Providing a Center of Excellence </h5>

                <div class="pb-20">
                    <div class="container">
                        <div class="container my-2">

                            <div class="row row-cols-1 row-cols-sm-2 g-4">
                                @for ($i = 1; $i <= 2; $i++)
                                    <div class="col">
                                        <div class="h-100 shadow-sm">
                                            <img src="{{ asset('img/about/groundworks/ksc' . $i . '.png') }}"
                                                 class="card-img-top w-75 mx-auto d-block"
                                                 style="max-height: 180px; object-fit: contain;"
                                                 alt="The Kumasi Sickle Cell and Blood Centre">
                                        </div>
                                    </div>
                                @endfor
                            </div>

                        </div>
                    </div>
                </div>


                <div class="accordion pt-40 px-4" id="kscAccordion">

                    <!-- 1. Initial Source -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading0">
                            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="false" aria-controls="collapse0">
                              <strong>  2000: A Center of Excellence for Sickle Cell and Blood in Kumasi Proposed</strong>
                            </button>
                        </h2>
                        <div id="collapse0" class="accordion-collapse collapse" aria-labelledby="heading0" data-bs-parent="#kscAccordion">
                            <div class="accordion-body px-3">
                                <p> •   The voices of families and patients sought</p>
                                <p> •   Proposal Presented to the Ghana Ministry of Health</p>
                                <p> •	Land allocated by Asantehene</p>
                                <p> •	Sod-cutting ceremony performed by Asantehene</p>
                                <p>•	Institutional Structure and Support Presented</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2001 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2001">
                            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2001" aria-expanded="false" aria-controls="collapse2001">
                                <strong>2001: Asantehene Visits the Children’s Hospital of Philadelphia</strong>
                            </button>
                        </h2>
                        <div id="collapse2001" class="accordion-collapse collapse" aria-labelledby="heading2001" data-bs-parent="#kscAccordion">
                            <div class="accordion-body px-3">
                                <p>• Asantehene acknowledges contributions to newborn screening in Ghana</p>
                                <p>• Asantehene announces the formation of a Sickle Cell Foundation in Ghana</p>
                                <p>• The Kumasi Center to be a major goal</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2004 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2004">
                            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2004" aria-expanded="false" aria-controls="collapse2004">
                                <strong>2004: Sickle Cell Foundation of Ghana Formed</strong>
                            </button>
                        </h2>
                        <div id="collapse2004" class="accordion-collapse collapse" aria-labelledby="heading2004" data-bs-parent="#kscAccordion">
                            <div class="accordion-body px-3">
                                <p>• Registered</p>
                                <p>• Announced</p>
                                <p>• Purpose</p>
                                <p>• Vision for a Sickle Cell and Blood Center</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2008–2010 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2008">
                            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2008" aria-expanded="false" aria-controls="collapse2008">
                                <strong>2008–2010: Brazil–Ghana Technical Cooperation for External Programme Support</strong>
                            </button>
                        </h2>
                        <div id="collapse2008" class="accordion-collapse collapse" aria-labelledby="heading2008" data-bs-parent="#kscAccordion">
                            <div class="accordion-body px-3">
                                <p>• Application for support from Brazil</p>
                                <p>• Agreements signed</p>
                                <p>• Support from Brazil ended</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2015–2016 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2015">
                            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2015" aria-expanded="false" aria-controls="collapse2015">
                                <strong>2015–2016: Efforts to Construct the Proposed Center for Sickle Cell and Blood in Kumasi Continued</strong>
                            </button>
                        </h2>
                        <div id="collapse2015" class="accordion-collapse collapse" aria-labelledby="heading2015" data-bs-parent="#kscAccordion">
                            <div class="accordion-body px-3">
                                <p>• New support received from Ghana National Petroleum Company (GNPC)</p>
                                <p>• Agreement signed with GNPC</p>
                                <p>• Funding presented</p>
                                <p>• Construction and scheduled completion</p>
                                <p>• Location: Komfo Anokye Teaching Hospital</p>
                                <p>• Purpose :</p>

                                <!-- Nested Accordions for Purpose -->
                                <div class="accordion mt-3" id="nestedPurposeAccordion">

                                    <!-- Clinical Care -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="nestedHeading1">
                                            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#nestedCollapse1" aria-expanded="false" aria-controls="nestedCollapse1">
                                                1. To Provide Clinical Care
                                            </button>
                                        </h2>
                                        <div id="nestedCollapse1" class="accordion-collapse collapse" aria-labelledby="nestedHeading1" data-bs-parent="#nestedPurposeAccordion">
                                            <div class="accordion-body px-3">
                                                <p>• A serious chronic condition</p>
                                                <p>• Need for comprehensive care</p>
                                                <p>• Specialized clinical care team</p>
                                                <p>• Precedents from other countries</p>
                                                <p>• Avoiding fragmented care</p>
                                                <p>• Existing clinical site</p>
                                                <p>• Need to expand</p>
                                                <p>• Medical home for Kumasi area</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Education and Training -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="nestedHeading2">
                                            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#nestedCollapse2" aria-expanded="false" aria-controls="nestedCollapse2">
                                                2. To Provide Education and Training
                                            </button>
                                        </h2>
                                        <div id="nestedCollapse2" class="accordion-collapse collapse" aria-labelledby="nestedHeading2" data-bs-parent="#nestedPurposeAccordion">
                                            <div class="accordion-body px-3">
                                                <p>• Complex illness</p>
                                                <p>• High burden of disease in Africa</p>
                                                <p>• Need for well-trained personnel</p>
                                                <p>• Training in program development and care</p>
                                                <p>• Public education and genetic counseling</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Africa-Centered Research -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="nestedHeading3">
                                            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#nestedCollapse3" aria-expanded="false" aria-controls="nestedCollapse3">
                                                3. To Provide a Base for Africa-Centered Research
                                            </button>
                                        </h2>
                                        <div id="nestedCollapse3" class="accordion-collapse collapse" aria-labelledby="nestedHeading3" data-bs-parent="#nestedPurposeAccordion">
                                            <div class="accordion-body px-3">
                                                <p>• Special needs in Africa</p>
                                                <p>• Need for Africa-centered research</p>
                                                <p>• Research-based origin of the center</p>
                                                <p>• Strong research base for global support</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- End Nested Accordions -->

                            </div>
                        </div>
                    </div>

                    <!-- 2001 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2001">
                            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="false" aria-controls="collapse2025">
                                <strong>2025: The Status of the National Center for Sickle Cell and Blood in Kumasi</strong>
                            </button>
                        </h2>
                        <div id="collapse2025" class="accordion-collapse collapse" aria-labelledby="heading2025" data-bs-parent="#kscAccordion">
                            <div class="accordion-body px-3">
                                <p>• Stalled and only 65% completed due to lack of the agreed upon funding by the GNPC.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-50">
            <div class="container">
                <div class="container my-2">

                    <div class="row justify-content-center g-4">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="h-100 shadow-sm text-center">
                                <img src="{{ asset('img/about/groundworks/ksc3.jpg') }}"
                                     class="img-fluid mx-auto"
                                     style="max-height: 180px; object-fit: contain;"
                                     alt="Kumasi Center For Sickle Cell Disease">
                            </div>
                        </div>
                    </div>

                    <p class="text-center fw-bold mt-1">
                        Kumasi Center for Sickle Cell Disease<br>
                    </p>


                </div>
            </div>
        </div>


    </div>
    <!-- Our Mission End -->



</x-layout>
