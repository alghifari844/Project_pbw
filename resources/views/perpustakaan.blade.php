@extends('body')
@section('content')

        <div>
            <form action="/project/perpustakaan/search" method="get">
                <div class="search">
                    <input type="search" name="search" placeholder="Search..">
                    <button type="submit">Search</button>
                </div>
            </form>
        </div>
        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        @foreach($isi as $i)
                        <div class="post-title">
                            <h1 href="#">{{$i->judul}}</h1>
                            <h3>oleh, {{$i->pengarang}}<h3>
                            <p>{{$i->deskripsi}}</p>
                        </div>
                        @endforeach
                    </div>
                    <hr>
                </div>
            </div>
        </section>
</body>
@endsection