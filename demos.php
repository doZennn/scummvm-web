<?

/*
 * Links to Demo downloads
 *
 */

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_header("ScummVM :: Game Demos");
sidebar_start();

//display welcome table
echo html_round_frame_start("Game Demos","98%","",20);


?>
	<p>
	  <big><b>Game Demos</b></big><br>
	  <? echo html_line(); ?>
	</p>
	<p>
	  This page lists some links to demos of various games, that in general don't work as well as the
	  full versions. Full Throttle, The Dig, and the Curse of Monkey Island in particular.<br><br>
	  Do not file bug reports against these demos as they aren't supported games.<br>
          <br><br>
	</p>

<?

$demos = array(
	'The Secret of Monkey Island (16 colour)'	
		=> array('http://files.mixnmojo.com/mi_demo2.zip', 'monkeyega'),
	'Indiana Jones and the Last Crusade (non interactive 16 colour)'	
		=> array('http://files.mixnmojo.com/indydemo.zip', 'indy3ega'),
	'Loom (non interactive 16 colour)'
		=> array('http://files.mixnmojo.com/loomdemo.zip', 'loom'),
	'Passport to Adventure (playable 16 colour demos of mi, loom, indy3)'
		=> array('http://files.mixnmojo.com/pass.zip', 'pass'),
	'Monkey Island 2 (non interactive demo)'
		=> array('http://www.lucasfiles.com/pafiledb.php?action=file&id=31', 'mi2demo'),
	'Indiana Jones and the Fate of Atlantis (playable)'
		=> array('http://files.mixnmojo.com/playfate.zip', 'playfate'),
	'Indiana Jones and the Fate of Atlantis (non interactive)'
		=> array('http://files.mixnmojo.com/fate.zip', 'fate'),
	'Sam and Max Hit the Road (non interacive)'
		=> array('http://www.lucasfiles.com/pafiledb.php?action=file&id=29', 'samdemo'),
	'Sam and Max Hit the Road (interacive)'
		=> array('http://www.lucasfiles.com/pafiledb.php?action=file&id=28', 'snmdemo'),
	'Sam and Max Hit the Road WIP (interacive)'
		=> array('http://files.mixnmojo.com/snmidemo.zip', 'snmidemo'),
	'Putt-Putt Joins the Parade (DOS demo)'
		=> array('http://files.mixnmojo.com/puttpara.zip', 'puttdemo'),
	'Putt-Putt Goes to the Moon (DOS demo)'
		=> array('http://files.mixnmojo.com/moondemo.zip', 'moondemo'),
	'Fatty Bear\'s Birthday Surprise (DOS demo)'
		=> array('http://files.mixnmojo.com/fatdemo.zip', 'fbdemo'),
	'Full Throttle'
		=> array('http://files.mixnmojo.com/ftdemo.zip', 'ft'),
	'The Dig'
		=> array('http://files.mixnmojo.com/digdemo.zip', 'dig'),
	'The Curse of Monkey Island (web demo)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/cursedemo.exe', 'comi'),
	'The Curse of Monkey Island (demo with movies)'
		=> array('http://files.mixnmojo.com/m3demo.zip', 'comi'),
	'Simon the Sorcerer'
		=> array('http://files.mixnmojo.com/simon1demo.zip', 'simon1demo'),
	'Simon the Sorcerer 2 Talkie'
		=> array('http://files.mixnmojo.com/simon2demo.zip', 'simon2talkie')
	);

// render the demo list
echo html_frame_start("Game Demos","90%",2,1,"color4");
echo html_frame_tr(
		   html_frame_td("Demo Name / Download Link").
		   html_frame_td("Game Target"),
		   "color4"

		  );
	$c = 0;
	while (list($name,$array) = each($demos))
	{	
		if ($c % 2 == 0) { $color = "color2"; } else { $color = "color0"; }
		echo html_frame_tr(
			html_frame_td("<a href=\"$array[0]\">$name</a>").
		    	html_frame_td($array[1]),
	  	        $color
	 	);
		$c++;
	}

echo html_frame_end("&nbsp;");
  
echo html_p();
echo html_round_frame_end("&nbsp;");

// end of html
echo html_p();
sidebar_end();
html_footer();

?>
