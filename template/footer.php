<section class="footer">
			<div class="container">
				<div class="footer__flex">
					<div class="foot-flex">
						<div class="footer__logo">
							<object type="image/svg+xml" data="img/footer/logo fut1.svg" width="100%"></object>
							<div class="footer__mail"> e-mail: apollonia23@mail.ru</div>
							<div class="footer__price"><a href="##">Посмотреть прайс</a></div>
							<!-- <div class="footer__price"><a href="pdf/Прайс-лист.pdf"target="_blank">Посмотреть прайс</a></div> -->
						</div>
					</div>
					<div class="foot-flex">
						<div class="footer__information">
							<p>Общая информация</a></p>
							<li><a href="about.php">О клинике</a></li>
							<li><a href="#" onclick="slowScroll('#contacts')">Контакты</a></li>
							<li><a href="#">Вопрос-ответ</a></li>
							<li><a href="#">Карта сайта</a></li>
							<li><a href="about.php">Правовая информация</a></li>
							<li><a href="privacy.php">Политика конфидиценциалильности</a></li>
						</div>
					</div>
					<div class="foot-flex">
						<div class="footer__contacts">
							<div class="foot-contact">
								<div class="foot-contact-phone">
									<img src="img/footer/call1.png" alt="">
								</div>
								<div class="foot-tel">
									<div class="foot__tel-1">
										<a href="tel:+78612333142" class="foot-number1">8 (861) 233-31-42
										</a>
									</div>
									<div class="foot__tel-2">
										<a href="tel:+79184664484" class="foot-number2">8 (918) 466-44-84
										</a>
									</div>
								</div>
								<!-- <div class="foot-info-tel">
						<div class="foot__information-tel">
							<a href="#" class="foot__information-link"><img src="img/footer/importance fut.png" alt=""></a>
						</div>
					</div> -->
							</div>
							<div class="footer__social">
								<a href="#"><img src="img/footer/icons8-instagram-35.png" alt=""></a>
								<a href="#"><img src="img/footer/icons8-youtube-в-квадрате-35.png" alt=""></a>
								<a href="#"><img src="img/footer/icons8-вконтакте-35.png" alt="" "></a>
					<a href=" #"><img src="img/footer/icons8-facebook-35.png" alt=""></a>
							</div>
							<div class="footer__support">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom">
				<p>© 2003 - 2020 Аполлония | Стоматологическая клиника</p>
			</div>
		</section>

		<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->


		<!--ПОПАП!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->

		<div id="popup" class="popup">
			<div class="popup__body">
				<div class="popup__content">
					<a href="##" class="popup__close close-popup"></a>
					<form action="#" id="form" class="form__body">
						<div class="form__tittle">Запись на прием</div>
						<p class="info__form">Введите свои данные. Администратор свяжется с Вами и поможет выбрать
							удобное время для визита в клинику.</p>
						<div class="form__item">
							<label for="formName" class="form__label">Введите ваше имя*:</label>
							<input id="formName" type="text" name="name" class="form__input _req"
								placeholder="Например, Иван">
						</div>
						<div class="form__item">
							<label for="formTell" class="form__label">Введите ваш телефон*:</label>
							<input id="formTell" type="text" name="tell" class="form__input _req"
								placeholder="+7(___) ___-__-__">
						</div>
						<div class="form__item">
							<div class="form__label">Время удобное для звонка</div>
							<select name="time" class="form__time">
								<option value="Любое" selected="selected">Любое</option>
								<option value="Утром">C 8 До 12</option>
								<option value="Днем">С 12 до 16</option>
								<option value="Вечером">С 16 до 20</option>
							</select>
						</div>
						<div class="form__item">
							<label for="formMessage" class="form__label">Сообщение:</label>
							<textarea name="message" id="formMessage" cols="30" rows="10"
								class="form__input"></textarea>
						</div>
						<div class="form__item">
							<div class="checkbox">
								<input id="formAgreement" type="checkbox" name="agreement" class="checkbox__input _req">
								<label for="formAgreement" class="checkbox__label"><span>Я даю свое согласие на
										обработку перслональных данных в соответствии с <a
											href="agreement.php">Условиями</a>*</span></label>
							</div>
						</div>
						<div class="form__btn">
							<button type="submit" class="form__button">Отправить</button>
						</div>
					</form>
				</div>
			</div>

		</div>




	<!-- ОТЗЫВЫ  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->


			
	<div id="popup2" class="popup">
				<div class="popup__body">
					<div class="popup__content">
						<a href="##" class="popup__close close-popup"></a>
						<form action="#" id="form2" class="form__body">
							<div class="form__tittle">Ваш отзыв о нашей клинике</div>
							<p class="info__form">Введите ваши данные и отзыв, мы будем вам благодарны !</p>

							<div class="form__item">
								<label for="formName" class="form__label">Введите ваше имя <span style="color:red">*</span> </label>
								<input id="formName" type="text" name="name2" class="form__input _req2"
									placeholder="Например, Иван">
							</div>

							<div class="form__item">
								<label for="formSecondName" class="form__label">Введите вашу Фамилию</label>
								<input id="formSecondName" type="text" name="Secondname" class="form__input"
									placeholder="Например, Петров">
							</div>

							<div class="form__item">
								<label for="formTell2" class="form__label">Введите ваш телефон</label>
								<input id="formTell2" type="text" name="tell2" class="form__input"
									placeholder="+7(___) ___-__-__">
							</div>

							<div class="form__item">
								<label for="formMessage2" class="form__label">Ваш отзыв <span style="color:red;font-size: 20px">*</span></label>
								<textarea name="message2" id="formMessage2" cols="30" rows="10"
									class="form__input _req2"></textarea>
							</div>

							<div class="form__item">
								<div class="checkbox">
									<input id="formAgreement2" type="checkbox" name="agreement2"
										class="checkbox__input _req2">
									<label for="formAgreement2" class="checkbox__label"><span>Я даю свое согласие
											на
											обработку перслональных данных в соответствии с <a
												href="agreement.html">Условиями</a><span style="color:red;font-size: 20px">*</span></span></label>
								</div>
							</div>
							
							<div class="form__btn">
								<button type="submit" class="form__button">Отправить</button>
							</div>
						</form>
					</div>
				</div>
	
			</div>




		<!-- ПОПАП!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->



		<script src="https://code.jquery.com/jquery-3.5.1.js"
			integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="js/main.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
			type="text/javascript"></script>
		<script>
			$(document).ready(function () {
				$("#formTell").mask("+7(999) 999-99-99");
			});
		</script>
		<script>
				$(document).ready(function () {
					$("#formTell2").mask("+7(999) 999-99-99");
				});
			</script>
		<script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
		<script src="slick/slick.min.js"></script>
		<script>
			$(document).ready(function () {
				$('.regular').slick({
					dots: true,
					infinite: true,
					arrows: true,
					nextArrow: document.querySelector('.next'),
					prevArrow: document.querySelector('.prev'),
					autoplay: true,
					speed: 1500,
					pauseOnHover: true,
					// pauseOnHover: false,
					pauseOnDotsHover: false,
					fade: true,
				});
			});
		</script>
		<script>
			$('.center').slick({
				centerMode: true,
				centerPadding: '60px',
				slidesToShow: 3,
				responsive: [{
						breakpoint: 768,
						settings: {
							arrows: false,
							centerMode: true,
							centerPadding: '40px',
							slidesToShow: 3
						}
					},
					{
						breakpoint: 480,
						settings: {
							arrows: false,
							centerMode: true,
							centerPadding: '40px',
							slidesToShow: 1
						}
					}
				]
			});
		</script>
		<script>
				$('.one-time').slick({
					arrows: false,
					autoplay: true,
					dots: true,
					speed: 900,
					slidesToShow: 1,
					adaptiveHeight: true,
					pauseOnHover: true,
					pauseOnDotsHover: false,
				});
			</script>
</body>

</html>