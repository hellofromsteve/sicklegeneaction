<x-layout title="Online Donate">
    @section('head')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @endsection

    <!-- Banner Area Start -->
    <div class="about-us-section mb-50 py-5 bg-light text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="fw-bold mb-3 text-black">Donate Here</h1>
                    <p class="fs-5 text-secondary mb-4 text-black">
                        Together, we can reduce SCD deaths and improve lives <br>in Ghana through your support and proven partnerships.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- Banner Area End -->


    @include('partials.donate')


</x-layout>
