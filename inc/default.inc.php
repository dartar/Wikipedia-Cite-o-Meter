<?php
/**
 * Default page 
 */

echo <<<EOD
<html>
  <head>
	  <title>Wikipedia Cite-o-Meter: Find citations by publisher in Wikipedia</title>
	  <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
	<h1><a href="$wc_url">Wikipedia Cite-o-Meter</a></h1>
    <h2>Find citations by publisher in the top 100 Wikipedias <a title="About Wikipedia Cite-o-Meter" href="?about">(read more)</a></h2>
	<form onsubmit="document.DOISearch.SubmitButton.disabled=true; document.getElementById('loading').style.display = ''; document.getElementById('crossref').style.display = 'none';" id="DOISearch" name="DOISearch" method="get">
	<fieldset><legend>Select a publisher</legend>
    	<select name="doip">
EOD;

foreach($doi as $k=>$v)
{
	echo '	<option value="'.$k.'">'.$v.' ('.$k.')</option>'."\n";
}

echo <<<EOD
    	</select>
    	<input type="submit" value="Submit" id="SubmitButton" />
		<p id="crossref" class="small sp">Source: <a href="http://www.crossref.org/06members/50go-live.html">CrossRef</a> (last updated: 2011-09-24)</p>
		<p id="loading" class="small sp" style="display: none; color: #933"><img src="ajax-loader.gif" /> Retrieving data (this may take a few minutes)</p>
	</fieldset>

	<fieldset><legend>...or try one of the following</legend>
	<ul class="left">
		<li><a class="small" href="?doip=10.1126">American Association for the Advancement of Science (AAAS)</a></li>
		<li><a class="small" href="?doip=10.1021">American Chemical Society (ACS)</a></li>
		<li><a class="small" href="?doip=10.5194">Copernicus GmbH</a></li>
		<li><a class="small" href="?doip=10.1016">Elsevier</a></li>
		<li><a class="small" href="?doip=10.3389">Frontiers Research Foundation</a></li>
		<li><a class="small" href="?doip=10.1155">Hindawi Publishing Corporation</a></li>
		<li><a class="small" href="?doip=10.1080">Informa UK (Taylor & Francis)</a></li>
		<li><a class="small" href="?doip=10.1088">IOP Publishing</a></li>
		<li><a class="small" href="?doip=10.1038">Nature Publishing Group</a></li>
	</ul>
	<ul class="left">
		<li><a class="small" href="?doip=10.3897">Pensoft Publishers</a></li>
		<li><a class="small" href="?doip=10.1073">Proceedings of the National Academy of Sciences (PNAS)</a></li>
		<li><a class="small" href="?doip=10.1371">Public Library of Science</a></li>
		<li><a class="small" href="?doip=10.1177">Sage Publications</a></li>
		<li><a class="small" href="?doip=10.1007">Springer-Verlag</a></li>
		<li><a class="small" href="?doip=10.1186">Springer (Biomed Central Ltd.)</a></li>
		<li><a class="small" href="?doip=10.1098">The Royal Society</a></li>
		<li><a class="small" href="?doip=10.1515">Walter de Gruyter</a></li>
		<li><a class="small" href="?doip=10.1111">Wiley Blackwell (Blackwell Publishing)</a></li>
	</fieldset>
    </form>
    $footer
</body>
</html>
EOD;
?>