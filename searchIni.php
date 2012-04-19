<?php

  $key = '';

  if( isset($_GET['search_keyword']) )
    $key = $_GET['search_keyword'];
  
    
?>
<html>
  <div width="100%" style="width:100%; position:relative;display:block;float:left;background:url(/blocks/openscout/images/header_bg.gif) repeat; padding: 0; margin: 0 auto; border:1px solid black; ">
    <div style="margin-left:10px; cursor:pointer; "><img onclick="javascript:goHome()" src="/blocks/openscout/images/logo.gif" height="62" border="0" alt="logo" /></a></div>
    <div style="margin:10px; font-size:13px; color:white;"><b>Search...</b></div>
      <input style="width:100px; line-height:13px; height:25px; float:left; background:white; border:0; padding:6px 2px; margin:0; margin-top:3px; margin-left:10px; font:normal 11px Arial, Helvetica, sans-serif; color:#4c7a91;" id="openscout_search_keyword" name="openscout_search_keyword" onkeydown="if(window.event.keyCode==13)doOpenscoutSearch();" type="text" value="" ></input>
      <input id="search" type="image" src="/blocks/openscout/images/search.gif" style="float:left; margin:0; margin-top:3px; padding:0;" onclick="doOpenscoutSearch();" />		
    <br>
    <div style="margin:10px; font-size:13px; color:white;padding-top:10px;">
      <span style="font-size:12px">Skill-based scouting of <br>open management content. </span>
      
    </div> 
  </div>
  
  <script>
    function goHome()
    {
      window.open("http://learn.openscout.net/",'newtab');
    }

    function doOpenscoutSearch()
    {
      key = document.getElementById("openscout_search_keyword").value;
      window.open("http://learn.openscout.net/search.html#page=1&search_keyword="+key,'newtab');
    }
    
  </script>
</html>