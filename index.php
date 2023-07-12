<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

trait Adresse{
	private string $adresse;	
	
	public function getAdresse(){
		return $this->adresse;
	}
	
	public function setAdresse(string $adresse){
		$this->adresse = $adresse;
	}
}

class Employe{
	use Adresse;
}

class Magasin{
	use Adresse;
}

?> 
  </body>
</html>