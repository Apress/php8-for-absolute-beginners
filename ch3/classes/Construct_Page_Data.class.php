<?php
class Page_Data {
	public string $title = "";
    public string $content = "";
    public string $css = "";
    public string $embeddedStyle = "";
	
	function __construct() {
		$title = "Title Goes Here";
		$content = "Page Content Goes Here";
		$css = "CSS Goes Here";
		$embeddedStyle = "Embedded CSS Goes Here";
	}
}
 ?> 
