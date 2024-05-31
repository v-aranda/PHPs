<?php 


class Connection{

    private static $section;
    public static function startSection(): PDO{

        if(empty(self::$section)){

            try{
                self::$section = new PDO('mysql:host=localhost;port=3306;dbname=users','root','mysql');
                echo("Conexão bem sucedida!");
                return self::$section;
            }
            catch(PDOException $e){
                die("CONNECTION ERROR::".$e -> getMessage());  
            }    
        }
    }
}

?>