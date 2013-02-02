<?php
class DB_Query {
    public function __construct($sql) {
        $connection = mysql_connect("localhost:8889","root","root");
        mysql_select_db("phge", $connection);
        $result = mysql_query ($sql);
        while ($row = mysql_fetch_array($result, MYSQL_NUM))
        {
            // (5) Print out each element in $row, that is, print the values of
            // the attributes
            foreach ($row as $attribute) {
                $this->{$row} = $attribute;
            }
        }
    }
}