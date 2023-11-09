<?php

function BlogController(){
    require './Models/BlogModel.php';
    $data =  BlogModel();
    
    require './views/layout/header.phtml';
    require './views/partials/blog.phtml';
    require './views/layout/footer.phtml';
    
}