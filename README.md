![Postgresify](https://cloud.githubusercontent.com/assets/5347897/14873618/83c04980-0cc6-11e6-992b-fef3d866ac94.png)

Note
> This package is under development.

## Table of Contents


**[What is this?](#what-is-this)**


**[Installation](#installation)**


**[Geometric Types](#geometric-types)**

* [Box](#box)
* [Circle](#circle)
* [Line](#line)
* [Line Segment](#line-segment)
* [Path](#path)
* [Point](#point)
* [Polygon](#polygon)


**[Monetary Types](#monetary-types)**

* [Money](#money)


**[Network Address Types](#network-address-types)**

* [IP Address](#ip-address)
* [MAC Address](#mac-address)
* [Netmask](#netmask)


**[Range Types](#range-types)**

* [Date Range](#date-range)
* [Integer Range](#integer-range)
* [Numeric Range](#numeric-range)
* [Timestamp Range](#timestamp-range)
* [Timestamp Range w/ Timezone](#timestamp-timezone-range)


**[License](#license)**

**[References](#references)**

## What is this?
Postgresify is a package for Laravel and Lumen that extends support to some of the more useful PostgreSQL data types.
This package allows you to leverage PostgreSQL's data types, such as point, inet, circle, etc., within Laravel's Schema
Builder and retrieve meaningful data from Fluent/Eloquent.

Example Migration:
```php
Schema::create('hotel_search', function (Blueprint $table) {
    // ...

    $table->point('geocode_coordinates');
    $table->ipAddress('visitor_ip_address');
    $table->circle('search_area');
    $table->dateRange('reservation_period');
    $table->money('budget');

    // ...
});
```

Life's easier, right? The above use cases of PostgreSQL's types eliminate a few immediately noticeable headaches:
- Point types store geographic coordinates in one field--not two.
- IP address types will store IPv4 or IPv6--no `VARCHAR` here.
- Circle types store a center point and a radius <(x, y), r> in one field. There are 'hackier' ways to store radii
related to a center point without this.
- Date range types store just that, date ranges. This, like the point type, eliminates the necessity of the second
field.
- Money types store a signed, locale-sensitive currency amount, with a range of +/- 92 quadrillion! No more
`DECIMAL(11,2)` or whatever people do these days.

Now let's discuss the actual utility afforded by these additional types. PostgreSQL is nicely equipped with functions
and operators for meaningfully working with these data types. This depends on the architecture of your environment, but
these types combined with the functions/operators allow you to offload some work onto your database server--which might
be faster and could reduce some responsibilities within your application's code. Your mileage may vary. See this
[StackExchange Q/A](http://programmers.stackexchange.com/questions/171024/never-do-in-code-what-you-can-get-the-sql-server-to-do-well-for-you-is-this).

## Installation
To install this package you will need:
- Laravel 5.1+ or Lumen 5.1+
- PHP 5.5.9+

This package is intended for **PostgreSQL 9.4+**.

Add this package to your ```composer.json``` file as a dependency:
```composer require aejnsn/postgresify```

### Laravel

After installing via Composer, register Postgresify's ```DatabaseServiceProvider``` in your ```config/app.php```
configuration file like so:
```php
'providers' => [
    // Other service providers...

    Aejnsn\Postgresify\DatabaseServiceProvider::class,
],
```

### Basic Usage
If you would like code completion in your IDE for the PostgreSQL types made available via Postgresify, be sure your migrations (or other uses of Illuminate's Schema Builder) ```use``` the ```Aejnsn\Postgresify\Database\Schema\Blueprint``` class as in this example:
```php
<?php

use Aejnsn\Postgresify\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->dateRange('reservation');
        
            // Build your schema using PostgreSQL's awesome types...
        });
    }

    // ...
}
```

## Geometric Types

The geometric types in PostgreSQL can give you a ton of power while reducing complexity in your application.
> PostgreSQL's geometric types do not try to replace the need for [PostGIS](http://postgis.net/) in cases where
> geographic calculations are performed. Remember this is geometric, not geographic--the Earth is not flat, or even a
> perfect sphere, it's an oblate spheroid (ellipsoid). That being said, don't use geometric types for heavy geographic
> work. Please use PostGIS if you determine a need, your accuracy depends on it. For those of you would-be geodesy
> aficionados, check out Charles F. F. Karney's work. Karney's algorithms are accurate to within 15 nm.



### Box

### Circle

### Line

### Line Segment

### Path

### Point

### Polygon


## Monetary Types

Methods of storing currency in an application/database make a hot topic for debate, and there is a ton of misinformation
on this topic. People start citing [GAAP](http://www.fasab.gov/accounting-standards/authoritative-source-of-gaap/), and
then it boils down to developers' non-standard preferences. There is too much uncertainty, and I just do not like it.
Let's look at some common methods for storing currency:

1. **Store as ```float```**. Don't do this, you'll have garbage for accuracy.
2. **Store as ```decimal```/```numeric```**. This is fine and handles the cases where you need to store fractions of a
cent. Decimal can be a hit to your performance in analytical operations.
3. **Store as ```integer``` using cents (or other currency's base unit) or use ```money```**. This is best, and works in
cases where you do **not** need fractions of a cent. PostgreSQL's ```money``` stores as an integer (of cents) but cleans
up the display and return of doing so. ```Money``` is more performant than ```decimal```. The range of ```money``` is
-92233720368547758.08 to +92233720368547758.07, so yeah, it will handle large amounts.

### Money


## Network Address Types

Network addresses can be a pain to work with. Imagine the use case where you would need to query all IP addresses of a
certain subnet mask. PostgreSQL has [Network Address Functions and Operators](http://www.postgresql.org/docs/9.4/static/functions-net.html)
for purposes like this.

> I made a [pull request](https://github.com/laravel/framework/pull/12884) for the IP and MAC address types in Laravel. So these two types will be in your initial Laravel installation (5.2.27+), and should work across all of Laravel's supported database systems. However, PostgreSQL, unlike other database systems, has its rich set of network address functions and operators built-in.

### IP Address

### MAC Address

### Netmask


## Range Types

Ranges are quite powerful. A range includes a lower-bound and an upper-bound, either of which can be inclusive or
exclusive. It would take four columns to build that functionality without a range type. Check out [PostgreSQL's Range
Functions and Operators documentation](http://www.postgresql.org/docs/9.4/static/functions-range.html).

### Date Range

### Integer Range

### Numeric Range

### Timestamp Range

### Timestamp Range w/ Timezone


## License

- This package is licensed under the [MIT license](https://raw.githubusercontent.com/aejnsn/postgresify/master/LICENSE).

## References

- [PostgreSQL 9.4 Manual](http://www.postgresql.org/docs/9.4/static/datatype.html)
