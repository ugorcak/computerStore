<?php
class User extends BaseEntity{
    private static $tableName = "users";

    public $id, $username, $firstName, $lastName, $password, $email, $roleId;

    public function __construct()
    {
        parent::__construct();
    }

    public static function create(User $user){

        $query = "INSERT INTO " . self::$tableName . "(username, firstName, lastName, password, email, roleId) VALUES (?, ?, ?, ?, ?, ?)";

        $preparedQuery = DB::getDbConnection()->prepare($query);

        $success = $preparedQuery->bind_param(
            'sssssi',
            $user->username,
            $user->firstName,
            $user->lastName,
            $user->password,
            $user->email,
            $user->roleId
        );

        if(!$success){
            die(DB::getDbConnection()->error);
            return false;
        }
        $preparedQuery->execute();

        $lastId = $preparedQuery->insert_id;


        return $lastId;
    }

    public static function deleteById($id)
    {
        return DB::doQuery('DELETE FROM ' . self::$tableName . ' WHERE id = ' . $id);
    }

    public static function getUser($username, $password)
    {
        $hashPassword = Helper::getHash($password);
        $result = DB::doQuery('SELECT * FROM ' .self::$tableName . ' WHERE username ="'.$username.'" and password ="'.$hashPassword.'" LIMIT 1');



        if($result != null){
            return $result->fetch_object(__CLASS__);
        }

        return null;
    }

    public static function getUserById($id)
    {

        return DB::doQuery('SELECT * FROM' .self::$tableName . 'WHERE id = ' . $id);

    }

    public static function getUserBySessId($sessId){

        $result = DB::doQuery(  'SELECT * FROM ' . self::$tableName . ' u '.
                                'LEFT JOIN user_sessions us on u.id = us.userId '.
                                'WHERE us.sessId ="'.$sessId.'" ORDER BY created DESC LIMIT 1');

        if($result != null){
            return $result->fetch_object(__CLASS__);
        }

        return null;
    }

    public static function getByEmail($email)
    {
        $result = DB::doQuery('SELECT * FROM ' . self::$tableName .' WHERE email ="'.$email.'" LIMIT 1');



        if($result != null){
            return $result->fetch_object(__CLASS__);
        }

        return null;
    }

    public static function getAllUsers()
    {
        $result = DB::doQuery('SELECT * FROM ' . self::$tableName);

//        $users = array();


        while($user = $result->fetch_object("User"))
        {
            $users[] = $user;
        }
        return $users;
    }
}
?>