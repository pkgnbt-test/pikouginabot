<?php
# This file was automatically generated by the MediaWiki 1.40.1
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/MainConfigSchema.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "ⲡⲓⲕⲟⲩϫⲓ ⲛⲁⲃⲟⲧ";
$wgMetaNamespace = "Project";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/pikouginabot";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://localhost";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "$wgResourceBasePath/resources/assets/change-your-logo.svg",
	'icon' => "$wgResourceBasePath/resources/assets/change-your-logo.svg",
];

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "";
$wgPasswordSender = "";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "pikouginabot";
$wgDBuser = "pikouginabot";
$wgDBpassword = "Username1Password!";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

# Site language code, should be one of the list in ./includes/languages/data/Names.php
$wgLanguageCode = "en";

# Time zone
$wgLocaltimezone = "Europe/Berlin";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgSecretKey = "7921829a7fdaf5113b76e318130f4786fbb44f41c59af2c8626559d69fd970fe";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "42d71cc489c304d4";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = "anisa";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'Anisa' );
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtension( 'ExtensionName' );
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'Scribunto' );


# End of automatically generated settings.
# Add more configuration options below.

wfLoadExtension( 'WikibaseRepository', "$IP/extensions/Wikibase/extension-repo.json" );
require_once "$IP/extensions/Wikibase/repo/ExampleSettings.php";
wfLoadExtension( 'WikibaseClient', "$IP/extensions/Wikibase/extension-client.json" );
require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";

wfLoadExtension( 'WikibaseLexeme' );

// from /includes/MainConfigSchema.php

// line 1504 = 'default' => 1024 * 1024 * 100,
$wgMaxUploadSize = 1024 * 1024 * 1024;
// line 1597 = 'default' => [ 'png', 'gif', 'jpg', 'jpeg', 'webp', ],
$wgFileExtensions = [ 'png', 'gif', 'jpg', 'jpeg', 'webp', 'pdf', 'txt', 'xml' ];
// line 1669 = 'default' => true,
$wgStrictFileExtensions = false;
// line 4671 = 'default' => [],
// $wgExtraLanguageNames['en-va'] = 'Vatican English';
// line 4918 = 'dynamicDefault' => true,
$wgLocaltimezone = 'UTC';
// line 6054 = 'default' => true,
$wgCapitalLinks = false;
// line 6081
$wgNamespacesWithSubpages[NS_MAIN] = true;
// line 6464 = 'default' => false,
$wgRawHtml = true;
// line 6477 = 'default' => false,
$wgExternalLinkTarget = "_blank";
// line 6539 = 'default' => true,
$wgRestrictDisplayTitle = false;
// line 7285 = 'default' =>
// line 7288 => 'default',
$wgDefaultUserOptions['date'] = 'ISO 8601';
// line 7302 => 'unknown',
$wgDefaultUserOptions['gender'] = 'male';
$wgDefaultUserOptions['numberheadings'] = 1;
// line 7314 => 7,
$wgDefaultUserOptions['rcdays'] = 360;
// line 7316 => 50,
$wgDefaultUserOptions['rclimit'] = 1000;
// line 7321 => 0,
$wgDefaultUserOptions['showhiddencats'] = 1;
// line 7679
// mediawiki.org/wiki/Extension:Interwiki
$wgGroupPermissions['*']['interwiki'] = true;
// line 7887 = 'default' => [],
$wgGroupsAddToSelf = [ '*' => true ];
// line 9466 = 'default' => false,
$wgDeprecationReleaseLimit = '1.0';
// line 9676 = 'default' => false,
$wgAdvancedSearchHighlighting = true;
// line 10048 = 'default' => 90 * 24 * 3600,
$wgRCMaxAge = 360 * 24 * 3600;
// line 10693 = 'default' => false,
$wgExportAllowAll = true;
// line 11265 = 'default' => 'uppercase',
$wgCategoryCollation = 'identity';

// from /extensions/Wikibase/repo/config/Wikibase.default.php
// mediawiki.org/wiki/Wikibase/Installation/Advanced_configuration

// line 46 = 'statementSections' => [],
$wgWBRepoSettings['statementSections'] = [
  	'item' => [
    		'statements' => null,
    		'identifiers' => [
      			'type' => 'dataType',
      			'dataTypes' => [ 'external-id' ],
    		],
  	],
];
// line 51 = 'length' => 250,
$wgWBRepoSettings['string-limits'] = [
		'multilang' => [
    		'length' => 1000,
  	],
];
// line 134 = 'formatterUrlProperty' => null,
// $wgWBRepoSettings['formatterUrlProperty'] = 'P1088136017';
// line 139 = 'allowEntityImport' => false,
$wgWBRepoSettings['allowEntityImport'] = true;
