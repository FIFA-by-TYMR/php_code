<?php

/**
 * Created by PhpStorm.
 * User: Danma
 * Date: 5/16/2017
 * Time: 4:10 PM
 */
class exportC
{
    public $query;
    public $query1;
    public $tableName;
    public $fileDirectory;
    public $dbHandle;

    public function __construct($tableName, $fileDir, $dbhandle)
    {
        $this->tableName = $tableName;
        $this->fileDirectory = $fileDir;
        $this->dbHandle = $dbhandle;
        $this->query = "    SELECT `COLUMN_NAME`
        FROM `INFORMATION_SCHEMA`.`COLUMNS`
        WHERE `TABLE_NAME`='$tableName'
        INTO OUTFILE '$fileDir'
          FIELDS TERMINATED BY ','
          ENCLOSED BY ''
          LINES TERMINATED BY ','";
        $this->query1 = "
        SELECT * FROM '$tableName'
            INTO OUTFILE '$fileDir'
            FIELDS ESCAPED BY ''
            TERMINATED BY ','
            ENCLOSED BY ''
            LINES TERMINATED BY '\r\n';";
    }


        public function ColName()
        {
            $dbHandle->
        }

}