<?php

class Model
{
    protected $connection = "";
    function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "Resto");
    }
    function Insert($tbl, $data)
    {
        $clm = implode(",", array_keys($data));
        $val = implode("','", $data);
        $SQL = "INSERT INTO $tbl ($clm) VALUES ('$val')";
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $Responce['Data'] = "1";
            $Responce['Code'] = "1";
            $Responce['Msg'] = "Success";
        } else {
            $Responce['Data'] = "0";
            $Responce['Code'] = "0";
            $Responce['Msg'] = "Try Again";
        }
        return $Responce;
    }
    function Select($tbl, $where = null)
    {
        $SQL = " SELECT * FROM $tbl";
        if ($where != "" || $where != null) {
            $SQL .= " WHERE";
            foreach ($where as $key => $value) {
                $SQL .= " $key =  '$value' AND";
            }
            $SQL = rtrim($SQL, "AND");
        }
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($Data = $SQLEx->fetch_object()) {
                $FetchData[] = $Data;
            }
            $Responce['Data'] = $FetchData;
            $Responce['Code'] = "1";
            $Responce['Msg'] = "Success";
        } else {
            $Responce['Data'] = "0";
            $Responce['Code'] = "0";
            $Responce['Msg'] = "Try Again";
        }
        return $Responce;
    }
    function Update($tbl, $data, $where)
    {
        $SQL = " UPDATE $tbl SET ";
        foreach ($data as $key => $value) {
            $SQL .= " $key = '$value' ,";
        }
        $SQL = rtrim($SQL, ",");
        $SQL .= " WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = ' $value' AND";
        }
        $SQL = rtrim($SQL, "AND");
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $Responce['Data'] = "1";
            $Responce['Code'] = "1";
            $Responce['Msg'] = "Success";
        } else {
            $Responce['Data'] = "0";
            $Responce['Code'] = "0";
            $Responce['Msg'] = "Try Again";
        }
        return $Responce;
    }
    function Delete($tbl, $where)
    {
        $SQL = " DELETE FROM $tbl WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value' AND";
        }
        $SQL = rtrim($SQL, "AND");
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $Responce['Data'] = "1";
            $Responce['Code'] = "1";
            $Responce['Msg'] = "Success";
        } else {
            $Responce['Data'] = "0";
            $Responce['Code'] = "0";
            $Responce['Msg'] = "Try Again";
        }
        return $Responce;
    }
}
