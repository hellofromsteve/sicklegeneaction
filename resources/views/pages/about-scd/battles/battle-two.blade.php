<x-layout title="Battle #2 - Negative Beliefs & Actions">

    <!--  Start -->

    <div class="help-area pt-10 pb-40 ptb-sm-60">

        <div class="pb-50">
            <div class="container">

                <h4 class="pt-10 pb-20 text-danger">Battle #2 - Dealing with negative beliefs and actions</h4>

                <h5 class="pt-3 mb-10 text-black">People can say and do hurtful things. <br>
                    Sometimes it is because they are uninformed. Sometimes it is because they are simply unkind.
                </h5>

                <h5 class="pt-3 mb-10 text-black"> For Sickle Cell Warriors, this misinformation and unkindness, can manifest itself in several ways:</h5>


                <div class="mt-4">
                    <!-- Section 1 -->
                    <div class="mb-4">
                        <h5 class="fw-bold text-black">1. Social exclusion</h5>
                        <div class="ms-4">
                            <p  class="text-black mb-2 fs-6">• Being teased or ostracized when one is a child or a teen.</p>
                        </div>
                    </div>

                    <!-- Section 2 -->
                    <div class="mb-4">
                        <h5 class="fw-bold text-black">2. Employment exclusion</h5>
                        <div class="ms-4">
                            <p class="text-black mb-2 fs-6">• Not being hired or even being fired due to one’s medical needs</p>
                        </div>
                    </div>


                    <!-- Section 3 -->
                    <div class="mb-4">
                        <h5 class="fw-bold text-black">3. Medical Exclusion</h5>
                        <div class="ms-4">
                            <p class="text-black mb-2 fs-6">• Being doubted or simply not believed. <span class="small"> For example, being told that one cannot be in pain because there is no crying or cringing.</span></p>
                            <p class="text-black mb-2 fs-6">• Or being told that one has only come to the hospital to seek drugs for a recreational addiction.</p>
                            <p class="text-black mb-2 fs-6">• Unfortunately, this has happened often enough for there to be a body of medical and social literature devoted to the issue.</p>
                        </div>
                    </div>

                    <!-- Section 4 -->
                    <div class="mb-4">
                        <h5 class="fw-bold text-black">3. Societal Exclusion</h5>
                        <p class="fw-bold text-black mb-0 ms-4"> As with other people in general, there can be a lack of respectful, compassionate, or adequate care based on:</p>
                        <div class="ms-4">
                            <p class="text-black mb-2 fs-6">• Race</p>
                            <p class="text-black mb-2 fs-6">• Ethnic or group identity</p>
                            <p class="text-black mb-2 fs-6">• Gender</p>
                            <p class="text-black mb-2 fs-6">• Income level</p>
                            <p class="text-black mb-2 fs-6">• Level of education</p>
                            <p class="text-black mb-2 fs-6">• And so on …</p>

                        </div>
                    </div>


                    <div class="mb-4">
                        <h6 class="text-black mb-2"> These quiet but ongoing battles can take an emotional toll. <br>
                            <h6 class="text-black mb-2">  For Sickle Cell Warriors, misinformation, unkindness, and harmful self-interest can manifest itself in several ways:</h6>
                            <h6 class="text-black"> It can cause fear, anxiety, sadness, depression.</h6>


                        </h6>
                    </div>
                </div>

                @php
                    $image_desc = [
                        [
                            'image' => 'battle2-1',
                            'desc'  => 'Being teased for having yellow eyes',
                        ],
                        [
                            'image' => 'battle2-2',
                            'desc'  => 'Not being believed when in pain',
                        ],
                        [
                            'image' => 'battle2-3',
                            'desc'  => 'Being fired due to medical needs',
                        ],
                        [
                            'image' => 'battle2-4',
                            'desc'  => 'Being disrespected based on income status',
                        ],
                    ];
                @endphp

                <div class="row pt-20">
                    @foreach($image_desc as $item)
                        <div class="col-6 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('img/scd/' . $item['image'] . '.jpg') }}"
                                     alt="Battle Image {{ $loop->iteration }}"
                                     class="img-fluid rounded mb-2"
                                     style="max-height:200px; object-fit:cover;">
                                <p class=" text-black">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

    </div>


    <!-- Battle One End -->



</x-layout>
