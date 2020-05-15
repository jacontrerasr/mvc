    <?php

    class Conectar{

            public static function conecta(){
                //$conecta = new mysqli("localhost","root","","trabajo");
                //$conecta = new mysqli("remotemysql.com:3306","sMTJoiJ0p1","jU4YYjF3ws","sMTJoiJ0p1");
                $conecta = new mysqli("sql9.freemysqlhosting.net:3306","sql9340695","gm3Xg13reE","sql9340695");
                $conecta ->query("SET NAMES 'utf-8'");
                return $conecta;    
            }

    }

?>