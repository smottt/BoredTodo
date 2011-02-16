BoredTODO
=========

BoredTODO is a simple TODO list. It was created for keeping a list of things to do when you have completed all other essential stuff and are somewhat bored.

Requirements
------------

PHP >= 5.3.0

Tested on UNIX system. Not tested on Windows.

Installation
------------

In config/config.php change $connectionParams to your configuration.
	$connectionParams = array(
		"dbname"   => "CHANGEME",
		"user"     => "CHANGEME",
		"password" => "CHANGEME",
		"host"     => "localhost",
		"driver"   => "pdo_mysql"
	);

and also set the basedomain configuration value.

	Config::$basedomain = "http://CHANGEME";

Set up the database. The database schema is provided for MySQL DB in _doc/db.sql_. If you wish, you can run BoredTODO on some other databases like PostgreSQL or Oracle. It uses Doctrine2 DBAL for the database layer. But you will possibly have to adapt the existing schema.

And you are done!

Usage
-----

BoredTODO is all about keyboard shortcuts.

First off you will want to type in a short description of the task at the top. If you wish to add this task without any longer descriptions, press _ENTER_ and the task is inserted.

BoredTODO offers you three priorities - low, medium and high. If you wish to add a priority to your TODO, type one of the keywords "low", "med" or "high" followed by a whitespace in the short description. Examples:
    low This is a task with low priority.
    med This is a task with medium priority.
    high This is a task with high priority.

Default priority is set to medium.

But if you would like to add some detailed description to the task, press _TAB_ and the cursor will be focued on a textarea in which you can type the description.

For insertion of the task press _TAB_ again.

Your TODO is ready for usage.

If there is a long description, a pointer cursor will appear when you hover over a TODO item. If you click on it, the description will show up. If you click on it again, it will disappear.

When you want to close the task, you have to click on the most-left side of the TODO - the priority color. When you do that, the TODO is checked (deleted). But if you made a mistake, you can easily undo the action by clicking on the priority color again. The TODO is back.

Browser Support
---------------

Since BoredTODO uses some CSS3 features it supports only the latest and non-IE browsers:

  * Firefox
  * Chrome

Untested:

  * Safari
  * IE9

Opera 11 does not seem to have support for CSS gradients, so it is not fully supported. BoredTODO might function on other browsers as well, but was not tested.

Code license
------------

[MIT License](http://www.opensource.org/licenses/mit-license.php)

Copyright (c) 2011 [Metod](http://www.metod.si/)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
