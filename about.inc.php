<html>
  <head>
	  <title>Wikipedia Cite-o-Meter: Find citations by publisher in Wikipedia</title>
	  <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
	<h1><a href="<?php echo $wc_url; ?>">Wikipedia Cite-o-Meter</a></h1>
	<h2>About</h2>
	
	<p>The <strong>Wikipedia Cite-o-Meter</strong> provides a conservative estimate of the number of times journal articles from a particular publisher are cited in the 100 largest Wikipedias. Using the <a href="http://en.wikipedia.org/w/api.php">Wikipedia API</a>, Cite-o-Meter searches for occurrences of a DOI prefix in the main namespace of these Wikipedias (<a href="http://en.wikipedia.org/w/index.php?title=Special%3ASearch&amp;search=10.1371&amp;fulltext=Search&amp;ns0=1 ">example</a>).</p> 
	
	<p>A <a href="http://en.wikipedia.org/wiki/Digital_object_identifier">Digital Object Identifier</a> (DOI) is a string used to uniquely identify objects such as electronic documents. DOIs are the de facto standard for uniquely identifying scholarly publications such as journal articles. A DOI (such as <tt>10.1371/journal.pone.0011273</tt>) is composed of two parts &mdash; a prefix (<tt>10.1371</tt>) and a suffix  (<tt>journal.pone.0011273</tt>). An article is uniquely identified by a DOI, which can be looked up using the <a href="http://dx.doi.org/">DOI resolver</a>. </p>
	
	<p>The DOI prefix is specific to a DOI registrant - the organization that handles the assignments of DOI suffixes for items published under that prefix. Most scholarly publishers operate as a single registrant, yet due to mergers and acquisitions, some publishers run several DOI prefixes. The DOI prefix <tt>10.1371</tt> is handled by the Public Library of Science (PLoS), and it is the only DOI prefix handled by PLoS. As a result, <a href="http://toolserver.org/~dartar/cite-o-meter/?doip=10.1371">Cite-o-Meter statistics</a> for this prefix provide a lower bound for citations to PLoS articles in Wikipedia. It is a lower bound because not all Wikipedia citations to a journal article include its DOI.</p>

	<p>Cite-o-Meter data is available in the form of <a href="?doip=10.1371">graphs</a>, <a href="?doip=10.1371&amp;table">tabular data</a> and machine-readable <a href="?doip=10.1371&amp;json">JSON</a> and is released under a <a href="http://creativecommons.org/publicdomain/zero/1.0/">CC0</a> license.</p>

	<?php echo $footer; ?>
	</body>
</html>