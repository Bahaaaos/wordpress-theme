<?php
get_header();?>
<div class="container">
    <
    <?php

if (have_posts()) {//start condition
    while (have_posts()){ //start while loop 
        the_post();?>
        
        <div class="main-post single-post mb-0">
             <h3 class="post-title">   <?php the_title();?>  </h3>                           
                
            <span class="author"><i class="fa fa-user"></i><?php the_author_link();  ?> </span>
            <span class="date"><i class="fa fa-calendar"></i><?php the_time('F j ,Y') ; ?></span>
            <span class="comment"><i class="fa fa-comments"></i><?php comments_popup_link("no comments","one comment",'% comments',"","the comment disabled");?>  </span>
            <div class="row">
                <div class="col-sm-6">
                     <div class="imag mt-3">   <?php the_post_thumbnail("medium",["class"=>"img-responsive img-thumbnail"]);?></div>

                </div>
                <div class="col-sm-6">
                     <p class="post-content"><?php the_content(); ?></p>

                </div>
            </div>
            <hr>

            <div class="catigories"><i class="fa fa-tags"></i> <?php the_category(", ");?></div>
            <p class="tags">
                <?php
                    if (has_tag()){
                        the_tags();
                    }else {
                        echo "the tags: No tags";
                    }
                    
                    
                    
                ?>
            </p>
        
        </div>



<?php } //end the loop

 echo '<div class="pagination d-flex w-100 px-1 py-2 justify-content-between">';
 if(get_previous_post_link()){
     previous_post_link('%link',"prev");
 }else{
     echo '<a href="#" class="btn btn-secondary  disabled" role="button" aria-disabled="true">prev</a>';
 }
 if(get_next_post_link()){
     next_post_link('%link',"next") ;
 }else{
     echo '<a href="#" class="btn btn-secondary  disabled" role="button" aria-disabled="true">next</a>';
 }
 echo "</div>"; ?>

        <div class="row">
            <div class="col-md-2 avatar">
                <?php
                $arg_avatar=array(
                    'class'=>"img-responsive img-thumbnail"
                );
                   echo  get_avatar(get_the_author_meta("ID"),120,"",'avatar image',$arg_avatar);
                ?>
            </div>  
            <div class="col-md-10 author">
                <h5 class="text-secondary ">
                    <?php the_author_meta("first_name") ;

                    echo " ";
                        the_author_meta('last_name');
                    ?>
                    <span class='nickname text-primary'>  [<?php the_author_meta('nickname');?>]</span> 
                </h5>
                <?php
                                

                    if (get_the_author_meta('description')){
                        echo '<p class="text-muted">' ;
                        the_author_meta('description');
                       
                        echo '</p>';
                    }

                ?>
            </div>
            <p class='p-3'>
                      the count of post  :  <span class="posts-count text-primary"> <?php echo count_user_posts(get_the_author_meta("ID"))   ;?> , </span>
                      the author link :<?php the_author_posts_link();?>

            </p>

        </div>


 <?php comments_template();

} ///end if condition?>
</div>
<?php get_footer(); ?>