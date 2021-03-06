


<div class="container">
    <?php

    if(is_user_logged_in() || current_user_can('editor'))  {

    the_content();

    acf_form(array(
      'post_id'		=> 'new_post',
      'post_content' => true,
      'post_title' => true,
      'field_group' => '1473',
    //  'fields' => array(field_5dadde0971dab, field_5daddc49010b7,field_5daf03621ebf0, field_5dade67da6945, field_5dade6a4a6946, field_59ef253bd3320, field_59ef256ad3321, field_59ef24b7d331e, field_5de5171c85ded),
      'new_post'		=> array(
        'post_type'		=> 'programmes',
        'post_status'		=> 'publish'),
      'return'		=> '%post_url%',
      'html_submit_button'  => '<input type="submit" class="acf-button green darken-2 btn-large" value="%s" />',
      'submit_value'		=> __("Submit Your Post", 'acf'),
    ));

} else {
  echo 'You must be <a href="https://memoryfriendly.org.uk/login/">logged in</a> to submit content.';
}

    ?>
</div>
