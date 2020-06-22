scheb/tombstone
===============

Implements the concept of **tombstones for dead code detection in PHP**.

The library provides you with a toolbox to place, track and evaluate tombstones in your code.

[![Build Status](https://travis-ci.org/scheb/tombstone.svg?branch=1.x)](https://travis-ci.org/scheb/tombstone/branches)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/scheb/tombstone/badges/quality-score.png?b=1.x)](https://scrutinizer-ci.com/g/scheb/tombstone/?branch=1.x)
[![Code Coverage](https://scrutinizer-ci.com/g/scheb/tombstone/badges/coverage.png?b=1.x)](https://scrutinizer-ci.com/g/scheb/tombstone/?branch=1.x)
[![Latest Stable Version](https://poser.pugx.org/scheb/tombstone/v/stable.svg)](https://packagist.org/packages/scheb/tombstone)
[![Total Downloads](https://poser.pugx.org/scheb/tombstone/downloads)](https://packagist.org/packages/scheb/tombstone)
[![License](https://poser.pugx.org/scheb/tombstone/license.svg)](https://packagist.org/packages/scheb/tombstone)

<p align="center"><img alt="Logo" src="doc/tombstone-logo.svg" width="300" /></p>

What are Tombstones?
--------------------

To get the basic idea, watch David Schnepper's 5 minute talk from Velocity Santa Clara 2014.

<a href="http://www.youtube.com/watch?feature=player_embedded&v=29UXzfQWOhQ" target="_blank">
    <img src="http://img.youtube.com/vi/29UXzfQWOhQ/0.jpg" alt="Tombstone Youtube Video" width="240" height="180" border="10" />
</a>

When you want to identify and clean-up dead code in a project, static code analysis tools are the weapon of choice. But
these tools have some limitations, especially in a dynamic language like PHP:

- They can only tell you, if a piece of code is referenced, not if it's actually used.
- They cannot resolve dynamic or generated call paths.

Tombstones provide a way to track if a piece of code is actually invoked. **They are executable markers in your code**,
that you can place where you suspect dead code. Then, you collect tombstone invocations on production. After a while,
the logs will tell you, which tombstones are dead and which ones aren't (the so called "vampires").

Installation
------------

[WIP]

Security
--------
For information about the security policy and know security issues, see [SECURITY.md](SECURITY.md).

Contributing
------------
Want to contribute to this project? See [CONTRIBUTING.md](CONTRIBUTING.md).

License
-------
This software is available under the [MIT license](LICENSE).

Acknowledgments
---------------

The library is heavly inspired by [Nestoria.com's implementation](http://devblog.nestoria.com/post/115930183873/tombstones-for-dead-code) of the tombstone concept.

Thanks to [Jordi Boggiano](https://github.com/Seldaek) for creating [Monolog](https://github.com/Seldaek/monolog), from
where I lend the handler/formatter concept.

The tombstone graphic is based on a licensed illustration by "lemonadeserenade".
