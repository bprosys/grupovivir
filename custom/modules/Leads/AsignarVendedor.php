<?php
/*
Asignacion Aleatoria de prospectos creado por Sebastian Mujica
*/
class AsignarVendedor {
  function asignarAleatoreamente($bean,$event,$arguments){
     //solo se ejecuta para registros nuevos
     if ($bean->fetched_row == false) {
    // error_reporting(E_ALL);
    
    // ini_set('display_errors', '1');

    //echo "<pre>";
    global $current_user,$db;

    include_once('modules/ACLRoles/ACLRole.php');
    //include_once('modules/AWO_WorkFlowC/aow_utils.php');

    $roles = ACLRole::getUserRoleNames($current_user->id);
    //var_dump($roles);
    

    /*
    var_dump($current_user->load_relationship('aclroles'));
    //var_dump($current_user->aclroles);
    $roles=$current_user->aclroles->getBeans();
    var_dump($roles);
    //var_dump($roles->load_relationship('acl_roles_users'));
    */
    $demostrador = false;
    foreach ($roles as $key => $value) {
        if ($value == 'Demostrador'){
            $demostrador = true;
            break;
        }
    }

    $bean->load_relationship('assigned_user_link');
    
    /*obtenemos los usuarios 
    get_user_array($add_blank = true, $status = 'Active', $user_id = '', $use_real_name = false, $user_name_filter = '', $portal_filter = ' AND portal_only=0 ', $from_cache = true)
    */ 
    
    

    //$usuarios = BeanFactory::getBean('Users');
    //$usuarios->get_list($order_by = "",$where = "",$row_offset = 0,$limit=-1,$max=-1,$show_deleted = 0);
    $query = "SELECT users.id FROM users
INNER JOIN acl_roles_users ON users.id = acl_roles_users.user_id
INNER JOIN acl_roles ON acl_roles_users.role_id = acl_roles.id
WHERE acl_roles.name = 'Vendedor' and users.status = 'Active' and acl_roles.deleted=0 and users.deleted = 0 and acl_roles_users.deleted = 0";
    
    $results=$db->query($query, true);
    //$row = $db->fetchByAssoc($results);

    
    while ( $usuario = $db->fetchByAssoc($results) ) {
         $usuarios[] = $usuario['id'];
    }



    //var_dump($usuarios);

    $users = get_user_array(false);
    $users = array_values($usuarios);
    //var_dump($users);
    /*

    echo $current_user->id." id actual";
    echo "</br>";
    echo "Last user en session";
    echo "</br>";

    var_dump($_SESSION['lastuser']);

*/
    $id = getRoundRobinUser($users, 'control usuarios');

    setLastUser($id,'control usuarios'); 

    //echo $id." usuario round robin";
    
    if($demostrador == true){
        $bean->assigned_user_link->add($id);
    }
    else{
        $bean->assigned_user_link->add($current_user->id);
    }
    //$GLOBALS['log']->error('Entro prospectos');    
    //var_dump($bean);

    //echo "</pre>";
  

    //exit('<br>');

    }
  }
}
?>