/**

 ____             _               ____       __  __
|  _ \  ___   ___| |_ ___  _ __  / ___|  ___|  \/  | ___
| | | |/ _ \ / __| __/ _ \| '__| \___ \ / _ \ |\/| |/ _ \
| |_| | (_) | (__| || (_) | |     ___) |  __/ |  | | (_) |
|____/ \___/ \___|\__\___/|_|    |____/ \___|_|  |_|\___/

		                   Semoo@dr.com
2017.05.13
**/

$(document).ready(function(){
	
	



		$("#submitClick").click(function(event) {
			
			if($("#univ").val() != 0 && $("#colleage").val() !=='' && $("#cert").val() !=0 && $("#Utopia").val() !=0 && $("#typeAccept").val() !=0 && $("#Score").val() !=0 && $("#Score").val() !==''){
					
							var univ = $("#univ").val();
							var colleage = $("#colleage").val();
							var cert = $("#cert").val();
							var Utopia = $("#Utopia").val();
							var typeAccept = $("#typeAccept").val();
							var Score = $("#Score").val();

							var univ2 = $("#univ2").val();


				$.post("./post.php",{univ:univ,
									colleage:colleage,cert:cert,
									Utopia:Utopia,
									typeAccept:typeAccept,
									Score:Score,
									univ2:univ2},function(c){ 
						
							   
							   	if(c.status = 'ok'){

							   		// alert('ok');
							   		$("#univ").val('');
									$("#colleage").val('');
									$("#cert").val('');
									$("#Utopia").val('');
									$("#typeAccept").val('');
									$("#Score").val('');
									
									$("#univ2").val('');
									$("#univDiv2").hide();

									$('#exampleModal').modal();

							   	}else{
							   		$('#errorModal').modal();
							   	}
							   	console.log(c);
				}); 

			}else{
				$('#errorModal').modal();
				// #errorModalTXT
			}

			// console.log($("#univ").val()+'\n'+$("#colleage").val()+'\n'+$("#cert").val()+'\n'+$("#Utopia").val()+'\n'+$("#typeAccept").val()+'\n'+$("#Score").val());

		});
	


		$("#cert").focus(function(event) {


		}).blur(function(){
			var cert = $(this).val();
				if(cert == 'يوس' ){
					// console.log('يوس');
					$("#univDiv2").show();
				}else{
					// console.log('no');
					$("#univDiv2").hide();
				}
		});





});
// End ready  .. 


	function closePage(){
		 // window.open('','_self').close();
		 // var customWindow = window.open('', '_self', '');
   //  		customWindow.close();
	}






