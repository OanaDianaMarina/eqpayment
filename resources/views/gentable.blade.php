@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================--> 
    <script src="{{ asset('js/main.js') }}"></script>
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					restaur'App
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required" id="nomGrup" style="display: none" >
					<span class="label-input100">Nom del teu grup:</span>
					<input class="input100" type="text" name="name" placeholder="Ex. DESTROYERS">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required" id="inputCodi" style="display: none" >
					<span class="label-input100">Codi de la Taula:</span>
					<input class="input100" type="text" name="codiTaula" placeholder="Ex. C213SA">
					<span class="focus-input100"></span>
				</div>
				
				<div class="container-contact100-form-btn" >
					<div class="wrap-contact100-form-btn" >
						<div class="contact100-form-bgbtn"></div>
						<button  class="contact100-form-btn" id="crear">
							<span>
								Crea la taula!
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>

				<div class="container-contact100-form-btn" id="codiTaula" style="display: none" >
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" id="copiar">
							<span>
								C213SA
								<i class="fa fa-thin fa-copy m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>


				<div class="container-contact100-form-btn" id="seure">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Seu a taula!
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>

				

				<div class="container-contact100-form-btn" id="botoEntrar" style="display: none">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								ENTRAR A LA SALA
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>



			</form>
		</div>
	</div>



<div id="dropDownSelect1"></div>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
	

<script>

	document.getElementById("crear").addEventListener("click", function (e){
		
		e.preventDefault();

		$("#nomGrup").slideDown( "slow", function(e) {
			document.getElementById("nomGrup").style.display = "block";
	  	});	

		$("#codiTaula").slideDown( "slow", function(e) {
	    	document.getElementById("codiTaula").style.display = "block";
	  	});	

    	document.getElementById("botoEntrar").style.display = "none";
    	document.getElementById("inputCodi").style.display = "none";
	})


	document.getElementById("copiar").addEventListener("click", function (e){
		
		e.preventDefault();

		var copyText = $("#copiar").children().first().text();
		codi = copyText.trim();

		navigator.clipboard.writeText(codi).then(() => {
		    // Alert the user that the action took place.
		    // Nobody likes hidden stuff being done under the hood!
	
		    Swal.fire({
			  position: 'center',
			  background:'white',
			  color: '#a64bf4',
			  icon: 'success',
			  iconColor: '#a64bf4',
			  title: 'Copied to Clipboard',
			  showConfirmButton: false,
			  timer: 1500
			});
		});
	})


	document.getElementById("seure").addEventListener("click", function (e){
		
		e.preventDefault();

		$("#botoEntrar").slideDown( "slow", function(e) {
	    	document.getElementById("botoEntrar").style.display = "block";
	  	});	

	  	$("#inputCodi").slideDown( "slow", function(e) {
	    	document.getElementById("inputCodi").style.display = "block";
	  	});	

		document.getElementById("nomGrup").style.display = "none";
	    document.getElementById("codiTaula").style.display = "none";

	})


	document.getElementById("botoEntrar").addEventListener("click", function (e){
		
		e.preventDefault();

		var copyText = $("#copiar").children().first().text();
		codi = copyText.trim();

	
			Swal.fire({
		      title: 'Com et dius?',
		      placeholder: 'Ex. DIANA OANA',
			  position: 'center',
			  input: 'text',
			  background:'white',
			  color: '#a64bf4',
			  //title: 'Copied to Clipboard',
			  showConfirmButton: true,
			    confirmButtonText:
			    '<i class="fa fa-thumbs-up"></i> Cap a dins!',
			  confirmButtonAriaLabel: 'Thumbs up, great!',
			  confirmButtonColor: '#a64bf4'
			  //timer: 1500
	
			})
	});

</script>
</body>
</html>
@endsection