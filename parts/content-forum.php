


<div id="forum-container" class="col s12">
    <?php
$user = wp_get_current_user();


    if(current_user_can('administrator') || ($user->roles[0] == 'um_cdn-member')) {

    the_content();

    if (comments_open()){;?>

      <div id="comment-wrapper" >

          <?php	comments_template();?>

      </div>

  <?php  }

} else {
  _e( 'You must be a CDN Member and logged in to participate in the discussion forum.', 'mfn' );
}

    ?>
</div>
