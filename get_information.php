<?php
/**
 * Created by PhpStorm.
 * User: leonc
 * Date: 19/04/2017
 * Time: 16:19
 */

if(!empty($_GET['barcode'])){
    $barcode = $_GET['barcode'];
    $barcode = str_replace(' ','',$barcode);
    if(is_numeric($barcode)) {
        $off_url = 'http://world.openfoodfacts.org/api/v0/product/' . urlencode($barcode) . '.json';

        $off_json = file_get_contents($off_url);
        $off_array = json_decode($off_json, true);

        $existence = $off_array['status'];
        if ($existence == 1) {
            if(!empty($off_array['product']['brands']))
                $product_brand = $off_array['product']['brands'];
            if(!empty($off_array['product']['product_name']))
                $product_name = $off_array['product']['product_name'];
            if(!empty($off_array['product']['generic_name']))
                $generic_name = $off_array['product']['generic_name'];
            if(!empty($off_array['product']['categories']))
                $categories = $off_array['product']['categories'];
            if(!empty($off_array['product']['traces']))
                $traces = $off_array['product']['traces'];
            if(!empty($off_array['product']['ingredients_text_with_allergens']))
                $ingredients = $off_array['product']['ingredients_text_with_allergens'];

            if(!empty($off_array['product']['countries_tags'])){
                $countries_array = array();
                $countries_array = $off_array['product']['countries_tags'];

            }

            if (!empty($off_array['product']['image_front_url'])) {
                $product_picture = $off_array['product']['image_front_url'];
            }

            if(!empty($off_array['product']['allergens_hierarchy'])){
                //echo "ARE ALERGENI!<br/>";
                $product_allergens = array();
                $product_allergens = $off_array['product']['allergens_hierarchy'];
            }
            else{
                //echo "<br/> produsul nu contine alergeni";
            }
        } else {
            $message_nan = "

            <div class='alert bg-warning text-dark alert-dismissible fade show mx-3' role='alert'>
                <strong> Din pacate nu stim ce produs este acesta :( <br/>Contribuiti la marirea bazei de date, adaugand codul de bare (" . $barcode . ") al produsului <a class='white-link-hov' id='off_link' href='https://ro.openfoodfacts.org/' target='_blank'>aici</a>.<br/>
                </strong> 

                <button type='button' class='close close-btn' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            ";
        }
    }
    else{
        $message_numeric = "
        <div class='alert bg-warning text-dark alert-dismissible fade show mx-3' role='alert'>
            <strong>Codul de bare nu poate contine litere!</strong>
            <button type='button' class='close close-btn' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        ";
        echo $message_numeric;
    }
}
?>