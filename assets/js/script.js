// event pada saat link
$('.page-scroll').on('click', function(e){

	// ambil isi href

	var tujuan = $(this).attr('href');

	console.log('ok');

	// tangkap elemen bersangkutan

	var tujuan = $(tujuan);

	// pindahkan scrollnya
	$('html,body').animate({
		scrollTop: tujuan.offset().top - 50
	}, 1200, 'easeInOutExpo');



	e.preventDefault();
});