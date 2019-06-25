<div class="col-lg-4 order-lg-first">
    <div class="blog-sidebar ">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8">
                <div class="recent-post mt-50 rounded">
                    <div class="title">
                        <h4>Últimos Posts</h4>
                    </div> <!-- title -->
                    <ul>
                        @foreach($lastPosts as $lastPost)
                            <li>
                                <a href="{{ url('blog', $lastPost->slug) }}">
                                                <span class="single-post mt-30">
                                                    <span class="image">
                                                        <img src="{{ $lastPost->photo }}"
                                                             alt="post" width="30%">
                                                    </span>
                                                    <span class="content pl-85">
                                                        <h6>{{ $lastPost->title }}</h6>
                                                        <span><i class="flaticon-calendar"></i>{{ Date::parse($lastPost->create)->format('d F Y') }}</span>
                                                    </span>
                                                </span> <!-- single post -->
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div> <!-- recent post -->
            </div>
        </div> <!-- row -->
    </div> <!-- blog sidebar -->
</div>