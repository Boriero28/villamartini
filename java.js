		
//apertura icona smartphone
$(document).ready(function() //serve per jquiry e avvia java quando i file html sono stati caricati
{
	$(".hamburger").click(function(e)
	{
		$(".header_menu").toggleClass('menu--open');
		
	});
	
});

//cambia immagine home
var immagine=1;
function avanti()
{
	
		setTimeout(function(){
		immagine++;
		if(immagine>4)
		{
			immagine=1;
		}
		document.getElementById("slide").src="./img/img"+immagine+".jpg";},5000);

}

	