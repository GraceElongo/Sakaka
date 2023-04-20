<?php

include('connectivityBD.php');

class Utilisateur {
      private $Id;
      private $Nom; 
      private $Adresse;
      private $Email;
      private $Img;
      private $Newsletter;
      private $Password;
      private $Region;
      private $Role;
      private $Sex;
      private $Tde;
      private $Ville;



      // la methode get
      public function getId(){
         return $this->Id; 
      }
      public function getNom(){
         return $this->Nom; 
      }  
      public function getAdresse(){
         return $this->Adresse; 
      }
      public function getEmail(){
         return $this->Email; 
      }
      public function getImg(){
        return $this->Img; 
     }
     public function getNewsletter(){
        return $this->Newsletter; 
     }
     public function getPassword(){
        return $this->Password; 
     }
     public function getRegion(){
        return $this->Region; 
     }
     public function getRole(){
        return $this->Role; 
     }
     public function getSex(){
        return $this->Sex; 
     }
     public function getTde(){
        return $this->Tde; 
     }
     public function getVille(){
        return $this->Ville; 
     }


      //  la methode set 
      public function setId($Id){
         return $this->Id= $Id; 
      }

      public function setNom($Nom){

         if(!empty($Nom) and strlen($Nom)>3){
            return $this->Nom=$Nom; 
         }
      }  
      public function setAdresse($Adresse){
         return $this->Adresse=$Adresse; 
      }
      public function setEmail($Email){
         return $this->Email=$Email; 
      }
      public function setImg($Img){
        return $this->Img=$Img; 
     }
     public function setNewsletter($Newsletter){
        return $this->Newsletter=$Newsletter; 
     }
     public function setPassword($Password){
        return $this->Password=$Password; 
     }
     public function setRegion($Region){
        return $this->Region=$Region; 
     }
     public function setRole($Role){
        return $this->Role=$Role; 
     }
     public function setSex($Sex){
        return $this->Sex=$Sex; 
     }
     public function setTde($Tde){
        return $this->Tde=$Tde; 
     }
      public function setVille($Ville){
         return $this->Ville=$Ville; 
      }
         public function salut(){
            echo " bonjour MR".$this->getId()."".$this->getNom()."".$this->getEmail()."".$this->getVille()."".
            $this->getPassword();

         }
         public function enregistrement(){
            include 'connectivityBD.php';
            $req=$bdd->prepare("INSERT into utilisateur (id_util, Nom_util, adresse, email, img_util, newsletter, password, region, role, sex, tde, ville) 
            Values(:Id, :Nom, :Adresse, :Email,:Img, :Newsletter, :Password, :Region, :Role, :Sex, :Tde, :Ville)");
            $req->execute(array(':Id'=>$this->getId(),
                                 ':Nom'=>$this->getNom(),
                                 ':Adresse'=>$this->getAdresse(),
                                 ':Email'=>$this->getEmail(),
                                 ':Img'=>$this->getImg(),
                                 ':Newsletter'=>$this->getNewsletter(),
                                 ':Password'=>$this->getPassword(),
                                 ':Region'=>$this->getRegion(),
                                 ':Role'=>$this->getRole(),
                                 ':Sex'=>$this->getSex(),
                                 ':Tde'=>$this->getTde(),
                                 ':Ville'=>$this->getVille()
                            ));
            echo "Utilisateur enregistré réussi!!";
        }
        
   }

?>