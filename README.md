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
        "itinance/SimplifyTwigExtension": "dev-master"
    },
```

Substitutes newlines, tabs, and multiple spaces from the string $str and replaces it with a single blank. 
Whitespace in the beginning and at the end of the $str are removed

Stolen from the former ezComponents-Framework
