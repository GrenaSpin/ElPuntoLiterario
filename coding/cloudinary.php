<?php 
    #require 'vendor/autoload.php';
    
    require 'vendor/autoload.php';
    
    use Cloudinary\Configuration\Configuration;
    use Cloudinary\Api\Upload\UploadApi;
    // configure globally via a JSON object


    Configuration::instance([
        'cloud' => [
          'cloud_name' => ' ', 
          'api_key' => ' ', 
          'api_secret' => ' '],
        'url' => [
            'secure' => true]]);

    /*$image = (new UploadApi())->upload('../img/about.jpg');

    echo "Url =".$image['secure_url'];
    echo "Public Id =".$image['public_id'];*/
    
?>