<?php

class block_openscout_simple extends block_base {

    function init() {
      $this->title = get_string('pluginname', 'block_openscout_simple');
    } //init


 function get_content() {
    if ($this->content !== NULL) {
      return $this->content;
    }
 
     $this->content         =  new stdClass;
	
     $this->content->text   = '<iframe id="openscoutsimple_frame" style="margin:0px; border:0px; width: 100%;  min-height: 210px;" width="100%" height="100%" src="/blocks/openscout_simple/searchIni.php"></iframe>';

    //$this->content->footer = 'Footer here...';

    return $this->content;
  }

	function instance_allow_config() {
	  return true;
	}

}   // Here's the closing curly bracket for the class definition
    // and here's the closing PHP tag from the section above.
?>

