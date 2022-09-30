<?php
//complete source code for views/entry-html.php
$entryFound = isset( $entryData );
if ( $entryFound === false ) {
    trigger_error( 'views/entry-html.php needs an $entryData object' );
}
$info = "<h1>Detailed Blog</h1>";
//properties available in $entry: entry_id, title, entry_text, date_created
$info .= "<article>
    <h1>$entryData->title</h1>
    <div class='date'>$entryData->date_created</div>
    $entryData->entry_text
</article>";
?>
