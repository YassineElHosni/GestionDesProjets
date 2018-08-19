@extends('layouts.app')

@section('content')

<div class="container">


<!--mon agenda -->
<div>Agenda :</div>
<?php
require '../app/Calendar/Month.php';//je charge Month Class
//require '../app/Calendar/Projets.php';!!

//$events= new Calendar\Projets(); !!
$month =new Calendar\Month($_GET['month']?? null,$_GET['year']?? null);

$start =$month->getStartingDay();//1er jour du mois
$start = $start->format('N')==='1' ? $start : $month->getStartingDay()->modify('last monday');
//format('N'): 1 (pour Lundi) à 7 (pour Dimanche)
$weeks=$month->getWeeks();//nbr de weeks

$end=(clone $start)->modify('+'.(6 + 7 * ($weeks -1)).'days');/*ajouter un nbr de jours qui dépend du nbr de semaines*/
var_dump($start,$end);

$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";/* http:// http url only*/
$path_only=parse_url($actual_link, PHP_URL_PATH);/*without values*/
//var_dump($actual_link,$path_only);
/*to support both http & https url
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
*/

//$events=$events->getEventsByDay($start,$end); !!
/*echo '<pre>';
var_dump($events);
echo '</pre>';*/
?>

<div style=" width: 24%;height: 20%;" class="d-flex flex-row align-items-center justify-content-between mx-sm-4">


  <a href="{{$path_only}}?month=<?= $month->previousMonth()->month;?>&year=<?= $month->previousMonth()->year;?> " id="prev" class="flech__prev">
   <i style="float: left;border-radius: 70%;font-size:30px;" class="fa" onclick="$('#prev').click();">&#xf104;</i>
    </a>

    <a href="{{$path_only}}?month=<?= $month->nextMonth()->month;?>&year=<?= $month->nextMonth()->year;?>" id="next" class="flech__next">
      <i style="  float:right;border-radius: 70%;font-size:30px;" class="flech__next__i fa"onclick="$('#next').click();">&#xf105;</i>
    </a>
<h3 style="text-align: center;padding-bottom: 10px;border-bottom: 1px solid #d6d6d6;" class="month__header"><?= $month->toString(); ?></h3> <!-- pour afficher le Mois : <h1>Janvier 2018<h1>-->


</div>

<!--<h3> ?= $month->getWeeks()?> weeks</h3> nbr de week ds le mois-->

<table class="calendar__table calendar__table--<?= $weeks; ?>weeks"><!--je defini cette class a voir dans \css\calendar.css-->
<?php $days_in_this_week = 1 ?>
 <?php $week_days=array('Lun','Mar','Mer','Jeu','Ven','Sam','Dim');?>
 <thead>
   <tr>
     @foreach ($week_days as $week_day)
           <th class="calendar__weekday">{{$week_day}}</th>
     @endforeach
        </tr>
      </thead>
      <tbody>
        <tr>
  <?php for($i = 0;$i <$weeks ;$i++): ?><!--'$i' s'incremente apr chaque semaine-->

    <?php foreach($month->days as $k => $day):/* $k (index) : [0]=>jours ..*/

        $date=(clone $start)->modify("+".($k + $i * 7)."days");

      //  $eventsForDay= $events[$date->format('Y-m-d')] ?? [];Null Coalescing Operator??!! ?>


        <!--  php if ($i === 0): ?> j'affiche les jours juste pour la 1ere semaine ($i==0)
            <div class="calendar__weekday">= $day; </div> nom du jour
           endif ; -->

        <?php if ($month->Iscurrentdate($date)):?><!--la class calendar__active vas s'activer si la date est courrante -->

             <?php if (!($month->withinMonth($date))) :?> <!-- voir si la date n'est pas inclus ds ce mois -->
                          <td title="<?= $month->Isfreeday($date); ?>" class="calendar__active__othermonth">
            <?php elseif( $month->Inweekend($date)) :?> <!--voir si c'est un jour férié-->
                          <td title="<?= $month->Isfreeday($date); ?>" class="calendar__active__freedays">
              <?php else :?>
             <td title="<?= $month->Isfreeday($date); ?>" class="calendar__active"> <!-- date courante only -->
             <?php endif ?>

      <?php elseif( $month->Inweekend($date)) :?> <!--si week-end -->

               <?php if( !($month->withinMonth($date))):?><!-- and not withing month -->
                 <td title="<?= $month->Isfreeday($date); ?>" class="calendar__freedays__exclut">
               <?php else :?>
                 <td title="<?= $month->Isfreeday($date); ?>" class="calendar__freedays">
               <?php endif ;?>

      <?php elseif (!($month->withinMonth($date))):?><!-- si pas inclus ds le mois courant -->
                   <td title="<?= $month->Isfreeday($date); ?>" class="calendar__othermonth">
      <?php else :?>
                   <td title="<?= $month->Isfreeday($date); ?>">
      <?php endif ; ?>

      <?php if (($month->Isfreeday($date))!='') :?><!-- si jour férié-->
          <div class="calendar__day__free"> <?= $date ->format('d');?></div><!--'d' récupérer le numero du jour-->
          </td>
      <?php elseif ($month->Iscurrentdate($date)):?>
        <div class="calendar__day__today"> <?= $date ->format('d');?></div><!--'d' récupérer le numero du jour-->
        </td>
      <?php else :?>
        <div class="calendar__day"> <?= $date ->format('d');?></div><!--'d' récupérer le numero du jour-->
        </td>
      <?php endif ; ?>
<script>
function myfreeday(){/*afficher le titre des jours férié onmouseover*/
   document.getElementById('freeday_title').style.display="block";
}
function myfreeday_out(){
   document.getElementById('freeday_title').style.display="none";
}
</script>
      <!-- la fin de la semaine == la fin de la ligne du tableau/calendrier -->
          <!--afficher les intitulé ds events -->

    <?php endforeach; ?>
  <!-- end of week -->
</tr>
<tr>
<?php endfor; ?>
</tr>
</tbody>
</table>



</div>
@endsection
