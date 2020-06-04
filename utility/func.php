<?php

function get_images_from_post($post_id, $image_size) {
    $post = get_post($post_id);
    if (has_block('gallery', $post->post_content)) {
        $post_blocks = parse_blocks($post->post_content);
        $ids = $post_blocks[0]['attrs']['ids'];
    }
    else {
        $gallery = get_post_gallery( $post->ID, false );
        $ids = explode ( ",", $gallery['ids'] );
    }
    $image = array();
    foreach($ids as $id) {
        array_push($image, wp_get_attachment_image_src($id, $image_size)[0]);
    }
    return $image;
}