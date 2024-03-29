<?php

/**
 * Instructions before application packing:
 * - Remove all CSS and JS assets in `/Var/Tmp` directory.
 * - Generate CSS and JS assets into `/Var/Tmp` directory before packing process
 *   with uncommented line 25 in `/App/Bootstrap.php`.
 */

$phpFileSystemMode = Packager_Php::FS_MODE_PRESERVE_HDD;

$config = [
	'sourcesDir'				=> __DIR__ . '/../../development',
	'releaseDir'				=> __DIR__ . '/../../release',
	// define statically copied files and folders (exclude patterns doesn't exclude anything from static copies):
	'staticCopies'				=> [
		'/.htaccess',		'/web.config',	'/.databases/sqlite-cdcol.db',
		'/static/fonts',	'/static/img',	'/Var/Tmp'
	],
	// do not include script or file, where it's relative path from sourceDir match any of these rules:
	'excludePatterns'			=> [
		// Common excludes for every MvcCore app using composer:
		"#/\.#",										// Everything started with '.' (.git, .htaccess ...)
		"#^/web\.config#",								// Microsoft IIS .rewrite rules
		"#^/Var/Logs/.*#",								// App development logs
		"#(composer|installed)\.((dev\.)?)(json|lock)#",// composer.json, installed.json, composer.lock, ...
		"#LICEN(C|S)E(\.(txt|md))?#i",					// libraries licence files
		"#\.(bak|bat|cmd|sh|md|phpt|neon|dummy|phpproj|phpproj\.user)$#i",

		// Exclude specific PHP libraries
		"#^/vendor/composer/.*#",						// composer itself
		"#^/vendor/autoload\.php$#",					// composer autoload file
		"#^/vendor/mvccore/mvccore/src/startup\.php$#",	// mvccore autoload file
		"#^/vendor.*/tracy/.*#",						// tracy library (https://tracy.nette.org/)
		"#^/vendor/mvccore/ext-debug-tracy.*#",			// mvccore tracy adapter and all tracy panel extensions
		"#^/vendor/bin/.*#",							// CLI tools
		"#^/vendor/tedivm/.*#",							// JS minify library
		"#^/vendor/tubalmartin/.*#",					// CSS minify library
		"#^/vendor/mobiledetect/mobiledetectlib/export/.*#",// Mobile Detect library export script
		"#^/vendor/mobiledetect/mobiledetectlib/Mobile_Detect.json$#",// Exported Mobile detect data

		// Exclude all Form validators and fields by default
		// and add strictly and only used validators and fields
		// later in include patterns array for override rules
		"#/MvcCore/Ext/Forms/(Fields|Validators)/#",
		"#/MvcCore/Ext/Forms/(FieldsGroup|IFieldsGroup)\.php$#",

		// Exclude everything from '/static/...', '/Var/Tmp' directory
		// and source JS/CSS from SimpleForm lib:
		"#^/static/.*#",
		"#^/Var/Tmp/.*#",

		// Exclude all css and js files for form fields - this example doesn't need them
		"#^/vendor/mvccore/ext-form/(.*)\.(css|js)$#",
	],
	// include all scripts or files, where it's relative path from sourceDir match any of these rules:
	// (include patterns always overrides exclude patterns)
	'includePatterns'		=> [
		// include previously excluded Form validators - but only really used validators
		"#/MvcCore/Ext/Forms/Validators/(MinMaxLength|IMinMaxLength|SafeString|Url|Number|IntNumber)\.php$#",
		// include previously excluded Form fields - but only really used fields
		"#/MvcCore/Ext/Forms/Fields/(Text|Password|Hidden|SubmitButton|Button|Number|IVisibleField|IFormAttrs|ILabel|IPattern|IMinMaxLength|IDataList|ISubmit|IMinMaxStepNumbers)\.php$#",
		"#/MvcCore/Ext/Forms/Field/Props/(VisibleField|Label|Pattern|MinMaxLength|DataList|AutoComplete|PlaceHolder|Size|SpellCheck|InputMode|Submit|FormAttrs|MinMaxStepNumbers|Wrapper)\.php$#",
	],
	// process simple strings replacements on all read PHP scripts before saving into result package:
	// (replacements are executed before configured minification in RAM, they don't affect anything on hard drive)
	'stringReplacements'	=> [
		// Switch \MvcCore application back from SFU mode to automatic compile mode detection
		'->SetCompiled(\MvcCore\Application::COMPILED_SFU)'	=> '',
		// Remove tracy debug library:
		"class_exists('\MvcCore\Ext\Debugs\Tracy')"			=> 'FALSE',
	],
	'minifyTemplates'		=> 1,// Remove non-conditional comments and white spaces
	'minifyPhp'				=> 1,// Remove comments and white spaces
];
