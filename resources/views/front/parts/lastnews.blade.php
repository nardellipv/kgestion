<section id="latest-news" class="pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3>Últimos Posts</h3>
                    <div class="underline">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="support-btn text-center d-none d-lg-block">
                        <a class="main-btn" href="{{ route('blog') }}">Leer Nuestro Blog</a>
                    </div>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="singel-news mt-30">
                        <div class="news-thumb">
                            <img src="{{ asset('front/images/blog/') }}" alt="Latest News">
                        </div>
                        <div class="news-content">
                            <div class="share">
                                <a href="#"><i class="flaticon-share"></i></a>
                            </div>
                            <a href="{{ url('blog', $post->slug) }}" class="mb-15"><h4>{{ $post->title }}</h4>
                            </a>
                            <p class="mb-20">{{ str_limit($post->body, 100) }}</p>
                        </div>
                        <div class="date-details">
                            <span class="date"><a href="#">{{ Date::parse($post->create)->format('d F Y') }}</a></span>
                            <span class="details"><a href="{{ url('blog', $post->slug) }}">Leer más <i
                                            class="flaticon-right-arrow"></i></a></span>
                        </div>
                    </div> <!-- singel news -->
                </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->
</section>