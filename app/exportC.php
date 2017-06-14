<?php

class exportC
{
    public $query;
    public $query1;
    public $tableName;
    public $fileDirectory;
    public $dbHandle;
    public $Database;

    public function __construct($tableName, $filename, $dbhandle)
    {
        $this->tableName = $tableName;
        $this->fileDirectory = $filename;
        $this->Database = $dbhandle;
        $this->query = "    SELECT `COLUMN_NAME`
        FROM `INFORMATION_SCHEMA`.`COLUMNS`
        WHERE `TABLE_NAME`='$tableName'
        INTO OUTFILE '../../../../www/php_code/app/csvFiles/$filename.csv'
          FIELDS TERMINATED BY ','
          ENCLOSED BY ''
          LINES TERMINATED BY ''";
        $this->query1 = "
        SELECT * FROM $tableName
            INTO OUTFILE '../../../../www/php_code/app/csvFiles/$filename.1.csv'
            FIELDS ESCAPED BY ''
            TERMINATED BY ','
            ENCLOSED BY ''
            LINES TERMINATED BY '\r\n';";
    }

        public function ColName()
        {
         $this->dbHandle = $this->Database;
         $this->dbHandle->Query($this->query);
         $this->dbHandle->Query($this->query1);
         $file = file("csvFiles/$this->fileDirectory.csv");
         $file1 = file("csvFiles/$this->fileDirectory.1.csv");
            file_put_contents("csvFiles/$this->fileDirectory.csv", PHP_EOL ,FILE_APPEND  );
         file_put_contents("csvFiles/$this->fileDirectory.csv", $file1 ,FILE_APPEND  );
        }

}