<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8" />
	<title>Aldi Zulfikar</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css') }}/font-awesome.css" />
	<!-- main css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css') }}/style.css" />
	<!-- default color skin -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css') }}/skins/color-1.css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css') }}/responsive.css" />
</head>

<body>
	<!--Header start-->
	<header class="header">
		<div class="container">
			<div class="row justify-content-between">
				<div class="hamburger-btn outer-shadow hover-in-shadow">
					<span></span>
				</div>
				<div class="logo">
					<a href="/">a</a>
				</div>
			</div>
		</div>
	</header>
	<!--Header end-->

	<!--Navigation menu start-->
	<nav>
		<ul class="sidebar">
			<li class="nav-item">
				<a data-link="home" class="nav-link">
					<i class="fas fa-home"></i>
					<span class="title">Home</span>
				</a>
			</li>
			<li class="nav-item">
				<a data-link="about" class="nav-link">
					<i class="fas fa-address-card"></i>
					<span class="title">About</span>
				</a>
			</li>
			<li class="nav-item">
				<a data-link="certif" class="nav-link">
					<i class="fas fa-tasks"></i>
					<span class="title">Certifications</span>
				</a>
			</li>
			<li class="nav-item">
				<a data-link="portofolio" class="nav-link">
					<i class="fas fa-book"></i>
					<span class="title">Portofolio</span>
				</a>
			</li>
			<li class="nav-item">
				<a data-link="testimonial" class="nav-link">
					<i class="fas fa-comments"></i>
					<span class="title">Testimonial</span>
				</a>
			</li>
			<li class="nav-item">
				<a data-link="contact" class="nav-link">
					<i class="fas fa-mail-bulk"></i>
					<span class="title">Contact</span>
				</a>
			</li>
		</ul>
	</nav>
	<!--Navigation menu end-->

	<!--Home section star-->
	<section class="home-section section active" id="home">
		<!--effect section start-->
		<div class="effect-wrap">
			<div class="effect effect-1"></div>
			<div class="effect effect-2">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
			<div class="effect effect-3"></div>
			<div class="effect effect-4"></div>
			<div class="effect effect-5">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<!--effect section end-->
		<div class="container">
			<div class="row full-screen align-items-center">
				<div class="home-text">
					<p>Hello</p>
					<h2>Aldi Zulfikar</h2>
					<h1>Back-End developer</h1>
					<a href="#about" class="link-item btn-1 outer-shadow hover-in-shadow">More About Me</a>
				</div>
				<div class="home-img">
					<div class="img-box inner-shadow">
						<img src="img/profile-pict.png" class="outer-shadow" alt="profile-pic" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Home section end-->

	<!--about section start-->
	<section class="about-section section" id="about">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<h2 data-heading="main info">About me</h2>
				</div>
			</div>
			<div class="row">
				<div class="about-img">
					<div class="img-box inner-shadow">
						<img src="img/profile-pict.png" class="outer-shadow" alt="profile-pic" />
					</div>
					<!--Social link start-->
					<div class="social-links">
						<a href="https://github.com/AldiZulfikar/" class="outer-shadow hover-in-shadow"><i class="fab fa-github"></i></a>
						<a href="https://www.linkedin.com/in/aldi-zulfikar/" class="outer-shadow hover-in-shadow"><i class="fab fa-linkedin-in"></i></a>
						<a href="https://www.instagram.com/aldi_zulfikar/" class="outer-shadow hover-in-shadow"><i class="fab fa-instagram"></i></a>
					</div>
					<!--Social link end-->
				</div>
				<div class="about-info">
					<p>
						<span>Hi! My name is Aldi Zulfikar. Im a Back-End developer.</span> I'm a student of Informatics
						Engineering in State Islamic University of Syarif Hidayatullah Jakarta. I'm a hard working
						person, also honest individual. I'm a good timekeeper and always willing to learn new skills.
						I'm interested in programming language and love as a Back-End Developer.
					</p>
					<a href="{{ asset('CV.pdf') }}" class="btn-1 outer-shadow hover-in-shadow">Download CV</a>
					<a href="#contact" class="link-item btn-1 outer-shadow hover-in-shadow">Hire Me</a>
				</div>
			</div>
			<!--about tabs start-->
			<div class="row">
				<div class="about-tabs">
					<span class="tab-item outer-shadow active" data-target=".skills">Skills</span>
					<span class="tab-item" data-target=".experience">Experience</span>
					<span class="tab-item" data-target=".education">Education</span>
				</div>
			</div>
			<!--about tabs end-->
			<div class="row">
				<div class="skills tab-content active">
					<div class="row">
						<!--Skill item start-->
						<div class="skill-item">
							<p>Html & CSS</p>
							<div class="progress inner-shadow">
								<div class="progress-bar" style="width: calc(90% - 14px)">
									<span>90%</span>
								</div>
							</div>
						</div>
						<!--Skill item end-->
						<!--Skill item start-->
						<div class="skill-item">
							<p>MySQL</p>
							<div class="progress inner-shadow">
								<div class="progress-bar" style="width: calc(80% - 14px)">
									<span>80%</span>
								</div>
							</div>
						</div>
						<!--Skill item end-->
						<!--Skill item start-->
						<div class="skill-item">
							<p>JavaScript</p>
							<div class="progress inner-shadow">
								<div class="progress-bar" style="width: calc(75% - 14px)">
									<span>75%</span>
								</div>
							</div>
						</div>
						<!--Skill item end-->
						<!--Skill item start-->
						<div class="skill-item">
							<p>laravel - 8</p>
							<div class="progress inner-shadow">
								<div class="progress-bar" style="width: calc(80% - 14px)">
									<span>80%</span>
								</div>
							</div>
						</div>
						<!--Skill item end-->
						<!--Skill item start-->
						<div class="skill-item">
							<p>java</p>
							<div class="progress inner-shadow">
								<div class="progress-bar" style="width: calc(80% - 14px)">
									<span>80%</span>
								</div>
							</div>
						</div>
						<!--Skill item start-->
						<div class="skill-item">
							<p>Node.Js</p>
							<div class="progress inner-shadow">
								<div class="progress-bar" style="width: calc(70% - 14px)">
									<span>70%</span>
								</div>
							</div>
						</div>
						<!--Skill item end-->
					</div>
				</div>
			</div>
			<!--Skill end-->
			<!--experience start-->
			<div class="row">
				<div class="experience tab-content">
					<div class="row">
						<div class="timeline">
							<div class="row">
								<!--timeline item start-->
								<div class="timeline-item">
									<div class="timeline-item-inner outer-shadow">
										<i class="fas fa-briefcase icon"></i>
										<span>2020 - Present</span>
										<h3>HIMTI UIN JAKARTA</h3>
										<h4>Academic Division</h4>
										<p>Assigned to make HIMTI Data Bank which contains learning materials and Teach an advanced programming to 28 freshmans</p>
									</div>
								</div>
								<!--timeline item end-->
								<!--timeline item start-->
								<div class="timeline-item">
									<div class="timeline-item-inner outer-shadow">
										<i class="fas fa-briefcase icon"></i>
										<span>2020</span>
										<h3>DUBESTA CAMPUS EXPO 2020</h3>
										<h4>Public Relation</h4>
										<p>Contacted the alumni of SMAN 12 Tangerang</p>
									</div>
								</div>
								<!--timeline item end-->
								<!--timeline item start-->
								<div class="timeline-item">
									<div class="timeline-item-inner outer-shadow">
										<i class="fas fa-briefcase icon"></i>
										<span>2018 - 2019</span>
										<h3>MPK/OSIS SMAN 12 KOTA TANGERANG</h3>
										<h4>Division III MPK</h4>
										<p>Managed the activities of extracurricular SMAN 12 Kota Tangerang</p>
									</div>
								</div>
								<!--timeline item end-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--experience end-->

			<!--Education start-->
			<div class="row">
				<div class="education tab-content">
					<div class="row">
						<div class="timeline">
							<div class="row">
								<!--timeline item start-->
								<div class="timeline-item">
									<div class="timeline-item-inner outer-shadow">
										<i class="fas fa-graduation-cap icon"></i>
										<span>2019 - present</span>
										<h3>UIN Syarif Hidayatullah Jakarta</h3>
										<p>Bachelor Of Informatics Engineering</p>
										<p>GPA: 3.9 (Temporary)</p>
									</div>
								</div>
								<!--timeline item end-->
								<!--timeline item start-->
								<div class="timeline-item">
									<div class="timeline-item-inner outer-shadow">
										<i class="fas fa-graduation-cap icon"></i>
										<span>2016 - 2019</span>
										<h3>SMAN 12 Kota Tangerang</h3>
										<p>Natural Sciences Major</p>
										<p>Average: 87.82</P>
									</div>
								</div>
								<!--timeline item end-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Education end-->
		</div>
	</section>
	<!--about section end-->

	<!--Service selection start-->
	<section class="service-section section" id="certif">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<h2 data-heading="Licenses">Certifications</h2>
				</div>
			</div>
			<div class="row">
				<!--service section start-->
				<div class="service-item">
					<div class="service-item-inner outer-shadow">
						<div class="icon inner-shadow">
							<i class="fas fa-laptop-code"></i>
						</div>
						<h3>Belajar Dasar Pemrogramman Web</h3>
						<p>Dicoding Indonesia</p>
						<span>Credential ID  4EXGYMN09XRL</span>
					</div>
				</div>
				<!--service section end-->
				<!--service section start-->
				<div class="service-item">
					<div class="service-item-inner outer-shadow">
						<div class="icon inner-shadow">
							<i class="fas fa-laptop-code"></i>
						</div>
						<h3>Certified International Data Development Fundamental</h3>
						<p>Purchasing and Supply Association Singapore</p>
						<span>Certification No. CIDFF 01225</span>
					</div>
				</div>
				<!--service section end-->
				<!--service section start-->
				<div class="service-item">
					<div class="service-item-inner outer-shadow">
						<div class="icon inner-shadow">
							<i class="fas fa-laptop-code"></i>
						</div>
						<h3>Belajar Dasar Pemrograman JavaScript</h3>
						<p>Dicoding Indonesia</p>
						<span>Credential ID L4PQMLRWQZO1</span>
					</div>
				</div>
				<!--service section end-->
				<!--service section start-->
				<div class="service-item">
					<div class="service-item-inner outer-shadow">
						<div class="icon inner-shadow">
							<i class="fas fa-laptop-code"></i>
						</div>
						<h3>Belajar Membuat Aplikasi Back-End untuk Pemula</h3>
						<p>Dicoding Indonesia</p>
						<span>Credential ID L4PQMK8KQZO1</span>
					</div>
				</div>
				<!--service section end-->
				<!--service section start-->
				<div class="service-item">
					<div class="service-item-inner outer-shadow">
						<div class="icon inner-shadow">
							<i class="fas fa-laptop-code"></i>
						</div>
						<h3>Architecting on AWS (Membangun Arsitektur Cloud di AWS)</h3>
						<p>Dicoding Indonesia</p>
						<span>Credential ID 72ZD21G39ZYW</span>
					</div>
				</div>
				<!--service section end-->
				<!--service section start-->
				<div class="service-item">
					<div class="service-item-inner outer-shadow">
						<div class="icon inner-shadow">
							<i class="fas fa-laptop-code"></i>
						</div>
						<h3>Cloud Practitioner Essentials (Belajar Dasar AWS Cloud)</h3>
						<p>Dicoding Indonesia</p>
						<span>Credential ID 53XEEGY00XRN</span>
					</div>
				</div>
				<!--service section end-->
			</div>
		</div>
	</section>
	<!--Service selection end-->

	<!--portofolio section start-->
	<section class="portofolio-section section" id="portofolio">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<h2 data-heading="portofolio">Latest Works</h2>
				</div>
			</div>
			<!--portofolio filter end-->
			<div class="row portofolio-item">
				<!--portofolio item start-->
				<div class="portofolio-item" data-category="web-aplication">
					<div class="portofolio-item-inner outer-shadow">
						<div class="portofolio-item-img">
							<img src="img/portfolio/thumb/project-puslitpen.jpg" alt="portfolio" data-screenshots="img/portfolio/large/project-2/1.png,
								img/portfolio/large/project-2/2.png" />
							<!--view project button-->
							<span class="details-project">Client : Ummie Masruroh | On Process</span><br>
						</div>
						<a href="#" class="view-project">View Project</a>
						<p class="portofolio-item-title">Puslitpen UIN Jakarta</p>
					</div>
				</div>
				<!--portofolio item end-->

				<!--portofolio item start
				<div class="portofolio-item" data-category="web-aplication">
					<div class="portofolio-item-inner outer-shadow">
						<div class="portofolio-item-img">
							<img src="img/portfolio/thumb/project-3.png" alt="portfolio" data-screenshots="img/portfolio/large/project-3/1.png,
								img/portfolio/large/project-3/2.png,
								img/portfolio/large/project-3/3.png,
								img/portfolio/large/project-3/4.png,
								img/portfolio/large/project-3/5.png" />
							<!--view project button-
							<span class="details-project">Client : Himti Dev | Date: 01-06-2021</span><br>
						</div>
						<a href="#" class="view-project">View Project</a>
						<p class="portofolio-item-title">Product Landing Page</p>
					</div>
				</div>
				<!--portofolio item end-->
				
				<!--portofolio item start-->
				<div class="portofolio-item" data-category="web-aplication">
					<div class="portofolio-item-inner outer-shadow">
						<div class="portofolio-item-img">
							<img src="img/portfolio/thumb/project-klinik1.jpg" alt="portfolio"/>
							<!--view project button-->
							<span class="details-project">Client: Pramesti | Date: 05-06-2021</span><br>
						</div>
						<a href="http://kliniknurazizah.epizy.com/?i=1" class="view-project">View Project</a>
						<p class="portofolio-item-title">Klinik Nur Azizah</p>
					</div>
				</div>
				<!--portofolio item end-->
			</div>
		</div>
	</section>
	<!--portofolio section end-->

	<!-- Testimonial -->
	<section class="testimonial-section section" id="testimonial">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<h2 data-heading="testimonial">Client Speak</h2>
				</div>
			</div>
			<div class="row">
				<div class="testi-box">
					<div class="testi-slider outer-shadow">
						<div class="testi-slider-container">
							<!-- testi item start -->
							<div class="testi-item active">
								<i class="fas fa-quote-left left"></i>
								<i class="fas fa-quote-right right"></i>
								<p>At all good, dengan harga terjangkau bisa dapat webisite klinik yang bagus seperti ini</p>
								<img src="img/testimonial/1.png" alt="testimonial">
								<span>Pramesti</span>
							</div>
							<!-- testi item end -->
							<!-- testi item start -->
							<div class="testi-item">
								<i class="fas fa-quote-left left"></i>
								<i class="fas fa-quote-right right"></i>
								<p>Bagus websitenya, semua fitur yang saya request berjalan dengan baik</p>
								<img src="img/testimonial/1.png" alt="testimonial">
								<span>Ummie Masruroh</span>
							</div>
							<!-- testi item end -->
							<!-- testi item start -->
							<div class="testi-item">
								<i class="fas fa-quote-left left"></i>
								<i class="fas fa-quote-right right"></i>
								<p>Project holidaynya keren mungkin bisa dikembangkan lagi untuk kedepannya</p>
								<img src="img/testimonial/1.png" alt="testimonial">
								<span>Himti Dev</span>
							</div>
							<!-- testi item end -->
						</div>
					</div>
					<div class="testi-slider-nav">
						<span class="prev outer-shadow hover-in-shadow"><i class="fas fa-angle-left"></i></span>
						<span class="next outer-shadow hover-in-shadow"><i class="fas fa-angle-right"></i></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial end-->

	<!-- contact section -->
	<section class="contact-section section" id="contact">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<h2 data-heading="contact">Get in Touch</h2>
				</div>
			</div>
			<div class="row">
				<!-- contact item start -->
				<div class="contact-item">
					<div class="contact-item-inner outer-shadow">
						<i class="fas fa-phone"></i>
						<span>Phone</span>
						<p>0878-8947-2337</p>
					</div>
				</div>
				<!-- contact item end -->
				<!-- contact item start -->
				<div class="contact-item">
					<div class="contact-item-inner outer-shadow">
						<i class="fas fa-envelope"></i>
						<span>Email</span>
						<p>aldizulfikar04@gmail.com</p>
					</div>
				</div>
				<!-- contact item end -->
				<!-- contact item start -->
				<div class="contact-item">
					<div class="contact-item-inner outer-shadow">
						<i class="fas fa-map-marker-alt"></i>
						<span>Addres</span>
						<p>Kota Tangerang</p>
					</div>
				</div>
				<!-- contact item end -->
			</div>
			<div class="row">
				<div class="contact-form">
					<div class="form">
						<div class="row">
							<div class="w-50">
								<div class="input-group outer-shadow hover-in-shadow">
						<form action="{{ route('send.email') }}" method="post">
                			@csrf
									<input type="text" name="name" placeholder="Name" class="input-control">
									@error('name')
									<span class="input-control"><hr> {{ $message }} </span>
									@enderror
								</div>
								<div class="input-group outer-shadow hover-in-shadow">
									<input type="text" name="email"  placeholder="Email" class="input-control">
									@error('email')
                                	<span class="input-control"><hr> {{ $message }} </span>
                                	@enderror
								</div>
								<div class="input-group outer-shadow hover-in-shadow">
									<input type="text" name="subject" placeholder="Subject" class="input-control">
									@error('subject')
									<span class="input-control"><hr> {{ $message }} </span>
									@enderror
								</div>
							</div>
							<div class="w-50">
								<div class="input-group outer-shadow hover-in-shadow">
									<textarea class="input-control" name="content" placeholder="Content Message"></textarea>
									@error('content')
									<span class="input-control"><hr> {{ $message }} </span>
									@enderror
								</div>
							</div>
							</div>
							<div class="row">
								<div class="submit-btn">
									<button type="submit" class="btn-1 outer-shadow hover-in-shadow">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- main js -->
	@include('sweetalert::alert')
	<script src="{{ asset('js') }}/main.js"></script>
	<!-- style switcher js -->
	<script src="{{ asset('js') }}/style-switcher.js"></script>
</body>

</html>