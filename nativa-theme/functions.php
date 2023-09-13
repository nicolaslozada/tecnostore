<?php
/* Creando constantes */
$web = get_bloginfo('url'); 
$ruta = get_bloginfo('template_url'); 
DEFINE ('WEB',$web);
DEFINE ('TEMPLATE', $ruta);
//ocultando barra
add_filter('show_admin_bar', '__return_false');
/* Habilitando Imágenes Destacadas en la plantilla */
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
//Obtención de imágenes
function imagen_post( $medidas ){
global $post;
	if ( has_post_thumbnail() ) {
        	$destacado_id = get_post_thumbnail_id();		
		$link_imagen =  wp_get_attachment_image_src( $destacado_id, $medidas );
	} else {
        	$images = get_posts(
            	array(
                	'post_type'      => 'attachment',
	                'post_mime_type' => 'image',
        	        'post_parent'    => $post->ID,
                	'posts_per_page' => 1				
	 	)
       		);		
	        if ( $images ) {
        	    $link_imagen =  wp_get_attachment_image_src( $images[0]->ID, $medidas );
	        }
	}
	return $link_imagen[0];	
}
// Función para obtener la url de la imagen destacada
function url_thumbnail() {
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id,'full');
	$image_url = $image_url[0];
	return $image_url;
}
?>