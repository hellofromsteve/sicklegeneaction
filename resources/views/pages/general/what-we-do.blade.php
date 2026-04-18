<x-layout title="What We Do">

    <!-- What We Do Start -->
    <div class="help-area pt-50 pb-115 ptb-sm-60 ">
        <div class="container">
            <div class="section-title text-center ">
                <h1 class="text-black">What We Do</h1>
            </div>
            <div class="row text-center">
                <div class="row text-center">
                    @foreach($whatWeDo as $feature)
                        @php
                            $parts = explode(' ', $feature['title'], 2);
                        @endphp
                        <div class="col-6 col-md-4 mb-5">
                            <div class="ht-about-feature-item p-4 border rounded shadow-sm h-100 text-center d-flex flex-column"
                                 style="border: 3px solid #002d5b !important; transition: transform 0.3s ease;">
                                <!-- Red dot -->
                                <div style="width: 12px; height: 12px; background-color: #e32f4a; border-radius: 50%; margin: 0 auto 15px;"></div>

                                <h3 class="text-black">
                                    <div>{{ $parts[0] ?? '' }}</div>
                                    <div>{{ $parts[1] ?? '' }}</div>
                                </h3>

                                <a href="{{ route($feature['route']) }}" class="default-btn mt-auto">Learn More</a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do End -->

</x-layout>
