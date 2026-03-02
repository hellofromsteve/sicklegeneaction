<x-layout title="Our Gallery">
    <!-- Gallery Area Start -->
    <div class="gallery-page pt-115 pb-120 ptb-sm-60 gallery-section">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="text-black">Our Gallery</h1>
            </div>
            <div class="gallery-lsit fix">
                <!-- Gallery Item Start -->
                @foreach($images as $img)
                    <div class="gallery-img">
                        {{-- Pass the entire path string into the asset helper --}}
                        <a class="img-popup" href="{{ asset("img/gallery/{$img['img']}") }}">
                            <img src="{{ asset("img/gallery/{$img['img']}") }}"  width="250px" height="230px"
                                 alt="{{ $img['title'] }}">
                        </a>
                        <p>{{ $img['title'] }}</p>
                    </div>
                @endforeach

                <!-- Gallery Item End -->

            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
</x-layout>
