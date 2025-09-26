<x-layout title="Battle #3 - Medical Care Scarcity">

    <!--  Start -->

    <div class="help-area pt-10 pb-40 ptb-sm-60">

        <div class="pb-50">
            <div class="container">

                <h4 class="pt-10 pb-20 text-danger">Battle #3: Living in a place where medical care and/or dedicated advocacy is scarce </h4>

                <h5 class="pt-3 mb-10 text-black">Where a person lives can either make life a little bit easier or a lot more difficult.
                </h5>

                <h6 class="pt-3 mb-10 text-black"> To provide the highest standards of care for its citizens, a country needs to have enough resources, and enough interest to provide the following things:</h6>


                <div class="ms-4">
                    <!-- Section 1 -->
                    <div class="mb-4">
                        <h6 class="fw-bold text-black mb-3"> •	Sufficient numbers of trained clinicians and care teams</h6>
                        <h6 class="fw-bold text-black  mb-3">•	Sufficient numbers of clinical care settings and hospitals</h6>
                        <h6 class="fw-bold text-black  mb-3">•	Sufficient medical supplies and equipment</h6>
                        <h6 class="fw-bold text-black  mb-3">•	Sufficient supplies of medicines</h6>
                        <h6 class="fw-bold text-black  mb-3">•	Sufficient technology to facilitate communication</h6>
                        <h6 class="fw-bold text-black  mb-3">•	Affordable personal or national sources of health insurance plans</h6>
                        <h6 class="fw-bold text-black  mb-3">•	Political will supported by well-organized and dedicated advocacy organizations</h6>

                    </div>

                </div>

                <div class="row pt-20">
                    @for($i = 1; $i <=2; $i++)
                        <div class="col-6 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('img/scd/battle3-' . $i . '.jpg') }}"
                                     alt="Battle Image {{ $i }}"
                                     class="img-fluid rounded mb-2"
                                     style="max-height:200px; object-fit:cover;">

                            </div>
                        </div>
                    @endfor
                    <div class="text-center">
                        <h5 class="text-black">Our hard working healthcare professionals need the
                            <br> best training, equipment, and support to care for our Sickle Cell Warriors <br>  and for all people in Ghana.
                        </h5></div>
                </div>

            </div>

        </div>

    </div>


    <!-- Battle One End -->



</x-layout>
