@extends('body')
@section('content')
    <main>

        <!--Title Start-->

        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>Relax & Read</h3>
                <h1>Beautiful Yet Amazing Stories</h1>
                <button class="btn">Enjoy</button>
            </div>
        </section>

        <!--Title End-->

        <!--Blog Start-->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="/assets/bg5.png" alt="post-1">
                            <div class="blog-title">
                                <h3>Membaca cerpen</h3>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="/assets/bg10.png" alt="post-1">
                            <div class="blog-title">
                                <h3>Membuat cerpen</h3>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="/assets/bg8.png" alt="post-1">
                            <div class="blog-title">
                                <h3>Membagikan kreativitas</h3>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="/assets/bg7.png" alt="post-1">
                            <div class="blog-title">
                                <h3>For You 120 Years to the Future</h3>
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <!--Blog End-->

        <!--Post Start-->
        <h1>Cerpen Terbaru</h1>
        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        @foreach($isi as $i)
                        <div class="post-image">
                            <div>
                                <img src="/assets/bg5.png" class="img" alt="blog1">
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">{{$i->judul}}</a>
                            <h3>oleh, {{$i->pengarang}}<h3>
                            <p>{{$i->deskripsi}}</p>
                        </div>
                        @endforeach
                    </div>
                    <hr>
                </div>
            </div>
        </section>

        <!--Post Start-->

        <!--Footer Start-->
    </main>

    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p></p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img src="/assets/bg3.png" alt="insta1">
                    <img src="/assets/bg4.jpg" alt="insta2">
                    <img src="/assets/bg12.png" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="/assets/bg2.png" alt="insta4">
                    <img src="/assets/bg.png" alt="insta5">
                    <img src="/assets/bg13.png" alt="insta6">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p>Let's Be Friend, Lucky</p>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2020 All rights reserved | made by
                <a href="" target="_black">MiniStry Team</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!--Footer End-->
</body>

</html>
@endsection