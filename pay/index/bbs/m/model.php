<?php

require(GLOBLM."MysqliDB.php");

function getthread($id){
  global $db;
  $db->where('id',$id);
  $rs = $db->get('py_thread');
  return $rs[0];
}
function savethread($postdb){
  global $db;
  $db->insert('py_thread', $postdb);
  $id=$db->getInsertId();
  return $id;
}
function getlistthread($fid){
  global $db;
  $row=2;
  $results['list'] = $db->getlists('py_thread',"fid=$fid ORDER BY id DESC",$row);
  $results['page'] = $db->page('py_thread',"fid=$fid ORDER BY id DESC",$row);
  return $results;
}
?>