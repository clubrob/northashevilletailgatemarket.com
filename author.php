<?php
global $wp;
$user_slug = $wp->query_vars[author_name];
$user = get_user_by('slug', $user_slug);
$user_id = $user->ID;
$user_meta = get_user_meta($user_id);

print_r($user_meta);

?>
