$(document).ready(function()
{
	$('#topLink').click(function()
	{
		$('html, body').animate(
		{
			scrollTop : 0
		},600);
		return false;
	});
	$(window).scroll(function()
	{
		if ($(document).scrollTop() >= 150)
			$('#topLink').fadeIn(300);
		else
			$('#topLink').fadeOut(300);
	});
});
