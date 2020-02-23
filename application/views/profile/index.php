<section id="intro">
	<div class="intro-overlay"></div>
	<div class="intro-content">
		<div class="row">
			<div class="col-twelve">
				<h5>Hi, there..</h5>
				<h1>I'm Firman Anggara</h1>
				<p class="intro-position">
					<span>Back-end Developer</span>
					<span>Freelancer</span>
				</p>
				<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>
				<a class="button stroke smoothscroll" href="javascript:void(0);" title="" onclick="underConstruction()">Code Practice</a>
			</div>
		</div>
	</div> 
	<ul class="intro-social">
		<li><a href="https://www.linkedin.com/in/firman-tri-anggara-764454146/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
		<li><a href="https://api.whatsapp.com/send?phone=6285642169665" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
		<li><a href="https://www.instagram.com/firmantria_" target="_blank"><i class="fab fa-instagram"></i></a></li>
	</ul> 
</section> 
<section id="about">
	<div class="row section-intro">
		<div class="col-twelve">
			<h5>About Me</h5>
			<h1>Let me introduce myself.</h1>
			<div class="intro-info">
				<img src="<?= base_url()?>asset/images/<?= $profile['foto']?>" alt="Profile Picture">
				<p class="lead"><?= $profile['deskripsi'] ?></p>
			</div>
		</div>
	</div> 
	<div class="row about-content">
		<div class="col-six tab-full">
			<h3>Profile</h3>
			<p>Below is my short profile.</p>
			<ul class="info-list">
				<li>
					<strong>Fullname:</strong>
					<span><?= $profile['nama']?></span>
				</li>
				<li>
					<strong>Job:</strong>
					<span><?= $profile['job']?></span>
				</li>
				<li>
					<strong>LinkedIn:</strong>
					<span><a href="<?= $profile['linked_in']?>">Go to <i
								class="fab fa-linkedin"></i></a></span>
				</li>
				<li>
					<strong>Email:</strong>
					<span><?= $profile['email']?></span>
				</li>
				<li>
					<strong>WhatsApp:</strong>
					<span><?= $profile['whatsapp']?></span>
				</li>
			</ul>
		</div>
		<div class="col-six tab-full">
			<h3>Skills</h3>
			<p>Technologies that I have learn and use for some projects :</p>
			<div class="row">
				<?php for ($i=0; $i < count($skill); $i++):?>
				<div class="col-six">
					<ul class="skill-bars">
						<?php for ($x=0; $x < count($skill[$i]); $x++):?>
						<li>
							<strong><?= $skill[$i][$x]['nama']?></strong>
						</li>
						<?php endfor?>
					</ul>
				</div>
				<?php endfor?>
			</div>
		</div>
	</div>
	<div class="row button-section">
		<div class="col-twelve">
			<a href="#contact" title="Get In Touch" class="button stroke smoothscroll">Get In Touch</i></a>
			<!-- <a href="javascript:void(0)" title="Download CV" onclick="underConstruction()"
				class="button button-primary">Download CV</a> -->
		</div>
	</div>
</section> 
<section id="resume" class="grey-section">
	<div class="row section-intro">
		<div class="col-twelve">
			<h5>Resume</h5>
			<h1>More of my credentials.</h1>
			<p class="lead">
				The following is information about my work experience and education levels.</p>
		</div>
	</div>
	<div class="row resume-timeline">
		<div class="col-twelve resume-header">
			<h2>Work Experience</h2>
		</div> 
		<div class="col-twelve">
			<?php for ($i=0; $i < count($kerja); $i++):?>
			<div class="timeline-wrap">
				<div class="timeline-block">
					<div class="timeline-ico">
						<i class="fa fa-briefcase"></i>
					</div>
					<div class="timeline-header">
						<h3><?= $kerja[$i]['nama']?></h3>
						<p><?= $kerja[$i]['tgl_dari']?> - <?= $kerja[$i]['tgl_sampai']?></p>
						<p><?= $kerja[$i]['kota']?></p>
					</div>
					<div class="timeline-content">
						<h4><?= $kerja[$i]['tempat']?></h4>
						<p><?= $kerja[$i]['deskripsi']?></p>
					</div>
				</div> 
				<?php endfor?>
			</div> 
		</div> 
	</div> 
	<div class="row resume-timeline">
		<div class="col-twelve resume-header">
			<h2>Education</h2>
		</div> 
		<div class="col-twelve">
			<div class="timeline-wrap">
				<?php for ($i=0; $i < count($pendidikan); $i++):?>
				<div class="timeline-block">
					<div class="timeline-ico">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="timeline-header">
						<h3><?= $pendidikan[$i]['jenjang']?></h3>
						<p><?= $pendidikan[$i]['tahun_alumni']?> Alumni</p>
					</div>
					<div class="timeline-content">
						<h4><?= $pendidikan[$i]['instansi']?></h4>
						<p><?= $pendidikan[$i]['deskripsi']?></p>
					</div>
				</div> 
				<?php endfor?>
			</div> 
		</div> 
	</div> 
