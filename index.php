<?php
get_header();?>
<div class="container">
    <div class="row">


<?php

    if (have_posts()) {//start condition
        while (have_posts()){ //start while loop 
            the_post();?>
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title">
                    <a href="<?php the_permalink();?>">
                         <?php the_title();?>
                    </a>
                </h3> 
                <span class="author"><i class="fa fa-user"></i><?php the_author_link();  ?> </span>
                <span class="date"><i class="fa fa-calendar"></i><?php the_time('F j ,Y') ; ?></span>
                <span class="comment"><i class="fa fa-comments"></i><?php comments_popup_link("no comments","one comment",'% comments',"","the comment disabled");?>  </span>
                <div class="imag">   <?php the_post_thumbnail("medium",["class"=>"img-responsive img-thumbnail"]);?></div>
                <p class="post-content"><?php the_excerpt(); ?></p>

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
        </div>

       <?php }  // end while loop 
       echo '<div class="pagination d-flex w-100 p-3 justify-content-between">';
       if(get_previous_posts_link()){
           previous_posts_link('<i class="fas fa-chevron-left"></i>prev');
       }else{
           echo '<a href="#" class="btn btn-secondary  disabled" role="button" aria-disabled="true">prev</a>';
       }
       if(get_next_posts_link()){
           next_posts_link('next<i class="fas fa-chevron-right"></i>') ;
       }else{
           echo '<a href="#" class="btn btn-secondary  disabled" role="button" aria-disabled="true">next</a>';
       }
       echo "</div>";
    } // end the condition
    
?>

    </div>
</div>













<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title"> the title</h3>
                <span class="author"><i class="fa fa-user"></i>bahaa, </span>
                <span class="date"><i class="fa fa-calendar"></i>12/20/2022, </span>
                <span class="comment"><i class="fa fa-comments"></i>30 comments </span>
                <img class='img-responsive img-thumbnail' src="http://placehold.it/600x200/300" alt="">
                <p class="post-contLorement"> ipsum dolor sit amet consectetur adipisicing elit. Vero totam doloribus laboriosam temporibus tempore fuga esse illo quaerat porro.</p>
                <hr>

                <div class="catigories"><i class="fa fa-tags"></i>html, css, javascript</div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title"> the title</h3>
                <span class="author"><i class="fa fa-user"></i>bahaa, </span>
                <span class="date"><i class="fa fa-calendar"></i>12/20/2022, </span>
                <span class="comment"><i class="fa fa-comments"></i>30 comments</span>
                <img class='img-responsive img-thumbnail' src="http://placehold.it/600x200/300" alt="">
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero totam doloribus laboriosam temporibus tempore fuga esse illo quaerat porro.</p>
                <hr>

                <div class="catigories"><i class="fa fa-tags"></i>html, css, javascript</div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title"> the title</h3>
                <span class="author"><i class="fa fa-user"></i>bahaa, </span>
                <span class="date"><i class="fa fa-calendar"></i>12/20/2022, </span>
                <span class="comment"><i class="fa fa-comments"></i>30 comments</span>
                <img class='img-responsive img-thumbnail' src="http://placehold.it/600x200/300" alt="">
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero totam doloribus laboriosam temporibus tempore fuga esse illo quaerat porro.</p>
                <hr>

                <div class="catigories"><i class="fa fa-tags"></i>html, css, javascript</div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title"> the title</h3>
                <span class="author"><i class="fa fa-user"></i>bahaa, </span>
                <span class="date"><i class="fa fa-calendar"></i>12/20/2022, </span>
                <span class="comment"><i class="fa fa-comments"></i>30 comments</span>
                <img class='img-responsive img-thumbnail' src="http://placehold.it/600x200/300" alt="">
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero totam doloribus laboriosam temporibus tempore fuga esse illo quaerat porro.</p>
                <hr>
                <div class="catigories"><i class="fa fa-tags"></i>html, css, javascript</div>
            </div>
        </div>
</div>



</div>
<?php get_footer(); ?>