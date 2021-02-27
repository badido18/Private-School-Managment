<div class="diapo">
		<script>
			const diapo = () =>
				setInterval(()=>{
					if(document.getElementById('carousel').scrollTop+612 < document.getElementById('carousel').scrollHeight)
						document.getElementById('carousel').scrollBy({
							top: 600
							}
						)
					else
						document.getElementById('carousel').scrollTo({
							top: 0
							}
						)
				},3000)
			diapo();
		</script>
		<div id="carousel" class="carousel">
			<?php 
				foreach ($this->loadDiapo() as $diapo){
					echo "<div class=\"carousel-item \">
							<img class=\"d-block w-100\" src=\"$diapo->imgUrl\" alt=\"\">
						</div>";
				}
			?>
		</div>
		<div class="mainText">
			<div class="ctn">
				<img src="/src/img/hatW.svg" alt="">
				<h1>Apportez à vos enfants l’éducation <br>qu’ils méritent </h1>
				<p>78% des meilleurs enseignants en Algerie <br>choissisent d’enseigner dans les ecoles prives </p>
			</div>
		</div>
	</div>