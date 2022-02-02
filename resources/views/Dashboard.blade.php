@extends('general_structure')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main')
    <div class="header__nav" style="float:right; margin-right:50px;">
        <nav class="header__menu mobile-menu">
            <ul>
                <li><a href="#">Select Language <span class="arrow_carrot-down"></span></a>
                    <ul class="dropdown">
                        <li><a href="{{asset('Dashboard_Ar')}}">Arabic</a></li>
                        <li><a href="{{asset('Dashboard')}}">English</a></li>    
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <?php $the_hero = App\HeroSection::all(); ?>
            <div class="hero__slider owl-carousel">
                @foreach($the_hero as $hero)
                <div class="hero__items set-bg" data-setbg="{{voyager::image(@$hero->image)}}">
                    <div class="row"> 
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">{{@$hero->theme}}</div>
                                <h2 style="color:black;">{{@$hero->name}}</h2>
                                <p style="color:black;">{{@$hero->short_discription}}</p>
                                <a href="#"><span>Read Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                
                            </div>
                        </div>
                        
                        <div class="row">
                            @foreach($mangas as $manga)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                
                                <a href="{{route('Manga_detail',['id' => @$manga->id ])}}">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="{{voyager::image(@$manga->cover_image)}}">
                                            <div class="ep">
                                                <!--
                                                    // here is the number of chapters
                                                 -->
                                            </div>
                                            <!--
                                                //in the future we want to add a comment section and the view number in each manga that's what this section for
                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>-->
                                        </div>
                                        <div class="product__item__text">
                                        <ul>
                                            <li><a href="#">Anime</a></li>
                                            <li><a href="{{route('Manga_detail',['id' => @$manga->id ])}}">Manga</a></li>
                                        </ul>
                                        <h5><a href="#"><span style="font-family: UnifrakturMaguntia;">{{@$manga->name}}</span></a></h5>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            @endforeach
                            {{ @$mangas->links() }}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    
@endsection
@section('title')
Dashboard
@endsection

