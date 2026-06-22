<x-layout title="What Is Sickle Cell Disease">

    <!-- What Is SCD Start -->
    <div class="help-area pt-10 pb-115 ptb-sm-60 ">

        <div class="">
            <div class="container">

                <h4 class="pt-10 pb-20 text-danger text-center">What Sickle Cell Disease (SCD) Is</h4>

                <h5 class="text-black"> Sickle Cell Disease is a condition that affects the body’s red blood cells.</h5>

                <div class="text-justify pt-10" >
                    <p class=""> Sickle Cell Disease is a condition that makes a person’s round red blood cells become shaped like a farm tool called a “sickle.” It also looks similar to a curved banana.</p>
                </div>
            </div>
        </div>

        <div class="pb-50">
            <div class="container">

                <h5 class="pt-10 text-black">Sickle Cell Disease is a serious condition.</h5>

                <div class="text-justify pt-10" >
                    <p class="text-black"> When these sickle-shaped red blood cells circulate in the bloodstream, they can cause severe pain and a number of serious life-changing complications.</p>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <!-- Left Column (35%) -->
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <figure class="text-center">
                        <img src="{{ asset('img/scd/what-is-scd1.png') }}"
                             class="img-fluid rounded mb-2"
                             style="width: 100%; height: 290px;"
                             alt="A Farm Tool Called a Sickle">
                        <figcaption class="text-muted">A Farm Tool Called a Sickle</figcaption>
                    </figure>
                </div>

                <!-- Right Column (65%) -->
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-6">
                            <figure class="text-center">
                                <img src="{{ asset('img/scd/what-is-scd2.jpg') }}"
                                     class="img-fluid rounded mb-2"
                                     style="width: 100%; height: 290px; "
                                     alt="A Normal Red Blood Cell">
                                <figcaption class="text-muted">A Normal Red Blood Cell</figcaption>
                            </figure>
                        </div>
                        <div class="col-6">
                            <figure class="text-center">
                                <img src="{{ asset('img/scd/what-is-scd3.jpg') }}"
                                     class="img-fluid rounded mb-2"
                                     style="width: 100%; height: 290px; "
                                     alt="A Sickle Red Blood Cell">
                                <figcaption class="text-muted">A Sickle Red Blood Cell</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pb-50">
            <h5 class="text-black text-center pb-20">Watch: What Is Sickle Cell Disease</h5>
            <div class="d-flex justify-content-center">
                <div class="shadow rounded overflow-hidden" style="max-width: 720px; width: 100%;">
                    <video class="w-100 d-block" controls preload="metadata" poster="{{ asset('img/scd/what-is-scd1.png') }}">
                        <source src="{{ asset('vids/what-is-scd.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <p class="text-center text-muted pt-10 mb-0">
                Video credit: <a href="https://www.youtube.com/@AladdinCreations" target="_blank" rel="noopener">Aladdin Creations</a>
            </p>
        </div>
    </div>
    <!-- What Is SCD End -->

</x-layout>
