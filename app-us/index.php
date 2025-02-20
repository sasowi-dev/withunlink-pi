<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<?php include '../dependencies-en.php';?>
  </head>
  <body>
<?php include '../event-en.php';?>
<?php include '../header-en.php';?>

    <div class="mt-16">
 <div class="glide heropeek">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <img class="glide__slide rounded-md " src="../promo-us/1.png">
        <img class="glide__slide rounded-md " src="../promo-us/3.png">
      </ul>
    </div>
  </div>
  <script>
    

var glideHeroPeek = new Glide('.heropeek', {
  type: 'carousel',
  animationDuration: 1000,
  autoplay: 3000,
  focusAt: '1',
  startAt: 1,
  perView: 1,
   // set a value to show the previous and next slides peeking in
  peek: {
    before: 20,
    after: 20
  },
  gap: 0
});

glideHeroPeek.mount();
      </script>
      	<script>
		const modal = document.querySelector('.main-modal');
		const closeButton = document.querySelectorAll('.modal-close');

		const modalClose = () => {
			modal.classList.remove('fadeIn');
			modal.classList.add('fadeOut');
			setTimeout(() => {
				modal.style.display = 'none';
			}, 500);
		}

		function openModal(amnt,app) {
			document.getElementById("payamount").innerHTML = amnt;
			document.getElementById("prodnam").innerHTML = app;
			modal.classList.remove('fadeOut');
			modal.classList.add('fadeIn');
			modal.style.display = 'flex';
		}

		for (let i = 0; i < closeButton.length; i++) {

			const elements = closeButton[i];

			elements.onclick = (e) => modalClose();

			modal.style.display = 'none';

			window.onclick = function (event) {
				if (event.target == modal) modalClose();
			}
		}
	</script>
  
    <script>
      function appdown(package){
       window.open("https://flipstore.withun.link/application-cdn/"+package+".apk","_self"); 
      }
    </script>
	<div style="display:none;" class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Pay ($<span class="text-blue-700" id="payamount"></span>)</p>
					<div class="modal-close cursor-pointer z-50">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="my-5">
					<div class="">
<div class="max-w-4xl  bg-white rounded-lg">
<div class="mt-2"><p class="text-2xl text-gray-700 font-bold hover:underline" id="prodnam"></p>
</div>
</div>
</div>
					<p class="text-xs text-gray-500 py-2 tracking-wider">PAYMENT METHODS</p>
					<figure class="flex rounded-xl  p-0">
  <div class="text-left ">
    <blockquote>
    </blockquote>
    <figcaption class="font-medium">
      <div class="text-gray-500">
       Send a copy of Google Play recipt to pay-fp@withun.link.<br>
        If you can't, send your card vendor's payment verification message.
      </div>
    </figcaption>
  </div>
</figure>
				</div>
				<!--Footer-->
				<div class="flex justify-end pt-2">
								</div>
			</div>
		</div>
	</div>
 <style>
		.animated {
			-webkit-animation-duration: 500ms;
			animation-duration: 500ms;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeOut {
			from {
				opacity: 1;
			}

			to {
				opacity: 0;
			}
		}
	</style>
      <?php
  try {
  $con= new PDO('mysql:host=localhost:3306;dbname=fpstre', "chocolatekos", "leegyubin!Lee06");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM skillus";
  //first pass just gets the column names
  print '<table class="min-w-full table-auto">';
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr>";
  foreach ($row as $field => $value){
   print ' <th></th>';
  } // end foreach
  print " </tr>";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr>";
   foreach ($row as $name=>$value){
   print " <td>$value</td>";
   } // end field loop
   print " </tr>";
  } // end record loop
  print "</table>";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?>
      
      <!--FP이외 제한구역 끝-->
</div>
    
<?php include '../footer-en.php';?>
</body>
</html>
