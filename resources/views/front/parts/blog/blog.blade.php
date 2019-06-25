@extends('front.layouts.blog')

@section('meta-description','👉 Enterate de lo último en temas de celiaquia. Publicamos contenido semanalmente para que celíacos Mendocinos este actualizados constantemente.')

@section('content')
    <section id="blog-grid" class="pt-80 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="single-blog mt-50">
                            <div class="blog-image">
                                <img src="{{ $post->photo }}" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <div class="date">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-calendar"></i> {{ Date::parse($post->create)->format('d F Y') }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <a href="{{ url('blog', $post->slug) }}" class="mb-15"><h4>{{ $post->title }}</h4></a>
                                    <p class="mb-15">{{ str_limit($post->body,100)  }}</p>
                                    <a href="{{ url('blog', $post->slug) }}">Leer más <i
                                                class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div> <!-- single blog -->
                    </div>
                @endforeach
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-50">
                            {{ $posts->render() }}
                        </ul>
                    </nav> <!-- pagination -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection