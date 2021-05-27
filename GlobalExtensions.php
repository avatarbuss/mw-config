<?php // This is a default global extension, new extensions can be add to localextensions.php //

wfLoadExtensions( [
//	'3D',
	'AbuseFilter',
	'AdvancedSearch',
//	'AntiSpoof',
	'Babel',
	'BetaFeatures',
	'CentralAuth',
	'CentralAuth',
	'CharInsert',
	'CheckUser', 
	'CirrusSearch',
	'Cite',
	'CiteThisPage',
	'CodeEditor',
	'CodeMirror',
	'CommonsMetadata',
	'ConfirmEdit', 'ConfirmEdit/FancyCaptcha',
	'DiscussionTools',
	'Disambiguator',
	'DismissableSiteNotice',
	'Echo',
	'Elastica',
	'EditUser',
	'EventBus',
	'EventLogging',
	'EventStreamConfig',
	'Flow',
	'Gadgets',
	'GlobalBlocking',
	'GlobalCssJs',
	'GlobalPreferences',
	'GlobalUsage',
	'GlobalUserPage',
	'GuidedTour',
	'ImageMap',
	'InputBox',
	'Interwiki',
	'JsonConfig',
	'Kartographer',
	'LocalisationUpdate',
	'LoginNotify',
	'Linter',
	'MaamediaMessages',
	'MaamediaTags',
	'MobileFrontend',
	'MultimediaViewer',
	'MassMessage',
	'Nuke',
        'Newsletter',
	'OATHAuth',
	'OAuth',
	'PagedTiffHandler',
	'PageImages',
	'PageViewInfo',
	'ParserFunctions',
	'Poem',
	'Popups',
	'ProtectSite',
	'Renameuser',
	'ReplaceText',
	'Score',
	'Scribunto',
	'SiteMatrix',
	'SpamBlacklist',
	'SyntaxHighlight_GeSHi',
	'TemplateData',
	'TemplateSandbox',
	'TemplateStyles',
	'TemplateWizard',
	'TextExtracts',
	'Thanks',
	'TimedMediaHandler',
	'TitleBlacklist',
	'TorBlock',
	'Translate',
	'TranslationNotifications',
	'TwoColConflict',
	'UniversalLanguageSelector',
	'UploadWizard',
	'UserMerge',
	'VisualEditor',
	'WikiEditor',
] );
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;
// Ivestigating
$wgFragmentMode = [ 'html5' ];
