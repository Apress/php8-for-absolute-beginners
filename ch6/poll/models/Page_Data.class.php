<?php
class Page_Data {
	private string $title = "";
    private string $content = "";
    private string $css = "";
    private string $embeddedStyle = "";
	
	function __construct() {
		$this->title = "Title Goes Here";
		$this->content = "Page Content Goes Here";
		$this->css = "<style></style>";
		$this->embeddedStyle = "Embedded CSS Goes Here";
	}
	
	public function getTitle() : string {
		return $this->title;
	}
	public function setTitle(string $value) {
		if (strpos($value, 'site')) {
			$this->title = $value;
		}
	}
	
	public function getContent() : string {
		return $this->content;
	}
	public function setContent(string $value) {
		if (strpos($value, 'h1')) {
			$this->content = $value;
		}
	}
	public function appendContent(string $value) {
		if (strpos($value, 'div')) {
			$this->content .= $value;
		}
	}
	
	public function getCss() : string {
		return $this->css;
	}
	public function setCss(string $value) {
		if (strpos($value, '{')) {
			$this->css = $value;
		}
	}
	
	public function getEmbeddedStyle() : string {
		return $this->embeddedStyle;
	}
	public function setEmbeddedStyle(string $value) {
		if (strpos($value, '{')) {
			$this->embeddedStyle = $value;
		}
	}
	
}
 ?> 
