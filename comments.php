<?php

$arg=array(
    "max_depth"=>3,
    'reverse_top_level'=>true,
    'style'=>"ul",
    'avatar_size'=>32

);
if (comments_open()){
    echo "<ul class='list-unstyled comments-list'>";
    wp_list_comments($arg);
    echo "</ul>";
    comment_form();
}