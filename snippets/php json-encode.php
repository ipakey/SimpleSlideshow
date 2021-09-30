<script type='text/javascript'>
  let obj = <?php echo json_encode($cards); ?>;
	console.log(obj);
//	alert(obj[2][0]);
</script>


<?php  
  $set = $_GET['set'];
echo' Set chosen : '.$set;
  $path = "./data/";
  $path.= $set;
  $path.= ".json";
echo $path;
  $order = [];
  $cards = json_decode(file_get_contents($path), true);
  $cards_json = json_encode($cards);
echo $cards_json;
  $lengthSet = count($cards);
  $i = 0;
  while($i < $lengthSet){
    array_push($order, $i);
    $i++;
  }
  shuffle($order);
var_dump($order);
var_dump($cards);
?>