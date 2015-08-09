SimplifyTwigExtension
=====================

Brings ezComponents str_simplify-function to Twig

Installation using composer:

```
    "repositories": [
        {
            "type": "git",
            "url": "git@github.com:itinance/SimplifyTwigExtension.git"
        }
    ],
    "require": {
        "itinance/tinygeo": "dev-master"
    },
```

Usage examples:

```
$p1 = new GeoPoint("48°07'31.5''", "011°32'23''");
echo $p1->lat . ', ' . $p1->lng;
```

```
$p1 = new GeoPoint(48.346611, 11.578393);
echo $p1->getStringAsDegreeMinuteSecond()
```

```
$d = new GeoDegree(16, 19, 28.29);
$this->assertEquals(16.324525, $d->toDecimals());
```

```
$d = GeoDegree::fromString("48°08'10''");
$this->assertEquals( 48, $d->degrees );
$this->assertEquals( 8, $d->minutes );
$this->assertEquals( 10, $d->seconds);
```

```
$p1 = new GeoPoint(48.135993, 11.539721);
$destination = GeoCalculation::movePointUpwards($p1, 1.200);
```

```
$center = new GeoPoint(48.135993, 11.539721);

$box = GeoCalculation::getBoundingBox($center, 0.7); // 700m
$this->assertEquals( new GeoPoint( 48.1404443, 11.54637187 ),  $box->getNorthEast(), '', 0.001 );
$this->assertEquals( new GeoPoint( 48.1404443, 11.53307013 ),  $box->getNorthWest(), '', 0.001 );
$this->assertEquals( new GeoPoint( 48.13154, 11.53307013 ),  $box->getSouthWest(), '', 0.001 );
$this->assertEquals( new GeoPoint( 48.13154, 11.54637187 ),  $box->getSouthEast(), '', 0.001 );
```
