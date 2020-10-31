<?php

    $cURLConnection = curl_init();

    curl_setopt($cURLConnection, CURLOPT_URL, 'http://crisfood.loc/api/user/contest');
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $phoneList = curl_exec($cURLConnection);
    curl_close($cURLConnection);

    $jsonArrayResponse = json_decode($phoneList);
    $count = 1;
?>

<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Crisfood - Contest</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" class="parallax app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98"
    style="background-color:#005b7f;">
    <div class="text-center mx-auto">
        <img src="https://res.cloudinary.com/armashfankar/image/upload/v1602266793/svg/cris_food_ctc.svg"
            style="width:200px;height:200px;">
    </div>
    <div class="container bg-white">
        <div class="section">
            <div class="text-right mt-3">
                <a href="rules-and-regulations.html" class="btn btn-info">View Contest Rules & Prizes</a>
            </div>
            <div class="section-title text-center">
                <h3 class="lead mt-3" style="color: #000;font-family: 'Roboto';font-size: 28px;">Leaderboard (Top 20)</h3>
            </div>
            <div class="row mt-3" >
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="tbl-content" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                            <table class="table-hover" cellpadding="0" cellspacing="0" >
                                <thead class="text-center">
                                    <th>Position</th>
                                    <th>Avatar</th>
                                    <th>Name</th>
                                    <th>City</th>
                                    <th>Order Count</th>
                                    <th>Total Order Value</th>
                                    <th>Total Referrals</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($jsonArrayResponse as $value) { ?>
                                        <tr style="background-color: <?php if($count == 1){ echo "#ffc10747"; } elseif($count == 2) { echo "#e9ecef"; } elseif($count == 3) { echo "#a0693a59"; } ?>">
                                            <td class="text-center" style="width:10px"><?php echo $count; ?></td>
                                            <?php if($value->avatar) {?>
                                                <td class="text-center" style="width: 100px;"><img
                                                    src="<?php echo $value->avatar; ?>"
                                                    style="width: 50px" class="rounded-circle"></td>
                                            <?php } else { ?>
                                                <td class="text-center" style="width: 100px;"><img
                                                    src="https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png"
                                                    style="width: 50px" class="rounded-circle"></td>
                                            <?php } ?>
                                            <td class="text-center text-capitalize" style="width: 200px;"><?php echo $value->name; ?></td>
                                            <td class="text-center text-capitalize" style="width: 200px;"><?php echo $value->city; ?></td>
                                            <td class="text-center" style="width: 200px;"><?php echo $value->order_count; ?></td>
                                            <td class="text-center" style="width: 200px;">₹<?php echo $value->total_order_value; ?></td>
                                            <td class="text-center" style="width: 200px;"><?php echo $value->total_referrals; ?></td>
                                        </tr>
                                    <?php $count++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="purchase" class="parallax section db" style="background-color:#005b7f;">
        <div class="container">
            <div class="section-title text-center">
                <h3>Download Now!</h3>
                <p class="lead">There are hundreds of our happy customers. We thanks all our awesome customers!</p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <a style="color: #fff;" href="https://play.google.com/store/apps/details?id=com.crisfood.users&hl=en_GB" target="_blank">
                        <div class="btn-buy apple-button">
                        <i class="flaticon-android alignleft"></i> Download on the <strong>Google Play</strong>
                        </div>
                    </a>
                </div><!-- end col --> 
				
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <a style="color: #fff;" href="https://apps.apple.com/in/app/crisfood/id1486905254" target="_blank">
                        <div class="btn-buy apple-button">
                            <i class="flaticon-apple alignleft"></i> Download on the <strong>App Store</strong>
                        </div>
                    </a>
                </div><!-- end col -->  
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name text-dark">All Rights Reserved. &copy; 2020 <a href="#">Crisfood</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/zenith.js"></script>
    <script>
        $('#default').zenith({
            layout: 'default',
            slideSpeed: 450,
            autoplaySpeed: 2000
        });
    </script>

</body>

</html>