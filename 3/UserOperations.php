<?php

class UserManager {
 
    private static $filePath = "data.json";

    
    public static function getAllUsers() {
        if (!file_exists(self::$filePath)) {
            return [];
        }
        $data = file_get_contents(self::$filePath);
        return json_decode($data, true) ?: [];
    }

   
    public static function saveUser($userData) {
        $users = self::getAllUsers(); 
        $users[] = $userData;       
        $jsonData = json_encode($users, JSON_PRETTY_PRINT);
        return file_put_contents(self::$filePath, $jsonData);
    }

  
    public static function deleteUser($email) {
        $users = self::getAllUsers();
        $filteredUsers = array_filter($users, function($user) use ($email) {
            return $user['email'] !== $email;
        });
        return file_put_contents(self::$filePath, json_encode(array_values($filteredUsers), JSON_PRETTY_PRINT));
    }
}