<html>
<head>
<style>
dt {
  float:left; clear:left;
  font-weight:bold;
  margin-right:10px;
  width:15%;
  text-align: right;
}
dd { text-align:left; }
</style>
</head>
<body>

<?php





?>


<dl>
  <dt>Item No:</dt><dd><?php echo "$item->itemNo"; ?></dd>
  <dt>Price:</dt><dd>
       <?php echo \prices\retail\dollar($item->price); ?>
       </dd>
  <dt>Quantity On Hand:</dt><dd><?php echo "$item->qtyOnHand"; ?></dd>
</dl>
</body>
</html>