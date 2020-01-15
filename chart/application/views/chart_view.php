<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GRAFIK MONITORING ENERGI</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/morris.css'?>">
  </head>
  <body>
    <h2>Monitoring Energi</h2>
  <?php
for($b=1;$b<=$forsensor;$b++){
  ?>

<div id="graph.<?php echo $b?>"></div>

<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/morris.min.js'?>"></script>
<script>
    Morris.Line({
      element: 'graph.<?php echo $b?>',
      data: <?php echo $data[$b];?>,
      xkey: 'jam',
      ykeys: ['id_sensor', 'value_1', 'value_2', 'value_3', 'value_4'],
      labels: ['Id Sensor', 'Value 1', 'Value 2', 'Value 3', 'Value 4']
    });
</script>

<?php }?>
  </body>
</html>
