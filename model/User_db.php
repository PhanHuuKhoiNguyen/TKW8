<?php
    
    class UserDB {
      public function insertUser($username, $password, $email) {
          $db = Database::getDB();
          $query = 'INSERT INTO users(username,pass, email) VALUES(:username, :password, :email)';
          $statment = $db->prepare($query);
          
          
          $statment->bindValue(":username", $username);
          $statment->bindValue(":password", $password);
          $statment->bindValue(":email", $email);
          
          // Thực thi câu truy vấn
          $statment->execute();
      }

      public function getUsers() {
          $db = Database::getDB();
          $query = "SELECT * FROM users";
          $statment = $db->prepare($query);
          $statment->execute();

          $users = array();
          foreach ($statment as $row) {
              $user = new User();
              $user->setID($row["id"]);
              $user->setUsername($row["username"]);
              $user->setPassword($row["pass"]);
              $user->setEmail($row["email"]);
              $users[] = $user;
          }
          return $users;
      }
      public function getUser($username){
        $db = Database::getDB();
          $query = "SELECT * FROM users WHERE username=:username";
          $statment = $db->prepare($query);
          $statment->bindValue(":username",$username);
          $statment->execute();
          $row=$statment->fetch();
          $statment->closeCursor();

          if($row === false){
            return null;
          }

          $user=new User();
          $user->setID($row["id"]);
          $user->setUsername($row["username"]);
          $user->setPassword($row["pass"]);
          $user->setEmail($row["email"]);

          return $user;


      }

     

      public function getEmail($email){
        $db=Database::getDB();
        $query="SELECT email FROM users WHERE email=:email";
        $statment=$db->prepare($query);
        $statment->bindValue(":email",$email);
        $statment->execute();
        $row=$statment->fetch();
        $statment->closeCursor();

        if($row === false){
          return null;
        }
        $user=new User();
          $user->setID($row["id"]);
          $user->setUsername($row["username"]);
          $user->setPassword($row["pass"]);
          $user->setEmail($row["email"]);

          return $user;
      }
    }
              
          
      

  ?>