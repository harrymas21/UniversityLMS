<?php
  include 'utility.php'; 
  $db="university_lms";
function backupTables()  {

  $tables = '*';
   $outputDir = '.';
        try
        {
            /**
            * Tables to export
            */
            if($tables == '*')
            {
                $tables = array();
                $result = mysql_query($con, 'SHOW TABLES');
                while($row = mysql_fetch_row($result))
                {
                    $tables[] = $row[0];
                }
            }
            else
            {
                $tables = is_array($tables) ? $tables : explode(',',$tables);
            }

            $sql = 'CREATE DATABASE IF NOT EXISTS '.$db.";\n\n";
            $sql .= 'USE '.$db.";\n\n";

            /**
            * Iterate tables
            */
            foreach($tables as $table)
            {
               // echo "Backing up ".$table." table...";

                $result = mysqli_query($con,'SELECT * FROM '.$table);
                $numFields = mysqli_num_fields($result);

                $sql .= 'DROP TABLE IF EXISTS '.$table.';';
                $row2 = mysqli_fetch_row(mysqli_query($con,'SHOW CREATE TABLE '.$table));
                $sql.= "\n\n".$row2[1].";\n\n";

                for ($i = 0; $i < $numFields; $i++) 
                {
                    while($row = mysqli_fetch_row($result))
                    {
                        $sql .= 'INSERT INTO '.$table.' VALUES(';
                        for($j=0; $j<$numFields; $j++) 
                        {
                            $row[$j] = addslashes($row[$j]);
                            $row[$j] = preg_replace("/\n/","\\n",$row[$j]);
                            if (isset($row[$j]))
                            {
                                $sql .= '"'.$row[$j].'"' ;
                            }
                            else
                            {
                                $sql.= '""';
                            }

                            if ($j < ($numFields-1))
                            {
                                $sql .= ',';
                            }
                        }

                        $sql.= ");\n";
                    }
                }
                $sql.="\n\n\n";
            }
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
            return false;
        }
        return $sql;
		//echo"$sql";
    }
  function savetofile($sql){
   //include 'utility.php';
     $outputDir = 'backups';
       if (!$sql) return false;
        try
        {
            $handle = fopen($outputDir.'/db-backup-'.$db.'-'.date("Ymd-His", time()).'.sql','w+');
            fwrite($handle, $sql);
            fclose($handle);
            echo "Backed up successfully";
        }
        catch (Exception $e)
        {
         //   $e->getMessage();
            return false;
        }
        return true;
    }
 $r=backupTables();
 savetofile($r);
 echo $r;
?>