</section> 
<!--<section id="portfolio">
	<div class="row section-intro">
		<div class="col-twelve">
			<h5>My Products</h5>
			<h1>Check Out Some of My Works.</h1>
			<p class="lead">The following are some products that I have worked on with my team.</p>
		</div>
	</div>
	<div class="row portfolio-content">
		<div class="col-twelve">
			<div id="folio-wrapper" class="block-1-2 block-mob-full stack">
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="<?= base_url()?>asset/portofolio-img/saveralnco.png" alt="Liberty">
						<a href="#modal-01" class="overlay">
							<div class="folio-item-table">
								<div class="folio-item-cell">
									<h3 class="folio-title">Toko Saveral</h3>
									<span class="folio-types">
										E-Commerce
									</span>
								</div>
							</div>
						</a>
					</div>
				</div> 
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="<?= base_url()?>asset/portofolio-img/marcomm.png" alt="Shutterbug">
						<a href="#modal-02" class="overlay">
							<div class="folio-item-table">
								<div class="folio-item-cell">
									<h3 class="folio-title">Website Mukti Marcomm Sedaya</h3>
									<span class="folio-types">
										Decision support system
									</span>
								</div>
							</div>
						</a>
					</div>
				</div> 
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="<?= base_url()?>asset/portofolio-img/toboali.png" alt="Shutterbug">
						<a href="#modal-03" class="overlay">
							<div class="folio-item-table">
								<div class="folio-item-cell">
									<h3 class="folio-title">PSB SMP Toboali</h3>
									<span class="folio-types">
										Web Development
									</span>
								</div>
							</div>
						</a>
					</div>
				</div> 
				<div class="bgrid folio-item">
					<div class="item-wrap">
						<img src="<?= base_url()?>asset/portofolio-img/hanif-bakery.png" alt="Shutterbug">
						<a href="#modal-04" class="overlay">
							<div class="folio-item-table">
								<div class="folio-item-cell">
									<h3 class="folio-title">Hanif Bakery</h3>
									<span class="folio-types">
										Web Development
									</span>
								</div>
							</div>
						</a>
					</div>
				</div> 

				<div id="modal-01" class="popup-modal slider mfp-hide">
					<div class="media">
						<img src="<?= base_url()?>asset/portofolio-img/saveralnco.png" alt="" />
					</div>
					<div class="description-box">
						<h4>Toko Saveral</h4>
						<p>A clothing store called Toko Saveral where people can place an order through the website and verify the order process by admin. The website can provide notification to the admin when there is a new order. My job here are design and create database, develop admin website and run email notification logic.</p>
						<div class="categories"><i class="fas fa-sort"></i> E-Commerce</div>
					</div>
					<div class="link-box">
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div> 
				<div id="modal-02" class="popup-modal slider mfp-hide">
					<div class="media">
						<img src="<?= base_url()?>asset/portofolio-img/marcomm.png" alt="" />
					</div>
					<div class="description-box">
						<h4>Website Mukti Marcomm Sedaya</h4>
						<p>This website is a website that has a Decision Support System concept. This website implements AHP algorithm. The purpose of this website is to help users in this case is corporate leaders in determining the right placement based on predetermined criteria.</p>
						<div class="categories"><i class="fas fa-sort"></i> Decision support system</div>
					</div>
					<div class="link-box">
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div>
				<div id="modal-03" class="popup-modal slider mfp-hide">
					<div class="media">
						<img src="<?= base_url()?>asset/portofolio-img/toboali.png" alt="" />
					</div>
					<div class="description-box">
						<h4>PSB SMP Toboali</h4>
						<p>This website is a new student registration website at a junior high school. This website was developed using the CodeIgniter 3 Framework. My role on this website is to design a database, create a database, and run the programming logic of the website. There are 2 main website pages that are in 1 project, namely the control page used by the admin to control the data and the registration page that is used by prospective students to register.</p>
						<div class="categories"><i class="fas fa-sort"></i> Web Development</div>
					</div>
					<div class="link-box">
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div>
				<div id="modal-04" class="popup-modal slider mfp-hide">
					<div class="media">
						<img src="<?= base_url()?>asset/portofolio-img/hanif-bakery.png" alt="" />
					</div>
					<div class="description-box">
						<h4>Hanif Bakery</h4>
						<p>This website is a sales website used by one of Yogyakarta Amikom University students. My job in this website is to add a very simple message feature that almost similar to a live chat. This feature runs in the user page section and in the control/admin page section. This feature can receive messages, reply to messages directly, and also send messages.</p>
						<div class="categories"><i class="fas fa-sort"></i> Web Development</div>
					</div>
					<div class="link-box">
						<a href="#" class="popup-modal-dismiss">Close</a>
					</div>
				</div>
			</div>
		</div> 
	</div> 
