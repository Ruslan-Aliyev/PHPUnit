https://www.youtube.com/watch?v=-9YVcssCACI

Run `vendor/bin/phpunit`

Or you can make the following shortcuts:

In composer.json:
```
"scripts": {
    "phpunit": "vendor/bin/phpunit"
},
```
Then run `composer phpunit`

```
"config": {
    "bin-dir": "./vendor/bin/" 
}
```
Then run `phpunit`

Terminal:
```
alias p='vendor/bin/phpunit'
```
Then run `p`
