<?php 
get_header();
?>
<div class="container author-page">
    <h1 class="text-center p-2 text-secondary">
        <?php the_author_meta("first_name");?>
        <?php the_author_meta('last_name');?>
        page
    </h1>
    <!-- start row  -->
    <div class="main-info bg-white p-3">
        <div class="row">
            <div class="col-md-3 text-center">
                <?php
                   $arg_avatar=array(
                    'class'=>"img-responsive img-thumbnail"
                );
                   echo  get_avatar(get_the_author_meta("ID"),196,"",'avatar image',$arg_avatar);
                
                ?>
            </div>
            <div class="col-md-9">
                <ul class="list-unstyled">
                    <li> First Name :<?php the_author_meta("first_name") ;?></li>
                    <li> Last Name : <?php the_author_meta("last_name");?> </li>
                    <li> Nick Name : <?php the_author_meta("nickname")?></li>
                </ul>
                <p class="">
                <?php
                    if (get_the_author_meta('description')){
                        the_author_meta('description');
                       
                    }else{
                        echo "there is no description";
                    }
                ?>
                </p>
            </div>
        </div>
    </div>
    <!-- end row  -->
    <!-- start row  -->
    <div class="row text-center statists">
        <div class="col-md-4">
            <div class="stat">
                the count of post  :  
                <span class="posts-count"> <?php echo count_user_posts(get_the_author_meta("ID"))   ;?> 
                </span>
            </div>
        </div>
        <div class="col-md-4"> 
            <div class="stat">  count comments: 
            <span>
                <?php 
                $arg=array(
                    'user_id'=> get_the_author_meta('ID'),
                    'count'=>true
                );
                echo get_comments($arg);
                 ?>
            </span>      
            </div>
        </div>
        <div class="col-md-4"> <div class="stat"> somthing else <span>0</span></div></div>
    </div>
    <!-- end row  -->
    <!-- start author posts  -->
    <h3 class=''>
        <?php the_author_meta("first_name");?>
        <?php the_author_meta('last_name');?>
        posts

    </h3>

    <?php    
    if (have_posts()) {//start condition
        while (have_posts()){ //start while loop 
            the_post();?>
        
        <div class="row author-post">
            <div class="col-sm-3">
                <div class="imag"> <?php the_post_thumbnail("",["class"=>"img-responsive img-thumbnail"]);?></div>
            </div>   
            <div class="col-sm-9 p-3">
                <h3 class="post-title">
                    <a href="<?php the_permalink();?>">
                        <?php the_title();?>
                    </a>
                </h3> 
                <span class="author"><i class="fa fa-user"></i><?php the_author_meta('nickname') ?> </span>
                <span class="date"><i class="fa fa-calendar"></i><?php the_time('F j ,Y') ; ?></span>
                <span class="comment"><i class="fa fa-comments"></i><?php comments_popup_link("no comments","one comment",'% comments',"","the comment disabled");?>  </span>
                <p class="post-content"><?php the_excerpt(); ?></p>            
            </div>
        </div>

       <?php }  // end while loop 
    }// end if condition
    ?>
    <?php 

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
    
    <!-- end  author posts  -->

</div>

<?php
 get_footer();
 ?>