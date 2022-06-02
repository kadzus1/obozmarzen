@extends('layouts.app')

@section('content')
<div class="container">
  
<link rel="stylesheet" href="{{asset('/css/main.css')}}" />
<noscript><link rel="stylesheet" href="{{asset('/css/noscript.css')}}" /></noscript>

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
<div class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
    <h3 class="mt-0 mb-5">Obozy <span class="text-primary">{{count($obozy)}}</span></h3>
                <h6 class="text-uppercase font-weight-bold mb-3">Kategorie</h6>
                <div class="mt-2 mb-2 pl-2">
                        @foreach($categories as $category)
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-{{$category->id}}">
                        <label class="custom-control-label" for="category-{{$category->id}}">{{$category->name}}</label>
                    </div>
                         @endforeach
                </div>
</div>
						<!-- One -->
							<section id="one" class="tiles">
                                                            @foreach($obozy as $oboz)
								<article>
									<span class="image">
                                                                                <img src="{{ asset('storage/' .$oboz->image_path) }}" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">
                                                                           
									</span>
									<header class="major">
										<h3><a href="kids.html" class="link">{{$oboz->name}}</a></h3>
                                                                                <h3>{{$oboz->price}} PLN</h3>
									</header>
                                                                    
								</article>@endforeach
							</section>
					</div>
                                



				<!-- Contact -->
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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
</div>
@endsection