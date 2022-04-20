function loadmenu(idload){ 
    $().ready(function () {
		var urldata	=	$('.' + idload).attr('var-url');
        console.log(urldata); 
		var target	=	'content';
		// $(".overlay").show();
		$.ajax({
			type: "GET",
			url: urldata,
			data: 'data=',
			cache: false,
			success: function(html){
				$("#" + target).html(html).show();
			},error: function (result) {
				var teks = result['status'] + " - " + result['statusText'];
				console.log(teks);
				// showNotification('bg-red', teks, 2000);
				// $(".overlay").hide();
			}
		});
	});	
}

function closeover(){
	$().ready(function () {
		var $body = $('body');
		var $overlay = $('.overlay');
		$body.toggleClass('overlay-open');
		if (!$body.hasClass('overlay-open')) { $overlay.fadeOut(); }
	});
}