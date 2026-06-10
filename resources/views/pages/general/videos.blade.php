<x-layout title="Videos">
    <!-- Videos Area Start -->
    <div class="videos-page pt-115 pb-120 ptb-sm-60">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h1 class="text-black">Videos</h1>
            </div>

            @if(!empty($videos))
                <div class="row g-4">
                    @foreach($videos as $video)
                        <div class="col-12 col-md-6">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="video-embed ratio ratio-16x9"
                                     data-video-id="{{ $video['id'] }}"
                                     style="cursor: pointer; background: #000;">
                                    <img src="https://img.youtube.com/vi/{{ $video['id'] }}/hqdefault.jpg"
                                         alt="{{ $video['title'] }}"
                                         style="width: 100%; height: 100%; object-fit: cover;">
                                    <span class="video-play-btn">&#9658;</span>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0 fw-semibold text-black">{{ $video['title'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-muted">No videos available at the moment.</p>
            @endif
        </div>
    </div>
    <!-- Videos Area End -->

    <style>
        .video-embed { position: relative; overflow: hidden; }
        .video-embed .video-play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            line-height: 70px;
            text-align: center;
            border-radius: 50%;
            background: rgba(220, 53, 69, 0.9);
            color: #fff;
            font-size: 28px;
            padding-left: 5px;
            transition: background 0.2s ease, transform 0.2s ease;
            pointer-events: none;
        }
        .video-embed:hover .video-play-btn {
            background: rgba(220, 53, 69, 1);
            transform: translate(-50%, -50%) scale(1.08);
        }
    </style>

    <script>
        document.querySelectorAll('.video-embed').forEach(function (box) {
            box.addEventListener('click', function () {
                var id = box.getAttribute('data-video-id');
                if (!id) return;
                var iframe = document.createElement('iframe');
                iframe.setAttribute('src', 'https://www.youtube-nocookie.com/embed/' + id + '?autoplay=1&rel=0');
                iframe.setAttribute('title', 'YouTube video player');
                iframe.setAttribute('frameborder', '0');
                iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                iframe.setAttribute('allowfullscreen', '');
                box.innerHTML = '';
                box.style.cursor = 'default';
                box.appendChild(iframe);
            });
        });
    </script>
</x-layout>
