**User's Guide**
===========
####**Now you can just convert all textarea TinyMCE editor. I will do in the future update.**

###**Installation**
To install through composer, simply put the following in your composer.json file:
```
"require": {
		....
		"yalcinkaya/tinymce": "dev-master"
		....
	},
```
After installing the package, open your Laravel config file app/config/app.php and add the following lines.
In the $providers array add the following service provider for this package;
```
Yalcinkaya\Tinymce\TinymceServiceProvider
```
###**Configuration**
The preparation of the necessary files for TinyMCE
```
{{ Tinymce::init() }}
```
####**Default**
```
"selector" => "textarea",
"valid_elements" => "*[*]",
"language" => "tr_TR",
```
####**Custom**
```
{{ 
	Tinymce::init([
		"selector" => ".text"
	]) 
}}
```
For more [Tinymce Document](http://www.tinymce.com/wiki.php/Configuration)

> **Currently there are only Turkish. Other languages ​​will be added soon**