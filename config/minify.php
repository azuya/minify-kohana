<?php defined('SYSPATH') or die('No direct script access.');

return array(
  'uploaderHoursBehind' => 0,
  'serveOptions' => array(
    'maxAge' => 604800,
    'bubbleCssImports' => false,
    'minApp' => array(
      'groupsOnly' => false,
      'allowDirs' => array(),
    ),
	'minifierOptions' => array(
		'text/css' => array(
		)
	),
    'preserveComments' => true,
    'rewriteCssUris' => true,
    'currentDir' => false,
  ),
  'quiet' => false,
  'symlinks' => array(
	  /* uncomment this if you are working on a directory instead of a domain like 127.0.0.1/kohana/ */
	  //'/' . substr(Kohana::$base_url, 0, -1) => DOCROOT 
  ),
  'errorLogger' => true,
  'rewriteCssUris' => false,
  'allowDebugFlag' => false,
  'cachePath' => APPPATH.'cache/minify',
  'documentRoot' => DOCROOT,
  'cacheFileLocking' => true,
  'groupsConfig' => array(
    //'js' => array('///js/html5.js','//js/common.js'),
    // 'css' => array('//css/file1.css', '//css/file2.css'),
   )
);
