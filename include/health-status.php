<section>
<div class="container">
  <div class="row">
   <div class="col-12 col-md-12 col-lg-12 pt-5 pb-5">
     <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

            
        
<?php
            $health_title_arg=array(
            'post_type' => "health_status",
            'posts_per_page' => 7,
            'orderby' => 'ASC',
            );
            $i=0;
            $health_titles=get_posts($health_title_arg);
           foreach($health_titles as $health_title){  $i++; ?>
            <a class="nav-item nav-link <?php if($i==1){ echo "active"; } ?>" id="nav-<?=$i;?>-tab" data-toggle="tab" href="#nav-<?=$i;?>"
            role="tab" aria-controls="nav-<?=$i;?>" aria-selected="true"><?=$health_title->post_title;?></a>
            
            <?php }  ?>
            </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
  

            <?php
            $health_status_arg=array(
            'post_type' => "health_status",
            'posts_per_page' => 7,
            'orderby' => 'ASC',
            );
            $j=0;
            $health_statuses=get_posts($health_status_arg);
           foreach($health_statuses as $health_status){  $j++; ?>
           
<div class="tab-pane fade <?php if ($j==1){echo "active show" ;}?>" id="nav-<?=$j;?>" role="tabpanel" aria-labelledby="nav-<?=$j;?>-tab">
     <div class="row pl-3 pr-3">
      <div class="col-md-8 col-lg-8 tabs-contnt">
         <h2>  <?php echo $health_status->post_content;?> </h2>
     </div>
        <div class="col-md-4 col-lg-4">
        <?php echo $featured_image = get_the_post_thumbnail($health_status->ID,'', array('title' => $title));?>
        </div>
   </div>
</div>
            
            <?php }  ?>
         </div>
      </div>
   </div>
</section>
