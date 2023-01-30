# Upgrade Kulinarisk from v1 to v2

As requested by numerous customers we've decided to use English instead of Swedish in this new version.

## Replace call to `laga` to call to `bake`

Change usages from

```php
$kulinarisk = new \AKEI\Kulinarisk();

$kulinarisk->laga($maträtt, $varaktighet);

```

to

```php
$kulinarisk = new \AKEI\Kulinarisk();

$kulinarisk->bake($dish, $duration);
```
