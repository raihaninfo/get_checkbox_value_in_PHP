<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Learning PHP</title>
</head>

<body>
    <div class="container">
        <section class="header bg-color">
        <div class="row">
        <div class="col-md-12 text-center">

        <?php 
        echo "Date is ".date("d/m/Y")."  "; 
        date_default_timezone_set("Asia/Dhaka");
        echo "Time Is ".date("h:i:sa"); 
        ?>
        </div>
        </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="text-center ptext">মৃত্যু না হওয়া পর্যন্ত মানুষের শিক্ষা সমাপ্ত হয় না।</p>
                </div>
                <div class="col-md-4">
                    <h2 class="h2 text-center text-h">Learning PHP</h2>
                </div>
                <div class="col-md-4">
                    <p class="text-center ptext">শিক্ষার শেকড়ের স্বাদ তেঁতো হলেও এর ফল মিষ্টি</p>
                </div>
            </div>
        </section>