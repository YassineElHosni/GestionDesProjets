<div class="container">
  <script>

  function calendarflow(){
    if($('#calendrier').is(':visible')){
    document.getElementById('calendrier').style.display="none";
    }else{
      document.getElementById('calendrier').style.display="block";
    }
  }

  </script>
<!--mon agenda -->

<button style="width: 90%;"class="btn btn-primary" onclick="calendarflow()">
  <i class="fas fa-calendar-alt">Aganda</i>
</button>
<br>

    <div style="display:block" id="calendrier" >
<?php
require '../app/Calendar/Month.php';//je charge Month Class
//require '../app/Calendar/Projets.php';!!

//$events= new Calendar\Projets(); !!
$month =new Calendar\Month($_GET['month']?? null,$_GET['year']?? null);

$start =$month->getStartingDay();//1er jour du mois
$start = $start->format('N')==='1' ? $start : $month->getStartingDay()->modify('last monday');
//format('N'): 1 (pour Lundi) à 7 (pour Dimanche)
$weeks=$month->getWeeks();//nbr de semaine dans le mois

$end=(clone $start)->modify('+'.(6 + 7 * ($weeks -1)).'days');/*ajouter un nbr de jours qui dépend du nbr de semaines*/
//var_dump($start,$end);

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
<br>
<div style=" " class="d-flex flex-row align-items-center justify-content-between mx-sm-5">


    <a href="?month=<?= $month->previousMonth()->month;?>&year=<?= $month->previousMonth()->year;?> " id="prev" class="flech__prev">
     <i style="float: left;border-radius: 70%;font-size:30px;" class="fa" onclick="$('#prev').click();">&#xf104;</i>
    </a>
    <p  style=" padding-bottom: 5px;
         border-bottom: 1px solid #d6d6d6;color:grey;
         font: italic bold 30px/30px Georgia, serif;" class="month__header"><?= $month->toString(); ?>
    </p> <!-- pour afficher le Mois : <h1>Janvier 2018<h1>-->

    <a href="?month=<?= $month->nextMonth()->month;?>&year=<?= $month->nextMonth()->year;?>" id="next" class="flech__next">
      <i style="  float:right;border-radius: 70%;font-size:30px;" class="flech__next__i fa"onclick="$('#next').click();">&#xf105;</i>
    </a>


</div>

<table class="calendar__table calendar__table--<?= $weeks; ?>weeks"><!--je defini cette class a voir dans \css\calendar.css-->

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

      //  $eventsForDay= $events[$date->format('Y-m-d')] ?? [];Null Coalescing Operator??!!
      ?>
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

      <!-- la fin de la semaine == la fin de chaque ligne du tableau/calendrier -->
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

</div>
