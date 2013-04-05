$(document).ready(function(){
	var tabNav = $('.to-navsections ul li a');
	var tabContainers = $('.to-sections .to-section');
	tabNav.removeClass('selected').hide().filter(':first').show().addClass('selected');
	tabNav.show();
	tabContainers.hide().filter(':first').show();
	$('.to-navsections ul li a').click(function(){
		tabContainers.hide();
		tabContainers.filter(this.hash).show();
		tabNav.removeClass('selected');
		$(this).addClass('selected');
		return false;
	});
	
	$('#buildsave').click(function(){
		document.forms["buildform"].submit();
		return false;
	});
});