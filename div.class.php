<?php
	
	class div implements componente
	{
		public function __construct(private array $elementos = array()){}
		
		public function criar()
		{
			echo "<div>";
			
			foreach($this->elementos as $dado)
			{
				$dado->criar();
			}
			
			echo "</div>";
		}
		
		public function setElemento($elemento)
		{
			$this->elementos[] = $elemento;
		}
	}

?>