# [PHP] 将文件转化为 base64 字符文件

[English README](https://github.com/wuyumin/File2base64/blob/master/README.md)

base64 字符文件一般用于直接嵌入网页文件中。

### 用法:

用 Composer 安装

`composer require wuyumin/file2base64`

php 代码
```php
require __DIR__ . '/../vendor/autoload.php';

use File2base64\File2base64;

$file2base64 = new File2base64();
# $file2base64 = new File2base64(['bmp' => 'image/bmp']);

$file2base64->toFile('file2base64.png', 'file2base64.txt');
# echo $file2base64->toBase64('file2base64.png');
```

### 结果:

base64 字符文件
```html
data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
```

### HTML 代码这样使用:

html code
```html
<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="">
```
