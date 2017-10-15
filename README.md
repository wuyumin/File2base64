# [PHP] file to base64

[中文说明](https://github.com/wuyumin/File2base64/blob/master/README-CN.md)

base64 files are used for embedding in web pages.

### Usage:

install in Composer

`composer require wuyumin/file2base64`

php code
```php
require __DIR__ . '/../vendor/autoload.php';

use File2base64\File2base64;

$file2base64 = new File2base64();
# $file2base64 = new File2base64(['bmp' => 'image/bmp']);

$file2base64->toFile('file2base64.png', 'file2base64.txt');
# echo $file2base64->toBase64('file2base64.png');
```

### Laravel Framework
（tips：Laravel 5.5+ can ignore step 2、3，version 5.5+ support to register automatically）
1. Composer install `composer require wuyumin/file2base64`
2. (ServiceProvider)add the follow line to the section `providers` of `config/app.php`  
  `File2base64\Laravel\ServiceProvider::class,`

3. (Facades)add the follow line to the section `aliases` of `config/app.php`(optional)  
  `'File2base64' => File2base64\Laravel\Facade::class,`

### Result:

base64 file string
```html
data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
```

### HTML code use like this:

html code
```html
<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="">
```

web page demo: [All in one page with base64 audio,no web link with audio file](https://wuyumin.github.io/File2base64/demo/allinone.html)

### Supported Type:

.png、.jpg、.jpeg、.gif、.ico、.mp3、.ogg

You can init for other type use array.

`$file2base64 = new File2base64(['bmp' => 'image/bmp']);`
