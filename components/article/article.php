<?php

require_once('includes/functions.php');

class article extends cmsApp {

    function main() {

        if(isset($_REQUEST['id'])) {
            $id=$_REQUEST['id'];
            echo 'This will show article with id: '.$id;
        }
        else {
            echo 'A list of the article archive will be posted';
        }
    }
}