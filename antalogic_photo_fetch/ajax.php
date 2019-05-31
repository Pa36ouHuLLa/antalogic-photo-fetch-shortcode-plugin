<?php

    const photos_url = "https://jsonplaceholder.typicode.com/photos/";

    function select_all($albumId){
        $photos = array();
        $all_photos_json = json_decode(file_get_contents(photos_url.$albumId));
        foreach ($all_photos_json as $item){
            $photo_url = $item-> thumbnailUrl;
            array_push($photos,html_wrapper_photos($photo_url));
        }
        echo implode($photos);
    }

    function html_wrapper_photos($photo_url){
        return '<div class="photo" style="display: inline-block; padding-left: 2%">
                    <img src="'.$photo_url.'" alt="photo">
                </div>';
    }
select_all($_POST['select']);