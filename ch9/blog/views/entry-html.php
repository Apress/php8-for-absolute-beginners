<?php
//complete source code for views/entry-html.php
$entryFound = isset( $entryData );
if ( $entryFound === false ) {
    trigger_error( 'views/entry-html.php needs an $entryData object' );
}
$info = "<h1>Detailed Blog</h1>";
//properties available in $entry: entry_id, title, entry_text, image, date_created
$info .= "<article>
    <h1>$entryData->title</h1>";
	if((isset($entryData->image)))
	{ 
		if(($entryData->image == "None") or ($entryData->image == "")) {
			$info .="";
		}
		else {
		$info .= "<img src='imgs/$entryData->image' alt='$entryData->image' 
		style='height: 200px; 
		width: 250px;
		border: 2px solid black;
		padding: 5px;
		margin: 5px;'/>";
	}
	}
    $info .= "<div class='date'>$entryData->date_created</div>
    $entryData->entry_text
</article>";
?>
