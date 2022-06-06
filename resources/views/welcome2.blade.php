@extends('layouts.app')

@section('content')
<div class="container">
  
<link rel="stylesheet" href="{{asset('css/main.css')}}" />
<noscript><link rel="stylesheet" href="{{asset('/css/noscript.css')}}" /></noscript>
<script src="{{asset('/js/jquery.min.js')}}"></script>

<html>
	<head>
		<title>Obóz marzeń</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		
	</head>
<body class="is-preload">

        <!-- Wrapper -->
<div id="wrapper">

    <div class="inner">
            <header class="major">
                    <h1>WYBIERZ SWÓJ OBÓZ MARZEŃ</h1>
            </header>
            <div class="content">
                    <p>Morze? Góry? Jeziora? Czy zagraniczne destynacje? Tutaj znajdziesz wszystko czego pragniesz!</p>
            </div>
    </div>

				<!-- Main --> 
<form class="col-md-6 order-md-1"  id="sidebar-filter">
    
    <h3 class="mt-0 mb-5">Obozy <span class="text-primary">{{count($obozy)}}</span></h3>
                <h6 class="text-uppercase font-weight-bold mb-3">Kategorie</h6>
                <div class="mt-2 mb-2 pl-2">
                        @foreach($categories as $category)
                    <div class="col-6 col-12-small">
                        <input type="checkbox" name='filter[categories][]' id='category-{{$category->id}}' value="{{$category->id}}">
                        <label for="category-{{$category->id}}">{{$category->name}}</label>
                    </div>
                         @endforeach
                         <br><a  href="#" class="button" id="filter-button">Filtruj</a>
                </div>
                
</form><br>
<!-- One --><div id="products-wrapper">
<section id="one" class="tiles">
    @foreach($obozy as $oboz)
        <article>
                <span class="image">
                        <img src="{{ asset('storage/obozy/img.php?q=' .$oboz->image_path) }}" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">

                </span>
                <header class="major">
                        <h3><a href="#" class="link">{{$oboz->name}}</a></h3>
                        <h3>{{$oboz->price}} PLN</h3>
                </header>

        </article>
    @endforeach
</section>
</div>
                                
<section id="contact">
<div class="inner">
        <section>
                <form method="post" action="#">
                        <div class="fields">
                                <div class="field half">
                                        <label for="name">Imię</label>
                                        <input type="text" name="name" id="name" />
                                </div>
                                <div class="field half">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" />
                                </div>
                                <div class="field">
                                        <label for="message">Wiadomość</label>
                                        <textarea name="message" id="message" rows="6"></textarea>
                                </div>
                        </div>
                        <ul class="actions">
                                <li><input type="submit" value="Wyślij wiadomość" class="primary" /></li>
                                <li><input type="reset" value="Wyczyść" /></li>
                        </ul>
                </form>
                </section>
<section class="split">
        <section>
                <div class="contact-method">
                        <span class="icon solid alt fa-envelope"></span>
                        <h3>Email</h3>
                        <a href="#">obozy@marzen.pl</a>
                </div>
        </section>
        <section>
                <div class="contact-method">
                        <span class="icon solid alt fa-phone"></span>
                        <h3>Telefon</h3>
                        <span>111-222-333</span>
                </div>
        </section>
        <section>
                <div class="contact-method">
                        <span class="icon solid alt fa-home"></span>
                        <h3>Adres</h3>
                        <span>ul. Będzińska 39<br />
                        Sosnowiec, 11-1000<br /></span>
                </div>
        </section>
</section>
</div>
</section>

<!-- Footer -->
        <footer id="footer">
                <div class="inner">
                        <ul class="copyright">
                                <li>&copy; obozymarzen</li><li>Design: Kaja Nowicka</li>
                        </ul>
                </div>
        </footer>

</div>

<!-- Scripts -->

<script src="{{asset('/js/jquery.scrolly.min.js')}}"></script>
<script src="{{asset('/js/jquery.scrollex.min.js')}}"></script>
<script src="{{asset('/js/browser.min.js')}}"></script>
<script src="{{asset('/js/breakpoints.min.js')}}"></script>
<script src="{{asset('/js/util.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>
<script src="{{asset('/js/welcome2.js')}}"></script>

</body>
</html>
</div>
@endsection
@section('javascript')<!-- comment -->
    const storagePath = '{{ asset('storage/obozy/img.php?q=') }}';
@endsection
