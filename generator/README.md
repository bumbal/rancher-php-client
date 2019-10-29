# How to use this generator

First run ``composer update`` in the root of this project. Then, create a config.php file inside this directory containing:

    <?php
    
    return [
        'rancher_url' => "https://your.rancher.url/v3/",
        'rancher_token' => "token",
        'rancher_secret' => "secret",
    ];

Finally run the generator, using command line:   
  
    php generator.php
    
This wil generate all PHP files in the src directory.

**This is not necessary in order to use this package! Only when you want to experiment you might want to do this.**