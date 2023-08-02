<?php 

$errors = [];

$title = '';
$description = '';
$price = '';

$product = [
  'image' => ''
];

$imagePath = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $date = date('Y-m-d H:i:s');

            
            if(!$title)
            {
                    $errors[] = "Product title is requeried";
            }

            if(!$price)
            {
                    $errors[] = "Product price is requried";
            }
            
            $dir = 'images';
            if(!is_dir(__DIR__.$dir)){

                mkdir($dir);
            }

            if(empty($errors)){

                        // upload image
                        $imagePath = '';
                        $image = $_FILES['image']?? null;

                        if($image && $image['tmp_name'])
                        {
                                if($product['image']){
                                        unlink(__DIR__.$product['image']);
                                }

                             $imagePath = 'images/'.randmString(8).'/'.$image['name'];

                            mkdir(dirname(__DIR__.'/public/'.$imagePath));
                            move_uploaded_file($image['tmp_name'] ,__DIR__.'/public/'.$imagePath);

                        }

                        


                    


            }
}























?>