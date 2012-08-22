Scoop
=====
Scoop is a PHP class to get inputs.

Usage
-----
You need to create the class, so this will do:

```php
$input = new Scoop();
```

That's it, now you can use that to access your inputs.


Then, when you need to access a variable, simply do:

```php
$name = $input->post('name');

```

If that input variable is empty or not set, the function will return `false`.

Example
-------
```php
$input = new Scoop();  
$lang = $input->get('lang');  
switch ($lang) {  
  case 'fr-ca':  
    // Load the French (Canada) language files  
		break;  
	case 'en-us':  
	default:  
		// Load the English (USA) language files  
		break;  
}

```

Methods
-------
Need to do more than just get a $_GET variable? Not to worry, we've got you 
covered.

  - For: `$_GET`, use: `->get()`
  - For: `$_POST`, use: `->post()`
  - For: `$_SESSION`, use: `->session()`
  - For: `$_COOKIE`, use: `->cookie()`
  - For *everything*, use: `->all()`

Of course for everything other than `->all()`, you would need to pass in the 
array key. If you don't, we'll give you everything that's within that array.

License: Beerware <http://wikipedia.org/wiki/Beerware>

Copyright (C) 2012 Bheesham Persaud. 