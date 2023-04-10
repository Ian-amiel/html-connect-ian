<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    // root
    $cellphone = [
        [
            "img" => "iphone.jpg",
            "unit" => "IOS",
            "brand" => "IPhone 13 Pro",
            "model" => "APPLE",
            "price" => "80,000",
            "specs" => ["Processor - A15 Bionic Hexa-core 3.22 GHz",
                        "display - OLED 6.1 inches with 2532 x 1170 pixels",
                        "storage- 128GB",
                        "battery- 3095 mAh Battery Lithium-ion"]
        ],
        [
            "img" => "iphonee.jpg",
            "unit" => "IOS",
            "brand" => "Iphone 12 Pro Max",
            "model" => "APPLE",
            "price" => "85,000",
            "specs" => ["Processor - A14 Bionic chip",
                        "display - 6.7 inch OLED display 778‑by‑1284-pixel resolution at 458 ppi",
                        "storage- 128GB",
                        "battery- 3095 mAh Battery Lithium-ion"]
        ],
        [
            "img" => "iphoneee.jpg",
            "unit" => "IOS",
            "brand" => "Iphone 11 Pro Max",
            "model" => "APPLE",
            "price" => "75,000",
            "specs" => ["Processor - A13 Bionic chip",
                        "display - 6.5 inch OLED Multi Touch display 2688‑by-1242‑pixel resolution at 458 ppi",
                        "storage- 256GB",
                        "battery- 3095 mAh Battery Lithium-ion"]
        ],

    ];

    $data = json_encode($cellphone);
    echo $data;
    
    
?>
