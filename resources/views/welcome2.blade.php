@extends('layouts.app')

@section('content')
<div class="container">
  
<link rel="stylesheet" href="{{asset('/css/main.css')}}" />
    <div class="inner">
    <header class="major">
    <h1>WYBIERZ SWÓJ OBÓZ MARZEŃ</h1>
    </header>
    <div class="content">
    <p>Morze? Góry? Jeziora? Czy zagraniczne destynacje? Tutaj znajdziesz wszystko czego pragniesz!</p>
    </div>
    </div>

        <div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/kids.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="kids.html" class="link">Obozy dla dzieci (6-12)</a></h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/adult1.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="adults.html" class="link">Obozy dla młodzieży (13-18)</a></h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/sea.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="sea.html" class="link">Obozy nad morzem</a></h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/lake.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="lake.html" class="link">Obozy nad jeziorem</a></h3>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/aboard.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="aboard.html" class="link">Obozy za granicą</a></h3>
									</header>
								</article>
								
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
<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; obozymarzen</li><li>Design: Kaja Nowicka</li>
							</ul>
						</div>
					</footer>
<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>
</div>
@endsection