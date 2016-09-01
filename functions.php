<?php
//require 'config.php';

	function login($username, $password, $mysqli){
		if($result = $mysqli -> query("SELECT id, password_hash FROM users WHERE username = '".$username."'")){
	            if($result -> num_rows != 0){
	                $rr = $result -> fetch_assoc();
	                if(password_verify($password, $rr['password_hash'])){
	                	$_SESSION['username'] = $username;
	                	$_SESSION['uid'] = $rr['id'];
 	                	return true;
	                }
	            }else{
	                return false;
	            }
	        }
    }

    function register($username, $password, $mysqli){
    	if($result = $mysqli -> query("SELECT * FROM users WHERE username = '".$username."'")){
            if($result -> num_rows > 0){
                return false;
            }else{
                if($mysqli -> query("INSERT INTO users (username, password_hash) VALUES ('".$username."', '".password_hash($password, PASSWORD_DEFAULT)."')")){
                    return true;
                }
            }
        }
    }

    function addPost($title, $content, $category, $mysqli){
    	if($result = $mysqli -> query("INSERT INTO posts (title, content, authorid, category) VALUES ('".$title."', '".$content."', '".$_SESSION['uid']."', '".$category."')")){
    		return true;
    	}else{
    		return false;
    	}
    }
function deletePost($id,$return,$mysqli){
	if($mysqli -> query("DELETE FROM posts WHERE id= '".$id."'")){
		return true;
	}
	else{
		return false;
	}
}
?>