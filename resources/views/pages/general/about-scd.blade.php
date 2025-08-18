<x-layout title="About Sickle Cell Disease">

    <!-- About SCD Start -->
    <div class="help-area pt-50 pb-115 ptb-sm-60 ">
        <div class="container">
            <div class="section-title text-center ">
                <h1 class="text-black">About Sickle Cell Disease (SCD) </h1>

            </div>
            <div class="row text-center">
                <div class="row text-center">
                    @foreach($features as $index => $feature)
                        @php
                            $parts = explode(' ', $feature['title'], 2);
                            $isLastItem = $index === count($features) - 1;
                            $isLastInRow = $index % 3 === 0 && $isLastItem;

                        @endphp
                        <div class="col-6 col-md-4 mb-5 {{ $isLastInRow ? 'mx-auto' : '' }}">
                            <div class="ht-about-feature-item p-4 border rounded shadow-sm h-100 text-center">
                                <div style="width: 12px; height: 12px; background-color: #e3342f; border-radius: 50%; margin: 0 auto 15px;"></div>

                                <h3 class="text-black text-wrap">{{ $feature['title'] }}</h3>

                                {{--

                                  <h3 class="text-black">
                                      <div>{{ $parts[0] ?? '' }}</div>
                                      <div>{{ $parts[1] ?? '' }}</div>
                                  </h3>
                                 --}}

                                <a href="{{ route($feature['route']) }}" class="btn btn-sm btn-danger mt-3">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- About SCD End -->


    <div class="container text-center my-2 pb-50">
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

        <p class="mt-10 fw-bolder">
            With early action and proven strategies, we can help Sickle Cell Warriors, from birth to old age,
            <br>live lives free of preventable pain and suffering.
        </p>
    </div>


</x-layout>
