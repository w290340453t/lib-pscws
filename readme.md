
### 示例

```php
<?php
require_once './vendor/autoload.php';

use \Phpbe\Lib\Pscws\Factory;

// ...

$libPscws = Factory::getInstance();


// 从一段内容中提取前10个关键词
$text = '...';
$libPscws->sendText($text);
$top10keywords = $libPscws->getTops(10);
```


### 在 BE 框架中使用：

```php
<?php
$libPscws = Be::getLib('Pscws');
// ...

```