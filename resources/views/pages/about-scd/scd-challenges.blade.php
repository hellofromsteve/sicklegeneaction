<x-layout title="The Challenges of Living With SCD">

    <!-- Challenges With Living With SCD Start -->
    <div class="help-area pt-10 pb-40 ptb-sm-60">

        <div class="pb-50">
            <div class="container">

                <h4 class="pt-10 mb-2 text-danger text-center">What Causes the Challenges of Living with SCD</h4>

                <h5 class="pt-10 px-4 text-black text-center"> Living with sickle cell disease can affect people and their families
                    <br> medically, physically, socially, and emotionally.
                </h5>
                <h5 class="pt-20 px-4 text-black text-center"> They are called Sickle Cell Warriors
                    because they are in a brave, ongoing battle <br>
                    with a serious condition. <br>
                </h5>

                @php
                    $image_desc = [
                        [
                            'image' => 'challenge1',
                            'desc'  => 'Medical Challenges',
                        ],
                        [
                            'image' => 'challenge2',
                            'desc'  => 'Physical Symptoms and Challenges',
                        ],
                        [
                            'image' => 'challenge3',
                            'desc'  => 'Social Challenges',
                        ],
                        [
                            'image' => 'challenge4',
                            'desc'  => 'Emotional Challenges',
                        ],
                    ];
                @endphp

                    <div class="row pt-20">
                        @foreach($image_desc as $item)
                            <div class="col-6 mb-4">
                                <div class="text-center">
                                    <img src="{{ asset('img/scd/' . $item['image'] . '.png') }}"
                                         alt="Challenges Image {{ $loop->iteration }}"
                                         class="img-fluid rounded mb-2"
                                         style="max-height:150px; object-fit:cover;">
                                    <p class=" text-black">{{ $item['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>


                <div class="container my-5">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-3">Sickle cell disease can affect a person’s life MEDICALLY.</h2>

                            <h4>What to know:</h4>
                            <div class="fw-bold ms-4">
                                <p class="mb-2 fs-6 text-black">1. Sickle cell disease can cause very severe pain and a number of serious complications.</p>
                                <p class="mb-2 fs-6 text-black">2. Some people have certain complications. Some people have other complications.</p>
                                <p class="mb-2 fs-6 text-black">3. Some people have many complications. Some people have few complications.</p>
                                <p class="mb-2 fs-6 text-black">4. Each person is different.</p>
                                <p class="mb-2 fs-6 text-black">5. It is a condition that can be treated.</p>
                                <p class="mb-2 fs-6 text-black">6. For some people, it is a condition that can even be cured.</p>
                                <p class="mb-2 fs-6 text-black">7. With skilled and compassionate medical care, people can live fulfilling lives.</p>
                            </div>
                        </div>

                        <div class="accordion mt-4" id="complicationsAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingComplications">
                                    <button class="accordion-button collapsed text-primary fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComplications" aria-expanded="false" aria-controls="collapseComplications">
                                        Possible Complications that Can Be Caused by SCD
                                    </button>
                                </h2>
                                <div id="collapseComplications" class="accordion-collapse collapse" aria-labelledby="headingComplications" data-bs-parent="#complicationsAccordion">
                                    <div class="accordion-body">

                                        @php
                                            sort($complications);

                                            $third = ceil(count($complications) / 3);
                                            $col1 = array_slice($complications, 0, $third);
                                            $col2 = array_slice($complications, $third, $third);
                                            $col3 = array_slice($complications, $third * 2);
                                        @endphp

                                        <div class="row">
                                            <div class="col-md-4">
                                                <ul>
                                                    @foreach($col1 as $item)
                                                        <li class="mb-2">• {{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    @foreach($col2 as $item)
                                                        <li class="mb-2">• {{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    @foreach($col3 as $item)
                                                        <li class="mb-2">• {{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <p class="text-black fs-6">
                                                Source: United States Department of Health and Human Services (U.S. DHHS), <br>
                                                National Institutes of Health (NIH) - National Heart, Lung, and Blood Institute (NHLBI).
                                                <a class="text-primary" href="https://www.nhlbi.nih.gov/health/sickle-cell-disease/health-effects" target="_blank">
                                                    Read Here (New Tab)
                                                </a>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="container pb-50">
                    <h3 class="fw-bold mb-3">Sickle Cell Disease Can Affect a Person’s Life PHYSICALLY</h3>
                    <p class="fs-5 mb-3 fw-bold">A few issues to be aware of:</p>

                    <div class="accordion" id="physicalAccordion">

                        <!-- 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed text-primary fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    1. Yellowing of the whites of the eyes
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#physicalAccordion">
                                <div class="accordion-body">
                                    <p class="text-black mb-1">• When a person’s sickle blood cells die, a yellow substance called bilirubin is released into the bloodstream.</p>
                                    <p class="text-black mb-1">• This is what causes the whites of a person‘s eyes to be yellow, from time to time.</p>
                                    <p class="text-black mb-1">• The medical term for it is “jaundice.”</p>

                                    <p class="mt-3 fw-bold">Others may notice the yellowing of the eyes. People with sickle cell disease may, then, have to deal with:</p>
                                    <p class="text-black mb-1">• people teasing them</p>
                                    <p class="text-black mb-1">• people making incorrect assumptions about their condition</p>
                                    <p class="text-black mb-1">• people just asking questions and expecting answers.</p>

                                    <p class="mt-2 text-black">This can be hurtful, embarrassing, or just tiresome.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed text-primary fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    2. Extreme tiredness
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#physicalAccordion">
                                <div class="accordion-body">
                                    <p class="text-black mb-1">• When a person’s sickle red blood cells die, there are not enough healthy red blood cells to carry oxygen throughout the body.</p>
                                    <p class="text-black mb-1">• This causes a person to feel very tired. The medical term for it is “fatigue.”</p>

                                    <p class="mt-3 fw-bold">For some people, extreme tiredness can sometimes make it hard for a person to:</p>
                                    <p class="text-black mb-1">• get work done</p>
                                    <p class="text-black mb-1">• do well in school</p>
                                    <p class="text-black mb-1">• do well at work</p>
                                    <p class="text-black mb-1">• engage in important or fun social occasions.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed text-primary fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    3. The Experience of “Looking well” and “doing well”
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#physicalAccordion">
                                <div class="accordion-body">
                                    <p class="text-black mb-1">Many Sickle Cell Warriors look very healthy and seem to be doing quite well.</p>
                                    <p class="text-black mb-1">• This is an advantage when it comes to being accepted as a student, a coworker, or just another member of society.</p>
                                    <p class="text-black mb-1">• But this can cause problems when a doctor, nurse, or anyone else does not take a person’s medical needs seriously.</p>
                                    <p class="text-black mb-1">• Many people with sickle cell disease manage to forge ahead in life, in spite of the problems they face.</p>
                                    <p class="text-black mb-1">• They still need our understanding, our respect, and our support.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="container">
                    <h3 class="fw-bold mb-3">Sickle Cell Disease Can Affect a Person’s Life SOCIALLY and EMOTIONALLY.</h3>
                    <p class="fs-5 mb-3 fw-bold">These are some of the situations and experiences that can make life more difficult than it needs to be.</p>

                    <h5 class="fw-bold fw-5  mb-3"> <a class="text-primary " href="{{ route('about-scd.battle-one') }}"> •	Battle #1: Simply having the disease</a></h5>
                    <h5 class="fw-bold fw-5 mb-3"> <a class="text-primary " href="{{ route('about-scd.battle-two') }}">•	Battle #2: Dealing with people’s negative beliefs and actions</a></h5>
                    <h5 class="fw-bold fw-5 mb-3"> <a class="text-primary " href="{{ route('about-scd.battle-three') }}">•	Battle #3: Living in a place where medical care and/or dedicated advocacy is scarce</a></h5>
                </div>

            </div>

        </div>

    </div>
    <!-- Challenges With Living With SCD End -->


</x-layout>
