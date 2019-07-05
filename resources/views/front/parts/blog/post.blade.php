@extends('front.layouts.blog')

@section('title', $post->title)

@section('meta-description', '✍ Noticia sobre ' . $post->title)

@section('content')
    <section id="blog-sidebar" class="pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-last">
                    <div class="blog-details mt-50">
                        <div class="image">
                            <img src="{{ asset('front/images/blog/'.$post->photo) }}" alt="Blog Details">
                        </div>
                        <div class="content">
                            <h4 class="mt-25">{{ $post->title }}</h4>
                            <div class="date mt-10">
                                <ul>
                                    <li><a href="#"><i
                                                    class="flaticon-calendar"></i> {{ Date::parse($post->create)->format('d F Y') }}
                                        </a></li>
                                </ul>
                            </div>
                            <p class="mt-15">{!! $post->body !!}</p>
                        </div> <!-- content -->

                        <div class="tags-share clearfix mt-45 pt-10 pb-25">
                            <div class="share d-flex float-md-right pt-15">
                                <span>Compartir :</span>
                                <ul>
                                    <div class="addthis_inline_share_toolbox"></div>
                                </ul>
                            </div> <!-- share -->
                        </div> <!-- tags share -->

                    </div> <!-- blog details -->
                </div>
                @include('front.parts.blog.aside')
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection