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
```
php artisan asset:publish yalcinkaya/tinymce
```

The preparation of the necessary files for TinyMCE
```
{{ Tinymce::init() }}
```