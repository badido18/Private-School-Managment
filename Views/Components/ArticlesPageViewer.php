<div class="pages">
			<h3>Pages</h3>
			<?php 
			$nPages = $this->loadPages() ;
			$last = $this->currentPage-1 ;
			$next = $this->currentPage+1 ;
			if($last == 0)
				echo "<p class=\"co-dark-gray\" disabled >Precedente</p>" ;
			else
				echo "<a href=\"$this->link/$last\">Precedente</a>";
			for ($i=1; $i <= $nPages ; $i++) { 
				if ($i == $this->currentPage )
					echo "<p class=\"co-dark-gray\">$i</p>" ;
				else
					echo "<a href=\"$this->link/$i\">$i</a>" ;
			}
			if($next > $nPages)
				echo "<p class=\"co-dark-gray\" disabled >Suivante</p>" ;
			else
				echo "<a href=\"$this->link/$next\" >Suivante</a>" ;
			?>
			
		</div>