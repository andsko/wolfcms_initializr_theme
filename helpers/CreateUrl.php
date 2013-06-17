<?php
/*
* simple function that creates link form slug or URL
*/

function createUrl($url,$self){
    if (filter_var($url, FILTER_VALIDATE_URL)){
        return $url;
    } else if ($self->find($url)){
        return $self->find($url)->url();
    } else {
        return URL_PUBLIC; 
    }
}
?>