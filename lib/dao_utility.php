<?php
function DAOgetConnection()    
{
    $objReturn=null;
    if ($objConn=new mysqli(DB_HOST,DB_UID,DB_PWD,DB_DATABASE))
    {
        if ($objConn->connect_errno) {
			printf("Connect failed: %s\n", $objConn->connect_error);
			exit();
		}else{
			$objReturn=$objConn;
		}
    }
    return $objReturn;
}

function DAOExecuteSQL($strSQL)
{
    $bReturn=false;
    $mysqli=DAOgetConnection();
    if (is_null($mysqli)==false)
    {
      $bReturn=$mysqli->query($strSQL);  
    }
    
    return $bReturn;
}

function DAOQuerySQL($strSQL)
{
    $objReturn=null;
    $objResult=null;
    $mysqli=DAOgetConnection();
    if (is_null($mysqli)==false)
    {
        if($objResult=$mysqli->query($strSQL))
        {
            while($row = $objResult->fetch_array()){
				$objReturn[]=$row;
			}
        }
        mysqli_close($mysqli);
    }
    return $objReturn;   
}
?>