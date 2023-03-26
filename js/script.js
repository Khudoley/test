$(document).ready(function () {
	const da = new DynamicAdapt("max");
	da.init();
	Fancybox.bind("[data-fancybox]");
	AOS.init();
	$('input[type="tel"]').inputmask({ "mask": "+7(999) 999-9999" });

	$(".detail-text ol").each(function (index, value) {
		console.log(value);

		let items = $(value).find('> li')
		items.each(function (index, value) {
			$(value).attr('data-count', index + 1)
		});
	});
	// $("form").submit(function (event) {
	// 	let form = $(this);
	// 	event.preventDefault();
	// 	form.find('button').addClass('sending');
	// 	$.ajax({
	// 		url: "/test/mail.php",
	// 		data: form.serialize(),
	// 		type: "POST",
	// 		//dataType: "json"
	// 	}).done(function (data) {
	// 		console.log('отправлено');
	// 		form.find('button').removeClass('sending');
	// 		// $.fancybox.close();
	// 		form[0].reset();
	// 		// $.fancybox.open('<div class="form-success">Сообщение отправлено!</div>');
	// 	});
	// });
})


$(document).on('click', '.js-menu__btn', function () {
	if (!$(this).hasClass('open')) {
		$(this).addClass('open');
		$('.js-menu').addClass('open');
		$('body').addClass('lock');
	} else {
		$(this).removeClass('open');
		$('.js-menu').removeClass('open');
		$('body').removeClass('lock');
	}
});