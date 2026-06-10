<x-layout title="Our Board">

    <!-- Our Board Start -->
    <div class="help-area pt-10 pb-115 ptb-sm-60 ">
        <div class="container">
            <div class="section-title text-center ">
                <h1 class="text-danger">Our Board</h1>
            </div>
        </div>

        @php
            // Pull the President & CEO out so they can be featured at the top centre.
            $featured = collect($board)->firstWhere('name', 'Awo Twumasi');
            $rest = collect($board)->reject(fn ($p) => ($p['name'] ?? null) === 'Awo Twumasi')->values();
        @endphp

        <div class="container my-5">

            @if($featured)
                <!-- Featured (top centre) -->
                <div class="row justify-content-center g-4 mb-4">
                    <div class="col-12 col-md-4">
                        <div class="card h-100 text-center shadow-sm">
                            <img src="{{ asset('img/team' . $featured['photo']) }}" class="card-img-top" style="height: 320px; object-fit: cover; object-position: top;" alt="{{ $featured['alt'] }}">
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $featured['name'] }}</h5>
                                <p class="text-muted mb-2">{{ $featured['position'] }}</p>
                                <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#bioModal{{ $featured['id'] }}">
                                    View Bio
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Remaining board members (3 x 3) -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($rest as $person)
                    <div class="col">
                        <div class="card h-100 text-center shadow-sm">
                            <img src="{{ asset('img/team' . $person['photo']) }}" class="card-img-top" style="height: 320px; object-fit: cover; object-position: top;" alt="{{ $person['alt'] }}">
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $person['name'] }}</h5>
                                <p class="text-muted mb-2">{{ $person['position'] }}</p>
                                <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#bioModal{{ $person['id'] }}">
                                    View Bio
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Modals for every board member -->
            @foreach($board as $person)
                <div class="modal fade" id="bioModal{{ $person['id'] }}" tabindex="-1" aria-labelledby="bioModalLabel{{ $person['id'] }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title px-4" id="bioModalLabel{{ $person['id'] }}">{{ $person['name'] }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                                <p class="px-4 mb-1"><strong>Position:</strong> {{ $person['position'] }}</p>
                                <hr>
                                <div class="p-4">
                                    @foreach(preg_split("/\r\n|\n|\r/", $person['bio']) as $paragraph)
                                        @if(trim($paragraph) != '')
                                            <p>{{ $paragraph }}</p>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn  btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!-- Our Staff End -->



</x-layout>
