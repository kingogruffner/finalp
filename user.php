<?php

require_once('dbcon.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function register($uname,$upass,$umail,$fname,$lname)
	{
		try
		{
			$new_password = password_hash($upass, PASSWORD_DEFAULT);
			$this->conn-> begintransaction();
			$stmt = $this->conn->prepare("INSERT INTO user(Username,Password,Email,FirstName,LastName) 
		                                               VALUES(?,?,?,?,?)");
			$stmt ->bindvalue(1,$uname);
			$stmt ->bindvalue(2,$new_password);
			$stmt ->bindvalue(3,$umail);
			$stmt ->bindvalue(4,$fname);
			$stmt ->bindvalue(5,$lname);		  
				
			$stmt->execute();
			$this->conn-> commit();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	
	public function doLogin($uname,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT Username, Password FROM user WHERE Username=?");
			$stmt ->bindvalue(1,$uname);
			$stmt->execute();

			$row=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $row['Password']))
				{
					$_SESSION['user_session'] = $row['UID'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>