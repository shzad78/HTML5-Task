<?php



  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["demo-fname"])) {
      echo "Name is required";
      die;
    } else {
      $name = test_input($_POST["demo-fname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        echo "Only letters are allowed in name";
        die;
      }
    }

    if (empty($_POST["demo-lname"])) {
      echo "Last name is required";
      die;
    } else {
      $lname = test_input($_POST["demo-lname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
        echo "Only letters are allowed in last name";
        die;
      }
    }

    if (empty($_POST["demo-email"])) {
      echo "Email is required";
      die;
    } else {
      $email = test_input($_POST["demo-email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        die;
      }
    }

    if(empty($_POST["demo-password"])) {
      echo "Password is required";
      die;
    }

    if (empty($_POST["demo-tel"])) {
      echo "Telephone is required";
      die;
    }
    else{
      $tel = $_POST["demo-tel"];
      if(!!preg_match('/^\(?\+?([0-9]{1,4})\)?[-\. ]?(\d{3})[-\. ]?([0-9]{7})$/', trim($tel))){
        echo "invalid phone fromat";
        die;
      }

    }

    if (empty($_POST["demo-address"])) {
      echo "Address is required";
      die;
    }

    echo "Success";
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 ?>
