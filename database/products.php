<?php
    require_once('conn.php');
    function get_products(){
        global $mysqli;
        $query_string = 'SELECT * FROM products';
        $res = $mysqli-> query($query_string);
        $result = array();//to store data
        if($res && ($res-> num_rows > 0)){ // if query return data bor not
            $row = false; // variable for each row of data
            while($row=$res->fetch_assoc()){
                $result[] = $row;
            }
        }
        return $result;
    } 

    /*$trial=get_products();
    print_r($trial);*/
    
