<div>
    <h1>Statistiques</h1>

    <h2>Statistiques serveurs / jour</h2>

    <div id="stats1">

    </div>

    <h2>Statistiques serveurs / jeu / jour</h2>

    <div id="stats2">

    </div>

  </div>

<script>
var chart;
var chart2;
$(document).ready(function() {
   chart = new Highcharts.Chart({
      chart: {
         renderTo: 'stats1',
         defaultSeriesType: 'line',
         marginRight: 130,
         marginBottom: 25
      },
      title: {
         text: 'Serveurs de jeux / jour',
         x: -20 //center
      },
      subtitle: {
         text: 'Source: CSGO-Serv.fr',
         x: -20
      },
      xAxis: {
         categories: <?php echo $sf_data->getRaw('calendar')->getPeriode(true) ?>
      },
      yAxis: {
	 min: 0,
         title: {
            text: 'Serveurs de jeux'
         },
         plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
         }]
      },
      tooltip: {
         formatter: function() {
                   return "<b>"+ this.series.name +"</b><br/>"+ this.y +" serveurs";
         }
      },
      legend: {
         layout: 'vertical',
         align: 'right',
         verticalAlign: 'top',
         x: -10,
         y: 100,
         borderWidth: 0
      },
      series: [{
         name: 'Serveurs',
         data: <?php echo $sf_data->getRaw('calendar')->getDataServeur() ?>
      }],
      credits: {
         enabled: false
      }
   });





     chart2 = new Highcharts.Chart({
      chart: {
         renderTo: 'stats2',
         defaultSeriesType: 'line',
         marginRight: 130,
         marginBottom: 25
      },
      title: {
         text: 'Serveurs de jeux / jeu / jour',
         x: -20 //center
      },
      subtitle: {
         text: 'Source: CSGO-Serv.fr',
         x: -20
      },
      xAxis: {
         categories: <?php echo $sf_data->getRaw('calendar')->getPeriode(true) ?>
      },
      yAxis: {
	 min: 0,
         title: {
            text: 'Serveurs de jeux'
         },
         plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
         }]
      },
      tooltip: {
         formatter: function() {
                   return "<b>"+ this.series.name +" </b><br/>"+ this.y +" serveurs";
         }
      },
      legend: {
         layout: 'vertical',
         align: 'right',
         verticalAlign: 'top',
         x: -10,
         y: 100,
         borderWidth: 0
      },
      series: [{
         name: 'Serveurs css',
         data: <?php echo $sf_data->getRaw('calendar')->getDataServeurGame(1) ?>
      },{
         name: 'Serveurs cs:go',
         data: <?php echo $sf_data->getRaw('calendar')->getDataServeurGame(2) ?>
      }],
      credits: {
         enabled: false
      }
   });
});
</script>