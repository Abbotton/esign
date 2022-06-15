# 根据e签宝官方demo封装的PHP扩展包

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abbotton/esign.svg?style=flat-square)](https://packagist.org/packages/abbotton/esign)
[![Total Downloads](https://img.shields.io/packagist/dt/abbotton/esign.svg?style=flat-square)](https://packagist.org/packages/abbotton/esign)
![GitHub Actions](https://github.com/abbotton/esign/actions/workflows/main.yml/badge.svg)

鉴于官方并没有维护基于`Composer`的扩展，使用起来不是很方便，遂对官方的DEMO文件简单的封装了一下，方便在其他框架中集成。

### 安装

```bash
composer require abbotton/esign
```

### 使用

```php
// 初始化操作
use Abbotton\Esign\factory\Factory;

Factory::init('your app id', 'your app secret');
// 根据需要设置是否开启debug
Factory::setDebug(true);
// 根据需要配置是否开启代理
Factory::setENABLEHTTPPROXY(true);
Factory::setHTTPPROXYIP('http://127.0.0.1');
Factory::setHTTPPROXYPORT('1234');
// 根据需要配置沙盒环境，注意：如果配置了沙盒环境，记得修改对应的`app id`和`app secret`，否则会报错。
Factory::setHost('https://smlopenapi.esign.cn');
/**
 * 接下来根据自己的需要调用不同的静态方法就可以了
 * 
 * 步骤：
 * 1、现在官网找到要调用的接口URI地址
 * 2、在本扩展包中搜索URI地址中的关键字即可找到对应的类
 * 3、通过静态方法调用这个类即可。
 * 
 * 举个栗子：
 * 查询个人签署账号对应URI地址是：/v1/accounts/{accountId}。
 * 通过关键字'v1/accounts'搜索，可以发现该接口对应文件为：src/factory/account/QryPersonByaccountId.php
 * 那么调用这个类然后传递指定参数即可, 请参考下方代码：
 */
 
 use Abbotton\Esign\factory\base\Account;
 use Abbotton\Esign\factory\account\QryPersonByaccountId;
 $accountInfo = Account::QryPersonByaccountId()->execute()->getBody();
 var_dump($accountInfo);
```

### 测试

```bash
# WIP
composer test
```

### 更新日志
请查阅 [CHANGELOG](CHANGELOG.md) 获取更多信息。

### 致谢

-   [Abbotton](https://github.com/abbotton)
-   [All Contributors](../../contributors)

### License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.