<?php

                        // database connection with PDO
// class Dbh {
//   private $host = "localhost";
//   private $user = "root";
//   private $pwd = "";
//   private $dnName = "oopphp16";
//
//   protected function connect() {
//     $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
//     $pdo = new PDO($dsn, $this->user, $this->pwd);
//     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//     return $pdo;
//   }
// }
                            // Next
// class Test extends Dbh {

    // public function getUsers() {
    //   $sql = "SELECT * FROM users";
    //   $stmt = $this->connect()->query($sql);
    //   while($row = $stmt->fetch()) {
    //     echo $row['users_firstname'] . '<br>';
    //   }
    // }

                          // Next

// public function getUsersStmt($firstname, $lastname) {
//   $sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
//   $stmt = $this->connect()->prepare($sql);
//   $stmt->execute([$firstname, $lastname]);
//   $names = $stmt->fetchAll();
//
//   foreach ($names as $name) {
//     echo $name['users_dataofbirth'] . '<br>';
//   }
// }
                          // Next
// public function setUsersStmt($firstname, $lastname, $dob) {
//    $sql = "INSERT INTO users(users_firstname, users_lastname, users_dataofbirth) VALUES(?, ?, ?)";
//    $stmt = $this->connect()->prepare($sql);
//    $stmt->execute([$firstname, $lastname, $dob]);
// }

// }

                      // what you will do in html
// <?php
//   $testObj = new Test();
//   $testObj->setUsersStmt("John", "Doe", "1984-03-02");
// // ?>
