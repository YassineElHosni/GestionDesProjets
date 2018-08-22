<?php
namespace Calendar;

/* Class qui representera 1 Mois */
class Month {

  public $days=['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
private $months=['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'];
public $month;
public $year;

/**
* Month constructor
* int $month --Le mois compris entre 1 et 12
* int $year L'annee
*/
   public function __construct($month = null,$year = null){/* par défaut =null (?)->nullable)*/

if($month === null){/*= null et pas proche de null*/
  /* la methode date renvois une string thats why we use intval car je travail avec des entiers*/

   $month= intval(date('m'));/*renvoi la date actuelle ss format integer(month num)*/
    /*08 --> 8*/
}
if($year=== null){
  $year= intval(date('Y'));/*renvoi la date actuelle ss format integer(Year num)*/
}
if($month <1 ){/*if we enter a mistaken number of month it will go back to last month of the previous year*/
  $month = 12;
  $year-= 1;
}
if($month >=1 && $month <12 ){
$month =$month %12;/*ne fonctionne pas avec Decembre 12%12 ==0 */
}else{/* decembre*/
  $month = 12;
}

 $this->month= $month;
  $this->year= $year;
}
/**
*Renvois le premier jour du mois
*
*/
public function getStartingDay(): \DateTime {
/*dateDEbut (le 01/ / )*/
 return new \DateTime("{$this->year}-{$this->month}-01");

}
/**
* fonction to String
* retourne le mois en toute lettre (ex: Mois 2018)
*
*/
public function toString(): string {
/*  if($this->month==0){
    $this->month=12;
  $d=$this->months[intval($this->month)] . ' ' . [$this->year -1];

}else{*/
$d=$this->months[$this->month - 1] . ' ' . $this->year;

return  $d;

}
/*
*cette fonction vas retourner le nombre de semaine ds le mois
*
*/

public function getWeeks(): int {

$start=$this->getStartingDay(); /*format date début du mois*/
$end= (clone $start)->modify('+1 month -1 day');/*date de fin du mois-> modification de la copie de $start */
if($this->month==12){  /*tjr 31 jours en decembre*/
$weeks= 6;/* 4 weeks and 2 days*/
}else{
$weeks= intval($end->format('W'))- intval($start->format('W'))+1;/*nbr de semaine ds ce mois*/
}
/* format('W'): Numéro de semaine dans l'année  Exemple : 42 (la 42ème semaine de l'année)*/


if($weeks<0){/*dans le cas de janvier (1er mois de l'annee)*/
    $weeks=intval($end->format('W'));// exemple ($end= la 5ème semaine de l'année et du mois de janvier)
  }


return $weeks;
}

/*
*Est-ce que le jour est ds le mois en cours
*
*/
  public function WithinMonth(\DateTime $date): bool {
/*je compare le mois et l'annee de startingdate avec le mois et annee de ma $date*/
return $this->getStartingDay()->format('Y-m') === $date->format('Y-m');
}

/*
*Est-ce que le jour est samedi ou dimanche
*
*/
  public function Inweekend(\DateTime $date): bool {
    /*-'N' 1 pour lundi et 7 pour dimanche */
     return (( $date->format('N')==='6')||($date->format('N')==='7'))? true: false;/*si le jours est samedi ou dimanche*/


}
/*
*Est-ce que le jour est un jour férié
* pour 2018 2019 2020
*/
  public function Isfreeday(\DateTime $date){
    $day_free='';
/*jours fériés pour 2018*/
if($date->format('Y')=='2018'){
    if($date->format('m-d')=='01-01'){
     $day_free='Jour de l\'an';
   }elseif($date->format('m-d')=='01-11'){
     $day_free='Manifeste de l\'Indépendance';
   }elseif($date->format('m-d')=='11-20'){
     $day_free='Al Mawlid';
   }elseif($date->format('m-d')=='05-01'){
    $day_free='Fête du travail';
  }elseif($date->format('m-d')=='06-15'){
    $day_free='L\'Aïd el Fitr';
  }elseif($date->format('m-d')=='07-30'){
    $day_free='Fête du trône';
  }elseif($date->format('m-d')=='08-14'){
   $day_free='Allégeance Oued Eddahab';
  }elseif($date->format('m-d')=='08-20'){
    $day_free='La Révolution du Roi et du peuple';
  }elseif($date->format('m-d')=='08-21'){
    $day_free='Fête de la jeunesse';
  }elseif($date->format('m-d')=='09-12'){
   $day_free='Jour de l\'An Hégire';
 }elseif(($date->format('m-d')=='08-21')||($date->format('m-d')=='08-22')||($date->format('m-d')=='08-23')){
    $day_free='Aïd al-Adha';
  }elseif($date->format('m-d')=='10-06'){
   $day_free='La marche verte';
  }elseif($date->format('m-d')=='10-18'){
    $day_free='Fête de l\'Indépendance';
}
/*jours fériés pour 2019*/
}elseif($date->format('Y')=='2019'){
    if($date->format('m-d')=='01-01'){
     $day_free='Jour de l\'an';
   }elseif($date->format('m-d')=='01-11'){
     $day_free='Manifeste de l\'Indépendance';
   }elseif($date->format('m-d')=='11-09'){
     $day_free='Al Mawlid';
   }elseif($date->format('m-d')=='05-01'){
    $day_free='Fête du travail';
  }elseif($date->format('m-d')=='06-05'){
    $day_free='L\'Aïd el Fitr';
  }elseif($date->format('m-d')=='07-30'){
    $day_free='Fête du trône';
  }elseif($date->format('m-d')=='08-14'){
   $day_free='Allégeance Oued Eddahab';
  }elseif($date->format('m-d')=='08-20'){
    $day_free='La Révolution du Roi et du peuple';
  }elseif($date->format('m-d')=='08-21'){
    $day_free='Fête de la jeunesse';
  }elseif($date->format('m-d')=='09-01'){
   $day_free='Jour de l\'An Hégire';
  }elseif(($date->format('m-d')=='08-11')||($date->format('m-d')=='08-12')||($date->format('m-d')=='08-13')){
    $day_free='Aïd al-Adha';
  }elseif($date->format('m-d')=='10-06'){
   $day_free='La marche verte';
  }elseif($date->format('m-d')=='10-18'){
    $day_free='Fête de l\'Indépendance';
  }
/*jours fériés pour 2020*/
}elseif($date->format('Y')=='2020'){
    if($date->format('m-d')=='01-01'){
     $day_free='Jour de l\'an';
   }elseif($date->format('m-d')=='01-11'){
     $day_free='Manifeste de l\'Indépendance';
   }elseif($date->format('m-d')=='10-28'){
     $day_free='Al Mawlid';
   }elseif($date->format('m-d')=='05-01'){
    $day_free='Fête du travail';
  }elseif($date->format('m-d')=='05-24'){
    $day_free='L\'Aïd el Fitr';
  }elseif($date->format('m-d')=='07-30'){
    $day_free='Fête du trône';
  }elseif($date->format('m-d')=='08-14'){
   $day_free='Allégeance Oued Eddahab';
  }elseif($date->format('m-d')=='08-20'){
    $day_free="La Révolution du Roi et du peuple"."\n"."Jour de l'An Hégire";
  }elseif($date->format('m-d')=='08-21'){
    $day_free='Fête de la jeunesse';
 }elseif(($date->format('m-d')=='07-30')||($date->format('m-d')=='07-31')||($date->format('m-d')=='07-32')){
    $day_free='Aïd al-Adha';
  }elseif($date->format('m-d')=='10-06'){
   $day_free='La marche verte';
  }elseif($date->format('m-d')=='10-18'){
    $day_free='Fête de l\'Indépendance';
  }
}
     return $day_free;
}
/*
*Est-ce que la date est le jour courant
*
*/
  public function Iscurrentdate($date): bool{
    return ($date->format('Y-m-d')==date('Y-m-d'))? true: false;
  }
/*
* Renvois le mois suivant
*
*/
  public function nextMonth(): Month {
   $month =$this->month + 1;
   $year =$this->year;

   if($month > 12){
     $month = 1;
     $year+= 1 ;
   }
     return new Month($month,$year);
}
/*
* Renvois le mois précédent
*
*/
  public function previousMonth(): Month {
    $month =$this->month - 1;
    $year =$this->year;

    if($month < 1){
      $month = 12;
      $year-= 1;
    }

   return new Month($month,$year);
}
}