</section> 
-->
<section id="services">
	<div class="overlay"></div>
	<div class="row section-intro">
		<div class="col-twelve">
			<h5>Services</h5>
			<h1>What Can I Do For You?</h1>
			<p class="lead">In building a website, many things are needed by web developers. The following are things that
				I can do to support the Web Development or website-based Information System.</p>
		</div>
	</div> 
	<div class="row services-content">
		<div id="owl-slider" class="owl-carousel services-list">
			<?php for ($i=0; $i < count($service); $i++):?>
			<div class="service">
				<span class="icon"><i class="<?= $service[$i]['icon']?>"></i></span>
				<div class="service-content">
					<h3><?= $service[$i]['judul']?></h3>
					<p class="desc"><?= $service[$i]['deskripsi']?></p>
				</div>
			</div>
			<?php endfor?>
		</div> 
	</div> 
</section> 
<section id="contact">
	<div class="row section-intro">
		<div class="col-twelve">
			<h5>Contact</h5>
			<h1>I'd Love To Hear From You.</h1>
			<p class="lead">Feel free to get in touch.<br>Fill out the form below to send me a message and I will get back to you as soon as possible.</p>
		</div>
	</div> 
	<div class="row contact-form">
		<div class="col-twelve">
			<form id="contact-form" method="post" action="<?= base_url('add-inbox')?>">
				<fieldset>
					<div class="form-field">
						<input name="nama" type="text" id="contactName" placeholder="Your Name" value="" minlength="2"
							required>
					</div>
					<div class="form-field">
						<input name="email" type="email" id="contactEmail" placeholder="Your Email" value="" required>
					</div>
					<div class="form-field">
						<input name="subject" type="text" id="contactSubject" placeholder="Subject" value="" required>
					</div>
					<div class="form-field">
						<textarea name="message" id="contactMessage" placeholder="Message" rows="10" cols="50"
							required></textarea>
					</div>
					<div class="form-field">
						<button type="button" onclick="submit_email()" class="submitform">Submit</button>
					</div>
				</fieldset>
			</form> 
		</div> 
	</div> 
	<div class="row contact-info">
		<div class="col-four tab-full">
			<div class="icon">
				<i class="icon-pin"></i>
			</div>
			<h5>Where to find me</h5>
			<p>
				Jalan P. Puger 1 No. 17A, Puyeran, Maguwoharjo, Depok, Sleman, Daerah Istimewa Yogyakarta 55281<br>
			</p>
		</div>
		<div class="col-four tab-full collapse">
			<div class="icon">
				<i class="icon-mail"></i>
			</div>
			<h5>Email Me At</h5>
			<p>firmantrianggara@gmail.com</p>
		</div>
		<div class="col-four tab-full">
			<div class="icon">
				<i class="icon-phone"></i>
			</div>
			<h5>For business</h5>
			<p><i class="fab fa-whatsapp"></i> WhatsApp: (+62) 85-642-169-665</p>
		</div>
	</div> 
</section> 
<footer>
     	<div class="row">
     		<div class="col-six tab-full pull-right social">
     			<ul class="footer-social">        
				  <li><a href="https://www.linkedin.com/in/firman-tri-anggara-764454146/" target="_blank"><i class="fab fa-linkedin"></i></a>
					</li>
					<li><a href="https://api.whatsapp.com/send?phone=6285642169665" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
					<li><a href="https://www.instagram.com/firmantria_" target="_blank"><i class="fab fa-instagram"></i></a></li>
			   </ul> 
	      </div>
      	<div class="col-eight tab-full">
	      	<div class="copyright">
		        	<span>© Copyright 2018 </span> 
		        	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span> 
		        	<span>Distributed by <a href="https://themewagon.com/">themewagon</a></span>	         	
		         </div>		                  
	      	</div>
	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  
<div id="preloader">
	<div id="loader"></div>
</div>

<script src="<?= base_url() ?>asset/admin/js/jquery.min.js"></script>
<script>
	function underConstruction() {
		swal({
			title: "Oops..",
			text: "This feature is under construction.",
			icon: "error",
			buttons: false,
			icon: '<?= base_url()?>/asset/images/segitiga.png',
		})
	}

	function sendingEmail(){
		swal({
			title: "Please wait..",
			text: "Sending your message to Firman Tri Anggara.",
			icon: "error",
			buttons: false,
			icon: '<?= base_url()?>/asset/images/send-email-2.png',
		})
	}

	function submit_email(){
		sendingEmail();
		$.ajax({
			type: 'post',
			url: '<?= base_url('add-inbox')?>',
			data: $('#contact-form').serialize(),
			success: function(res){
				if(res == 0){
					// gagal
					swal({
						title: "Oops..",
						text: "Please, all form column is required.",
						icon: "error",
						buttons: false,
					})
				}else{
					// berhasil
					$('#contactName').val('');
					$('#contactEmail').val('');
					$('#contactSubject').val('');
					$('#contactMessage').val('');

					swal({
						title: "Thank You",
						text: "Your message is sent. I'll text you via email a.s.a.p.",
						icon: "success",
						buttons: false,
					})
				}
			}
		});
	}

</script>
