<!DOCTYPE HTML>
<?php
session_start(); 

ini_set('display_errors','On');
error_reporting(E_ALL|E_STRICT);
function authenticate($post) {
    
    //makes connection to the database
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)"; 
        exit();
    }


    $sql = " SELECT userID FROM users WHERE username='".$post['uid']."' AND password='".$post['upass']."';";

    $result = $connection->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    var_dump($result->num_rows > 0);
    if ($result->num_rows >0){
        return $row['userID'];
    } else {
        return FALSE;
    }
}
function createUser($post){
    $connection = new mysqli('localhost','root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }
    $sql = "INSERT INTO users VALUES(NULL,'".$post['uid']."','".$post['upass']."','".$post['uemail']."',NULL,NULL,NULL,NULL,'0');";
    $result = $connection->query($sql);

    return $result;
}
function createAccount($post){
    
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }

    $sql = "UPDATE users SET (blogname, location, shortdesc) = ('".$post['blogname']."','".$post['location']."','".$post['descrip']."') where username = ".$_SESSION['userID'].';';

    $result = $connection->query($sql);

    return true;
}

function getRecentPosts(){
   $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }

    $sql = "SELECT * FROM posts ORDER BY date desc LIMIT 20";
    $result = $connection->query($sql);
    
    return $result;
}

function submitPost($post, $files){
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }
    $sql = "SELECT count(*) AS total FROM posts";
    $result = $connection->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    $name = $row['total'];
    $name++;

    $name = './tmp/'.$_SESSION['userName'].$name.'.jpg';
    move_uploaded_file($files['img'], $name); 
    
    
    $sql = "INSERT into posts VALUES(NULL,'TITLE','".$post['textfield']."','".$_SESSION['userID']."','./tmp/tmp.jpg','Tokyo', NOW()) ;";
    $result = $connection->query($sql);
    
    return $name;
}

function getSubbedPosts(){
   $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }

    $sql = "SELECT * FROM posts WHERE userID in (SELECT subbedID FROM subscriptions WHERE userID ='".$_SESSION['userID']."') ORDER BY date asc LIMIT 20";
    $result = $connection->query($sql);
    
    return $result;
}

function addSub($post){
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }

    $sql = "INSERT INTO subscriptions VALUES (".$_SESSION['userID'].",".$post.");";
    $result = $connection->query($sql);
    
    return $result;
}

function removeSub($post){
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }$result = authenticate($_POST);
    if ($result){
        $_SESSION['loggedIn'] = TRUE;
        $_SESSION['userID'] = $result;
        $_SESSION['userName'] = $_POST['uid'];
        $_SESSION['language'] = 0;
        header('Location: ./home.php');
    } else {
        session_destroy();    
        header('location: ./home.php'); 
        
    }


    $sql = "DELETE FROM subscriptions WHERE userID ='".$_SESSION['userID']."' AND subbedID ='".$post['sub']."';";
    $result = $connection->query($sql);
    
    return $result;
}

function saveImage($img){
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }

    $sql = "SELECT count(*) AS total FROM images";
    $result = $connection->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    $name = $row['total'];

    $name++;


    file_put_contents($name, $img); 
    return $name;
}

function getTagPosts($get){
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }

    $sql = "SELECT * FROM posts WHERE postID in (SELECT postID FROM tags where tagname = '".$get['search']."') ORDER BY date asc LIMIT 20;";
    $result = $connection->query($sql);
    
    return $result;
}
function getUserThumb($get){
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }

    $sql = "SELECT username, thumbnail, blogName FROM users WHERE userID = '".$get."';";
    $result = $connection->query($sql);
    
    return $result;
}

function getPost($get){
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }

    $sql = "SELECT * FROM posts WHERE postID = '".$get."';";
    $result = $connection->query($sql);
    
    return $result;
}

function getProfilePosts($get){
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }

    $sql = "SELECT * FROM posts WHERE userID = '".$get."' ORDER BY date asc LIMIT 20;";
    $result = $connection->query($sql);
    
    return $result;
}

function getProfile($get){
    $connection = new mysqli('localhost', 'root', 'root', 'blog');

    if ($connection->connect_error){
        echo "Connection error -- blame Ryan :)";
        exit();
    }

    $sql = "SELECT * FROM users WHERE username ='".$get."';";
    $result = $connection->query($sql);
    
    return $result;
}

?>
