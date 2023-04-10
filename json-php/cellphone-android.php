<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    // root
    $cellphonee = [
        [
            "img" => "",
            "unit" => "ANDROID",
            "brand" => "Samsung",
            "model" => "Galaxy S21",
            "price" => "90,000",
            "specs" => ["Processor - Exynos 2100 Octa-core 2.9 GHz",
                        "display - Dynamic AMOLED 2X 6.2 inches 1080 x 2400 pixels",
                        "storage- 256GB",
                        "battery- 4000 mAh Battery Lithium-ion"]
        ],
        [
            "img" => "iphonee.jpg",
            "unit" => "ANDROID",
            "brand" => "Vivo",
            "model" => "Y20",
            "price" => "20,000",
            "specs" => ["Processor - Qualcomm Snapdragon 460 Octa-core 4X1.8 GHz Kryo 240",
                        "display - IPS LCD 6.51 inches 720 x 1600 pixels",
                        "storage- 128GB",
                        "battery- 5000 mAh Li-Po"]
        ],
        [
            "img" => "iphoneee.jpg",
            "unit" => "ANDROID",
            "brand" => "Xiaomi",
            "model" => "Redmi Note 11",
            "price" => "75,000",
            "specs" => ["Processor - 6nm Qualcomm Snapdragon 680 Snapdragon 680 Octa-core Max 2.40GHz",
                        "display - AMOLED 6.43 inches 1080 x 2400 pixels",
                        "storage- 128GB",
                        "battery- 5000 mAh Lithium-ion "]
        ],

    ];

    $data = json_encode($cellphonee);
    echo $data;
    
?>
