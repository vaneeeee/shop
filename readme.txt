
注：
1. 服务器环境：windows
2. 仅汉化88%，有些中文还是错误的，建议汉化前先备份好之前的项目。


具体操作：

1：将此3个文件夹添加进根目录（复制的时候，会提示是否合并，这里点“是”）。

2：
转到magento/bin目录
执行
php magento bin/magento setup:static-content:deploy zh_Hans_CN
php magento bin/magento indexer:reindex
php magento bin/magento cache:clean
php magento bin/magento cache:flush

3：前端设置中文：在：Stores- Configuration-General-Country Options下面设置。
4：后端设置中文：在：System-All Users-指定User- Interface Locale设置。

5：刷新缓存。

以上操作本人实际测试通过