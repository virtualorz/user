# Usage
Use Laravel web to access sesssion put by virtualorz/permisdsion package

# Install
    composer require virtualorz/user
    
# Config
edit config/app.php
    
    'providers' => [
        ...
        Virtualorz\User\UserServiceProvider::class
    ]
    
    'aliases' => [
        ...
        'Sitemap' => Virtualorz\User\Facades\User::class,
    ]
    
# Method

###### get(key)
    return string of session value in key : login_user

###### getProp($key)
    return array of session $key
