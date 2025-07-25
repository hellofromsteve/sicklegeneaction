<x-layout title="Our Groundworks">

    <!-- About Us Start -->
    <div class="help-area pt-10 pb-80 ptb-sm-60 ">
        <div class="container">
            <div class="section-title text-center ">
                <h1 class="text-danger">Our Groundworks</h1>
            </div>
        </div>
        <div class="pb-50">
            <div class="container">


                <h4 class="pt-10">Ghana’s Groundwork for National Leadership in Sickle Cell Disease Advocacy and Programming </h4>

                <h5 class="pt-15">Registered</h5>
                <div class="text-justify pt-10" >
                    <p class="text-black">In April 2004, Prof. Ohene-Frempong formed and registered the Foundation as a non-profit, non-governmental organization (NGO)</p>
                </div>

                <h5 class="pt-15">Announced</h5>
                <div class="text-justify pt-10" >
                    <p class="text-black">The establishment of the Sickle Cell Foundation of Ghana was announced on May 10, 2004, as part of the 2004 Africa Day of Sickle Cell Disease commemoration that included the formal inauguration of the Sickle Cell Association of Ghana. </p>
                </div>

                <h5 class="pt-15">Purpose</h5>
                <div class="text-justify pt-10" >
                    <p class="text-black">The Foundation was created to help develop services in support of people living in Ghana with sickle cell disease.</p>
                </div>


                <h5 class="pt-15">Leadership </h5>
                <div class="text-justify pt-10" >
                    <p class="text-black">For 18 years, from 2004, when Prof. Ohene-Frempong registered the Sickle Cell Foundation of Ghana (SCFG) to his unexpected passing in 2022, the SCFG served as a “national focal point” for the development and implementation of life altering programs:</p>
                </div>


                <h6 class="pt-15 mb-2">• Worked collaboratively with Ghanaian officials, colleagues, and compatriots to build a national sickle cell infrastructure. </h6>
                <div class="px-5">
                    <p>✓ <strong>The Government of Ghana:</strong> The Foundation worked with Government of Ghana, its Ministries, and its accompanying agencies to ensure that the entire Ghanaian public would benefit from the Foundation’s efforts, regardless of where they live or their ability to pay.</p>

                    <p>✓ <strong>The Healthcare Professionals and Advocates:</strong> The Foundation worked with the physicians, nurses, laboratory staff, as well as Ghana’s major medical, nursing, laboratory, organizations, and traditional healers.</p>

                    <p>✓ <strong>Religious and traditional leadership:</strong> The Foundation worked with religious organizations and traditional leadership.</p>

                    <p>✓ <strong>Patients and Families:</strong> The Foundation worked with the Sickle Cell Associations of patients and families to determine their needs and seek their advice.</p>
                </div>


                <h6 class="pt-15 mb-2">• Began by focusing on interventions that would save and improve the greatest number of lives. </h6>
                <div class="px-5">
                    <p>✓ <strong>Newborn Screening:</strong> Developed the first newborn screening program in Africa and assisted in the development of point of care testing to provide catch-up screening for those missed at birth.</p>

                    <p>✓ <strong>Genetic Counseling:</strong> Provided evidence-based counseling to families that have the sickle gene (S), so they can make informed decisions about planning their families.</p>

                    <p>✓ <strong>Hydroxyurea:</strong> Worked to make treatment with hydroxyurea, a well-researched disease altering medication, available and affordable.</p>

                    <p>✓ <strong>Treatment Guidelines:</strong> Worked with colleagues to provide evidence-based and standards-of-care guidelines for the treatment and management of sickle cell disease and its many complications.</p>

                    <p>✓ <strong>Biomedical Technology:</strong> Worked with partners to develop modern online applications (Apps) for capturing and analyzing data for newborn screening as well as for managing treatment protocol for hydroxyurea.</p>
                </div>


                <h6 class="pt-15 mb-2">• Formed international research partnerships and obtained funding from both national and international sources.</h6>
                <div class="px-5">
                    <p>✓ <strong>Research:</strong> Formed research partnerships with internationally recognized public and private organizations and companies.</p>

                    <p>✓ <strong>Funding Partnerships:</strong> Sought and obtained major funding partnerships from large influential international organizations to support what the Government of Ghana has been unable to consistently provide.</p>
                </div>
            </div>
        </div>

        <div class="pb-50">
            <div class="container">
                <div class="container my-2">
                    <h5 class="text-center fw-bold mb-4">
                        The Sickle Cell Foundation of Ghana<br>
                        <small class="fw-normal text-muted">
                            A Place for the Nation to Turn to for SCD Leadership, Scholarship, and Compassion
                        </small>
                    </h5>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="col">
                                <div class=" h-100 shadow-sm">
                                    <img src="{{ asset('img/about/groundworks/groundwork' . $i . '.png') }}"
                                         class="card-img-top w-75 mx-auto d-block"
                                         style="max-height: 180px; object-fit: contain;"
                                         alt="SGAF Groundwork Image {{ $i }}">
{{--                                    <div class="card-body text-center">--}}
{{--                                        <p class="card-text">Caption {{ $i }}</p>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-50">
            <div class="container">
                <div class="container my-2">
                    <h5 class="text-center fw-bold mb-4">
                        <small class="fw-normal text-muted">
                            A Place Where Saving Precious Lives Has been a Priority
                        </small>
                    </h5>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                        @for ($i = 1; $i <= 3; $i++)
                            <div class="col">
                                <div class=" h-100 shadow-sm">
                                    <img src="{{ asset('img/about/groundworks/groundwork2-' . $i . '.png') }}"
                                         class="card-img-top w-75 mx-auto d-block"
                                         style="max-height: 180px; object-fit: contain;"
                                         alt="SGAF Groundwork Image {{ $i }}">
                                    {{--                                    <div class="card-body text-center">--}}
                                    {{--                                        <p class="card-text">Caption {{ $i }}</p>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        @endfor
                    </div>

                    <h5 class="text-center fw-bold mt-4 mb-30">
                        <small class="fw-normal text-muted">
                            Prof. Ohene-Frempong, worked through the day and into the night on behalf of Sickle Cell Warriors
                        </small>
                    </h5>


                    <p class="text-center fw-bold mt-5">
                        May, 2022: The Unexpected Passing of Professor Kwaku Ohene-Frempong, MD <br>
                        Prof. Ohene-Frempong, former national high hurdles champion athlete and a non-smoker, <br>
                        passed away after a 7-month battle with lung cancer. <br>
                        He left Ghana with an ever-expanding sickle cell infrastructure, <br>
                        developed along with his many national and international colleagues and partners, over 30 years from 1992 to 2022.
                    </p>
                </div>
            </div>
        </div>


    </div>
    <!-- Our Mission End -->



</x-layout>
