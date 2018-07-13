# Seeker


[![GitHub issues](https://img.shields.io/github/issues/Samwel24/seeker.svg)](https://github.com/Samwel24/seeker/issues)
[![license](https://img.shields.io/github/license/Samwel24/seeker.svg)](LICENSE.md)
[![GitHub forks](https://img.shields.io/github/forks/Samwel24/seeker.svg)](https://github.com/Samwel24/seeker/network)
[![GitHub stars](https://img.shields.io/github/stars/Samwel24/seeker.svg)](https://github.com/Samwel24/seeker/stargazers)
[![Installs](https://img.shields.io/github/installs/Samwel24/seeker.svg)](https://packagist.org/packages/dreamaker/seek/stats)



## Table of Contents

- [Install](#install)
- [Documentation](#documentation)
- [License](#license)

## Install

To install the Seeker

first download via composer by running the command `composer require dreamaker\seeker`
if you do not have composer you could just clone this repo

after download 

Then include or into your project directory and put this at the top of you class or file 
`use Dreamaker\Seeker\Seek;`

## Documentation

``` Seek::add(&$array, $key, $value)```

This will add an item to an array using the "dot" notation if it doesn't exist.

``` Seek::accessible($value)```

This will determine whether the given value is array accessible.

``` Seek::has($array, $keys)```

This will check if an item or items exist in an array using "dot" notation

```Seek::exists($array, $key);```
This will determine if the given key exists in the provided array.

``` Seek::set(&$array, $key, $value)```
This will set an array item to a given value using "dot" notation.

## License

Seeker is free software distributed under the terms of the MIT license.

## Contribution guidelines

Please report any issue you find in the issues page.  
Pull requests are welcome.