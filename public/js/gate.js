
$(function() {
	workbelt();
	workload();
});

function workbelt(){
	$('.thumb-unit').click(function(){
		$('.work-belt').css('left','-100%');
		$('.work-container').show();
	});

	$('.work-return').click(function(){
		$('.work-belt').css('left','0%');
		$('.work-container').hide(800);
	});
}

function workload() {
	$.ajaxSetup({ cache: true });

	$('.thumb-unit').click(function() {
		var $this = $(this),
			newfolder = $this.data('folder'),
			extend = "gate/"+newfolder+".html";

		$('.project-load').load(extend);
	});
}