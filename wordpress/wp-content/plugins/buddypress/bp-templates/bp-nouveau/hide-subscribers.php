add_action('bp_ajax_querystring','bpdev_exclude_users',20,2);
function bpdev_exclude_users($qs=false,$object=false){
    //list of users to exclude
     
    if($object!='members')//hide for members only
        return $qs;
        
    $excluded_user=join(',',bpdev_get_subscriber_user_ids());//comma separated ids of users whom you want to exclude
  
    
    $args=wp_parse_args($qs);
    
    //check if we are searching for friends list etc?, do not exclude in this case
    if(!empty($args['user_id']))
        return $qs;
    
    if(!empty($args['exclude']))
        $args['exclude']=$args['exclude'].','.$excluded_user;
    else 
        $args['exclude']=$excluded_user;
      
    $qs=build_query($args);
   
   
   return $qs;
    
}

function bpdev_get_subscriber_user_ids(){
  
    $subscribers= get_users( array( 'role' => 'subscriber', 'fields' => 'ID' ) );
  
   return $users;
}