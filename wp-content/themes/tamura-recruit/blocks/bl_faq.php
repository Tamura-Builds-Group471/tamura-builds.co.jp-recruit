<?php
$args = wp_parse_args(
  $args,
  array(
    'faq_num' => '',
    'faq_head_id' => '',
    'faq_contents_id' => '',
    'faq_q' => '',
    'faq_a' => '',
    'first_touch' => '',
    'show' => '',
  )
);
?>

<div class="faq_box">
    <h3 class="faq_box_q" id="<?php echo $args['faq_head_id'] ?>">
        <button class="accordion-button collapsed <?php echo $args['first_touch'] ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $args['faq_contents_id'] ?>" aria-expanded="false" aria-controls="<?php echo $args['faq_contents_id'] ?>">
            <span class="faq_box_q_ttl"><?php echo $args['faq_q'] ?></span>
        </button>
    </h3>
    <div id="<?php echo $args['faq_contents_id'] ?>" class="accordion-collapse collapse <?php echo $args['show'] ?>" aria-labelledby="<?php echo $args['faq_head_id'] ?>" data-bs-parent="#accordion<?php echo $args['faq_num'] ?>">
        <div class="faq_box_a">
            <p><?php echo $args['faq_a'] ?></p>
        </div>
    </div>
</div>   