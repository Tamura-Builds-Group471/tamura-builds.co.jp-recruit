<?php
$args = wp_parse_args(
  $args,
  array(
    'num' => '',
    'midashi' => '',
    'class' => '',
  )
);
?>
<div class="flow_list <?php echo $args['class'] ?>">
    <h3 class="flow_list_ttl"><?php echo $args['midashi'] ?></h3>
    <p class="flow_list_num"><span class="flow">FLOW</span><span class="num"><?php echo $args['num'] ?></p>
</div>