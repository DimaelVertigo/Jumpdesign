<?php

if(0 == $query->get('animation delay')){
	$dataToReturn = $query->get('animation type');
} else {
	$dataToReturn = $query->get('animation type') . ' " data-wow-delay="'.esc_attr( $query->get('animation delay') ).'s';
}