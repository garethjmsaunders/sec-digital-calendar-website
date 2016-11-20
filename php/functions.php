<?php

function get_navigation($option) {

	if ($option === 'menu') {
		$menuItems = array(
			'calendar' => array('text'=>'Calendar',  'url'=>'calendar'),
			'howto'    => array('text'=>'How to...', 'url'=>'how'),
			'about'    => array('text'=>'About',  	 'url'=>'about'),
			'donate'   => array('text'=>'Donate', 	 'url'=>'donate'),
		);
		echo CNavigation::GenerateMenu($menuItems);
	} elseif ($option === 'homepath') {
		if ($_SERVER['HTTP_HOST'] === 'localhost') {
			$homepath = '/sec-digital-calendar-website/';
		} else {
			$homepath = '/';
		}
		echo($homepath);
	}
}

class CNavigation {
	public static function GenerateMenu($items) {

		// Define root directories
		$remoteRoot = '/';
		$localRoot  = '/sec-digital-calendar-website';

		// Path and directories
		$server 			   = $_SERVER['SERVER_NAME'];
		$path                  = dirname($_SERVER['PHP_SELF']);
		$directories           = explode('/', $path);
		$currentDirectoryIndex = count($directories) - 1;
		$currentDirectory      = $directories[$currentDirectoryIndex];

		// Which server?
		if ($server === 'www.seccalendar.co.uk') {
			$location = 'remote';
			$root = $remoteRoot;
		} else {
			$location = 'local';
			$root = $localRoot;
		}

		// Homepage or subpage?
		if ($path === $remoteRoot || $path === $localRoot) {
			// Homepage
			$path          = '';
			$homepathClass = 'active';
		} else {
			// Subpage
			$path          = '../';
			$homepathClass = 'item';
		}

		// Build menu now
		// 1. Output HOME menu item
		$html = "<li class='$homepathClass'><a href='$root'>Home</a></li>";

		// 2. Output OTHER menu items
		foreach($items as $item) {
			if ($item['url'] == $currentDirectory) {
				$className = 'active';
			} else {
				$className = 'item';
			}
			$html .= "<li class='$className'><a href='$path{$item['url']}'>{$item['text']}</a></li>\n";
		}
		return $html;
	}
};

function get_footer() {
$currentYear = date('Y');
$footerHtml = <<<FOOTER
<p class="disclaimer muted">Disclaimer: This resource is not an official resource of, nor officially endorsed by the <a href="http://scotland.anglican.org/">Scottish Episcopal Church</a>.</p>
<p>Design and file compilation by <a href="http://www.garethjmsaunders.co.uk/">the Revd Gareth J M Saunders</a> (honorary assistant priest within the congregation of <a href="http://www.allsaints-standrews.org.uk/">All&nbsp;Saints', St&nbsp;Andrews</a>, and web architect at the <a href="http://www.st-andrews.ac.uk/" title="Scotland's first university">University&nbsp;of&nbsp;St&nbsp;Andrews</a>) &middot; 2007-$currentYear &middot; <i class="fa fa-facebook"></i>&nbsp;<a href="https://www.facebook.com/groups/secoutlook/">Facebook</a> &middot; <i class="fa fa-twitter"></i>&nbsp;<a href="http://twitter.com/seccalendar">Twitter</a></p>
<p><a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons Licence" style="border-width:0" src="http://i.creativecommons.org/l/by/4.0/80x15.png" /></a> This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>. &middot; <a href="../about/">Terms and conditions</a></p>
FOOTER;
echo($footerHtml);
}

