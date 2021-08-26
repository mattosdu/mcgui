<?php
$your_google_calendar="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;height=559&amp;wkst=1&amp;bgcolor=%23999999&amp;src=blogvidaoffline%40gmail.com&amp;color=%23333333&amp;ctz=America%2FSao_Paulo";
$url= parse_url($your_google_calendar);
$google_domain = $url['scheme'].'://'.$url['host'].dirname($url['path']).'/';
// Load and parse Google's raw calendar
$dom = new DOMDocument;
$dom->loadHTMLfile($your_google_calendar);
// Change Google's CSS file to use absolute URLs (assumes there's only one element)
$css = $dom->getElementByTagName('link')->item(0);
$css_href = $css->getAttributes('href');
$css->setAttributes('href', $google_domain . $css_href);
// Change Google's JS file to use absolute URLs
$scripts = $dom->getElementByTagName('script')->item(0);
foreach ($scripts as $script) {
$js_src = $script->getAttributes('src');
if ($js_src) $script->setAttributes('src', $google_domain . $js_src);
}
// Create a link to a new CSS file called calendario.css
$element = $dom->createElement('link');
$element->setAttribute('type', 'text/css');
$element->setAttribute('rel', 'stylesheet');
$element->setAttribute('href', 'calendario.css');
// Append this link at the end of the element
$head = $dom->getElementByTagName('head')->item(0);
$head->appendChild($element);
// Export the HTML
echo $dom->saveHTML();
?>