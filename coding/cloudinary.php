<?php 
    require 'vendor/autoload.php';
    
    use Cloudinary\Configuration\Configuration;
    use Cloudinary\Api\Upload\UploadApi;
    // configure globally via a JSON object


    Configuration::instance([
        'cloud' => [
          'cloud_name' => $_ENV['CLOUD'], 
          'api_key' => $_ENV['API_KEY'], 
          'api_secret' => $_ENV['API_SECRET']],
        'url' => [
            'secure' => true]]);

    /*$image = (new UploadApi())->upload('./img/logo_png.png');

    echo "Url =".$image['secure_url'];
    echo "Public Id =".$image['public_id'];*/
    
?>