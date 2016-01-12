<h1>Drupal netForum xWeb Api Module</h1>
<p>A Drupal Module to make using the netForum XML Web Service from other Drupal
modules painless.</p>

<h2>Example API Usage</h2>
```php

```

<h2>Generating PHP Proxy Classes</h2>
<p>This module makes use of <a href="https://github.com/wsdl2phpgenerator/wsdl2phpgenerator">wsdl2phpgenerator</a>
to generate PHP proxy classes for the netForum xWeb XML Web Service. The generated code
is located inside of the <strong>Generated</strong> directory. If you need a different
version of the netForum xWeb XML Web Service for your application, you can generate
your own proxy classes by using the <strong>GenerateProxies.php</strong> script. There
are WSDL files for netForum xWeb 2010,2011,2013,2014, and 2015 inside the <strong>WSDLs</strong>
directory. The included generated proxies are for the latest version of xWeb, 2015.</p>

<h3>Example Usage</h3>

```shell
$ php GenerateProxies.php --url WSDLs/xWeb-2015.wsdl
```
<p>or using your own endpoint:</p>

```shell
$ php GenerateProxies.php --url https://netforum/xweb/Secure/netForumXML.asmx?WSDL
```
