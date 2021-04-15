<?php

function pretty_dump($data) {
   echo "<pre>",var_dump($data),"</pre>";
}


function file_get_json($filename) {
   $data_string = file_get_contents($filename);
   return json_decode($data_string);
}


function create_user_data($user) {

	$classes_data = explode(" ", $inputClasses);

	$arr = array('name' => $_POST['inputfirstname'] . $_POST['inputlastname'], 'firstname' => $_POST['inputfirstname'], 'lastname' => $_POST['inputlastname'], 'type' => $_POST['inputType'], 'email' => $_POST['inputEmail'], 'classes' => $classes_data);

	file_put_contents($users, json_encode($arr));

}



function update_database($user) {


   // data items to delete
   unset($user->lastname);
   unset($user->firstname);
   unset($user->name);
   // unset($arr['server']['SERVER-01'][0]['id']);

   // the new (dummy) data that needs to be set in lieu of deleted data
   $lastname = $_POST['inputlastname'];
   $firstname = $_POST['inputfirstname'];
   // $id = 9;

   $user->lastname = $lastname;
   $user->firstname = $firstname;
   $user->name = $firstname . ' ' . $lastname;
   // $arr['server']['SERVER-01'][0]['id'] = $id;

   // array with inserted values
   pretty_dump($user);
   update_user_data($user);



}


function update_user_data($user) {
	

}
