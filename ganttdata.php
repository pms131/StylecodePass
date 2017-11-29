<?php

include ("contents_gantt/codebase/connector/db_sqlite3.php");
include ('contents_gantt/codebase/connector/gantt_connector.php');

$dbtype = "PDO";
$res = new PDO("mysql:host=112.175.114.229; dbname=op_975c0103_7801_46cc_bb1a_513e37c2c4f2", "9bf15db02dd65a2d", "53486a6ab150462c");


$gantt = new JSONGanttConnector($res,$dbtype);
$gantt->mix("open", 1);

$gantt->render_links("gantt_links","id","source,target,type");
$gantt->render_table(
    "gantt_tasks",
    "id",
    "start_date,duration,text,progress,sortorder,parent"
);
?>