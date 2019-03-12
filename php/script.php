<?php

$errors = [
    'name' => [
      'print' => '',
      'className' => ''
    ],
    'email' => [
      'print' => '',
      'className' => ''
    ],
    'message' => [
      'print' => '',
      'className' => ''
    ]
  ];
  
  // $formClass = null;
  if (count($_POST) > 0) {
  
    if (empty($_POST['name'])) { // jei tuscias
      $errors['name']['print'] = "Name field empty";
      $errors['name']['className'] = 'error';
      // $formClass = '';
    } else if (!isValidName($_POST['name'])) { // jei netuscias
      $errors['name']['print'] = "Name must be longer than 3 characters";
      $errors['name']['className'] = 'error';
      // $formClass = '';
    // } else {
    //   $formClass = "hidden";
    // }
  
    if (!isValidEmail($_POST['email'])) {
      $errors['email']['print'] = "Invalid email!";
      $errors['email']['className'] = 'error';
      $formClass = '';
    } 
    // else {
    //   $formClass = "hidden";
    // }
  if (messageValidate($_POST['message'])!='') {    
      $errors['message']['print'] = messageValidate($_POST['message'])!='';
      $errors['message']['className'] = 'error';
      $formClass = '';
  }
}
  //  else {
  //     $formClass = "hidden";
  // }
  
  if ($formClass === "hidden") {
    echo "Data entered correctly!";
  } else if ($formClass === '') {
    echo "<pre>";
    var_dump($errors);
    echo "</pre>";
  }
}
  ?>