<?php


include 'messages.php';

    class Validation {

        function login(){
            $username           = $_POST['username'];
            $password           = $_POST['password'];
            
            $user_exists        = false;
            $user_validated     = false;
            
            $all_users = scandir('../users');

            $user_file_name = $username . '.csv';


            if(in_array($user_file_name, $all_users)){
                $user_exists = true;
                
                $csv_user = array_map('str_getcsv', file('../users/' . $user_file_name));
                array_walk($csv_user, function(&$a) use ($csv_user) {
                  $a = array_combine($csv_user[0], $a);
                });
                array_shift($csv_user);

                $csv_user = $csv_user[0];

                $found_username = $csv_user['användarnamn'];
                $found_email = $csv_user['email'];
                $found_image = $csv_user['bild'];
                $found_password = $csv_user['lösenord'];
            } 

            if($user_exists == true)
                if($found_username == $username && password_verify($password, $found_password))
                    $user_validated = true;

            if($user_validated == true){
                session_start();
                session_regenerate_id(true);
                $_SESSION['username'] = $found_username;
                $_SESSION['image'] = $found_image;
                $_SESSION['email'] = $found_email;
                $_SESSION['id'] = session_id();
                header("Location: dashboard.php");
                die();
            }

            if($user_exists == false)
                echo message::$wrong_info;

        }

        function register(){
            $user_exists            = false;
            $password_validated     = true;
            $password_conf_err      = false;

            $username               = $_POST['username'];
            $email                  = $_POST['email'];
            $image                  = $_POST['image'];
            $password               = $_POST['password'];


            if($password !== $_POST['conf_password'])
                $password_conf_err = true;

            if($password_conf_err == false){

                if(strlen($password) < 7 || !preg_match('~[0-9]+~', $password)){
                    echo message::$password;
                    $password_validated = false;
                }

                if($password_validated == true){
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    $csv_array = array(
                        ['användarnamn', 'email', 'bild', 'lösenord'], 
                        [$username, $email, $image, $password]
                    );
                
                
                $csv_file_name = "../users/$username.csv";

                $csv_file = fopen($csv_file_name, 'w');
                foreach ($csv_array as $csv_fields)
                    fputcsv($csv_file, $csv_fields);
                fclose($csv_file);


                    

                }

            }
                     
        }

        function logout(){
            session_start();
            unset($_SESSION['username']);
            unset($_SESSION['id']);
            session_destroy();
            header("location: index.php");
            die();
        }

        function session_check(){
            session_start();
            if(isset($_SESSION['username'])){
                header("Location: dashboard.php");
                die();
            }
        }

        function validation_check(){
            session_start();
            if(!isset($_SESSION['username'])){
                header("Location: index.php");
                die();
            }
        }
    }

if(isset($_POST['register'])){
    Validation::register();
}

if(isset($_POST['login'])){
    Validation::login();
}

if(isset($_POST['logout'])){
    Validation::logout();
}

?>