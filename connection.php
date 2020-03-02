<?php
/**
*Connecting database
**/
function connect() {

  $configs = include('config.php');

  $servername = $configs['db_host'];
  $username = $configs['db_username'];
  $password = $configs['db_password'];
  $database = $configs['db_database'];

  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  return $conn;

}

/**
* Connection close
**/
function connection_close($conn) {
  $conn->close();
}

function register($data) {

  $conn = connect();
  $username = $data['username'];
  $password = password_hash($data['password'], PASSWORD_DEFAULT);
  $email = $data['email'];
  $firstName = $data['firstName'];
  $lastName = $data['lastName'];

  $sql = "INSERT INTO tbusers (userName, password, email, firstName, lastName)
VALUES ('$username', '$password', '$email', '$firstName', '$lastName')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

connection_close($conn);
}


/**
* Login
**/
function login($data) {
  $conn = connect();
  $username = $data['username'];
  $password = $data['password'];

  $sql = "SELECT id, password FROM tbusers where username = '$username'";
  $result = $conn->query($sql);

  $row   = mysqli_fetch_row($result);

  if(is_array($row)) {
    $userId = $row[0];
    $pass_hash = $row[1];
  } else {
    $res = array('success' => 0, 'message' => 'User Not Exists!');
    return $res;
  }

  if (password_verify($password, $pass_hash)) {
    $res = array('success' => 1, 'message' => 'Login Successfully', 'Username' => $username);
  } else {
    $res = array('success' => 0, 'message' => 'Password Error');
  }
  return $res;
}

?>
