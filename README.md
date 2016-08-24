# vcgen 
=========

Version build 0.0.8

## Introduction
-----------------
 This Lib was created to generate shortcodes of visual composer plugin to Wordpress


## Installation
----------------

To use this, you should install dependencies with `Composer` first:

### Install dependencies
-------------------------

```bash
$ composer install
```

Read more about how to install and use `Composer` on your local machine [here](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx).

### Install Vcgen
-----------------

First you should create a `composer.json` file in your wordpress project

```bash
  {
    "name": "Your project name",
    "description: "Your description",

  
    "repositories":[
      {
        "type":"composer",
        "url":"https://wpackagist.org"
      }
    ],
  
    "require": {
      "php": ">=5.3",
      "leandrogoncalves/vcgen":"dev-master"
    },
  
    "autoload": {
      "files": [
        "vendor/leandrogoncalves/vcgen/src/Vcgen_factory.php",
        "vendor/leandrogoncalves/vcgen/src/Vcgen_collection.php",
        "vendor/leandrogoncalves/vcgen/src/nodes/Vcgen_node.php",
        "vendor/leandrogoncalves/vcgen/src/nodes/Vcgen_row.php",
        "vendor/leandrogoncalves/vcgen/src/nodes/Vcgen_col.php",
        "vendor/leandrogoncalves/vcgen/src/nodes/Vcgen_text.php",
        "vendor/leandrogoncalves/vcgen/src/exceptions/NullException.php",
        "vendor/leandrogoncalves/vcgen/src/exceptions/ParameterException.php"
      ]
    }
  }
```


## Contribute
------------

Please feel free to fork and extend existing or add your own examples and send a pull request with your changes!
To establish a consistent code quality, please check your code using [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) against [PSR2 standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) using `./vendor/bin/phpcs -p --standard=PSR2 --ignore=vendor .`.


## License
----------

MIT License

Copyright (c) 2016 Leandro Gonçalves da Silva

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.