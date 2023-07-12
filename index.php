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

// les interfaces :
//Une interface est un bloc de code dans lequel nous pouvons déclarer des méthodes. À la grande différence des classes, dans les interfaces, il est impossible de déclarer des attributs, ou bien d’avoir de la logique

namespace animal;
class Animal{
	protected string $nom;
	
	public function getNom(){
		return $this->nom;
	}
	
	public function setNom(string $nom = null){
		$this->nom = $nom;
	}
	public function dort(){
		echo(‘zzz’);
	}
}

interface AnimalInterface{
public function getNom();
	public function setNom(string $nom = null);
	public function dort();
}
//Au même titre qu’une classe sert de moule pour un objet, une interface va servir de moule pour une classe. Une classe qui implémente une interface va devoir implémenter la logique de chacune des méthodes définies dans l’interface.
?> 
  </body>
</html>