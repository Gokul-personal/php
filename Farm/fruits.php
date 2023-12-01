<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (isset($_POST['submit'])) {
    $fromdate = $_POST['fromdate'];
    $todate = $_POST['todate'];
    $message = $_POST['message'];
    $useremail = $_SESSION['login'];
    $status = 0;
    $vhid = $_GET['vhid'];
    $sql = "INSERT INTO  tblbooking(userEmail,VehicleId,FromDate,ToDate,message,Status) VALUES(:useremail,:vhid,:fromdate,:todate,:message,:status)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
    $query->bindParam(':vhid', $vhid, PDO::PARAM_STR);
    $query->bindParam(':fromdate', $fromdate, PDO::PARAM_STR);
    $query->bindParam(':todate', $todate, PDO::PARAM_STR);
    $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        echo "<script>alert('Booking successfull.');</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
}

?>


<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Farm Fruits</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <!--slick-slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/logo.png">

    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>
    <!--Header-->
    <?php include('includes/header.php'); ?>
    <!-- /Header -->

    <?php
    $vhid = intval($_GET['vhid']);
    if ($vhid == 1) {
    ?>
        <section id="listing_img_slider">
        <div><img src="image/fruit/mixed.jpg" alt="image"  width="1600px" height="500px"></div>
        </section>

        <!--Listing-detail-->
        <section class="listing-detail">
            <div class="container">
                <div class="listing_detail_head row">
                    <div class="col-md-9">
                        <h2>Mango</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="listing_more_info">
                            <div class="listing_detail_wrap">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs gray-bg" role="tablist">
                                    <li role="presentation" class="active"><a href="#introduction" aria-controls="vehicle-overview" role="tab" data-toggle="tab">Introduction</a></li>
                                    <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Process</a></li>
                                    <li role="presentation"><a href="#benefits" aria-controls="benefits" role="tab" data-toggle="tab">Benefits</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- vehicle-overview -->
                                    <div role="tabpanel" class="tab-pane active" id="introduction">
                                        <p>The mango is a stone fruit which belongs to the Anacardiaceae family, which are flowering
                                            plants that produce fruits. Mango (Mangifera indica) is a tropical fruit known for its delicious
                                            taste, vibrant color, and rich nutritional profile. mango cultivated in many tropical and
                                            subtropical regions around the world.

                                            Mangos are native to south Asia and is the national fruit of India, Pakistan, and the Philippines.
                                            Since the mango leaves Global production of mangos has doubled in the last thirty years. Most
                                            mango production is centered in India.

                                            Mangoes are typically in season during the warmer months, and the harvest period varies
                                            depending on the specific variety and the region in which they are grown. Whether enjoyed
                                            fresh, sliced, blended into smoothies, or incorporated into various recipes</p>
                                    </div>
                                    <!-- Accessories -->
                                    <div role="tabpanel" class="tab-pane" id="accessories">
                                        <h4>Height of mango tree</h4>
                                        <p>Mango trees are deep-rooted evergreens that can grow to be very large. Depending on the variety, these trees can grow as tall
                                            as 90 feet with a canopy width of up to 80 feet and have leaves that are 12 to 16 inches long. The mango tree is an
                                            evergreen that can grow up to 100 feet in height, with a dense, umbrella-shaped canopy of green leaves. The fruit
                                            itself is large, typically oval or kidney-shaped, and comes in a variety of colors, including shades of green, yellow,
                                            orange, and red, depending on the cultivar. The inner flesh is juicy, smooth, and sweet, with a distinctive flavor that
                                            combines sweetness with a hint of tartness.</p>
                                        <h4>Irrigration</h4>
                                        <ul>
                                            <li>Mango trees prefer well-draining soil. Overly soggy or waterlogged soil can lead to root problems, so it's crucial
                                                to maintain good drainage.</li>
                                            <li>Use a soil moisture meter or check the soil with your hands to gauge moisture levels. Water the tree when the
                                                top inch or two of soil feels dry.</li>
                                            <li>Drip irrigation is a preferred method for watering mango trees. It delivers water directly to the root zone,
                                                minimizing water wastage and reducing the risk of fungal diseases that can result from wet foliage.</li>
                                            <li>During the growing season, which is typically spring and summer, mango trees may
                                                require more frequent watering. Adjust the watering schedule based on weather
                                                conditions, including rainfall.</li>
                                            <li>In drier climates, consider supplementing natural rainfall with irrigation to meet the
                                                water needs of the mango tree.</li>
                                        </ul>
                                        <h4>Harvesting</h4>
                                        <p>Mango trees begin blooming in the winter months and continue through spring. Most blossoms function as males
                                            by providing pollen, but some are bisexual and are self- pollinating. Insects such as flies, wasps, and bees help
                                            accomplish pollination. Depending on the variety, the fruit may take from 100 to 150 days to mature, resulting in a
                                            late summer and fall harvest

                                            canvas or nylon bag attached near a cutting blade to catch the fruit. Ladders and hydraulic lifts are also used to
                                            help pickers reach fruit high in the tree canopy. Mango fruits are usually picked before they are fully ripe with the
                                            stem intact and after they develop red, orange, or yellow color. The long stem assures that the internal latex, or
                                            juice, does not leak. The fruit are stored stem end down on racks to further prevent latex from dripping on other
                                            fruit. The fruit bruises easily and must be handled carefully to avoid damage.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="benefits">
                                        <ul>
                                            <li>Mangoes contain nutrients like zeaxanthin and lutein, which are beneficial for
                                                eye health and may help prevent age-related macular degeneration.ly reducing the damage caused by free
                                                radicals.</li>
                                            <li>Anti-Inflammatory Properties, Certain compounds in mangoes, such as
                                                mangifer in, have been studied for their potential anti-inflammatory effects.</li>
                                            <li>Despite being naturally sweet, mangoes have an alkalizing effect on the body,
                                                helping to balance the body's pH levels.</li>
                                            <li>These plant compounds have antioxident activity that shields cells from the
                                                DNA damage that can lead to degenerative diseases, including type 2
                                                diabetes and cancer.</li>
                                            <li>A raw mango is 84% water, 15% carbohydratyes, 1%protein, and has
                                                negligible fat.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="space-20"></div>
                <div class="divider"></div>
            </div>
        </section>
    <?php
    } elseif ($vhid == 2) {
    ?>
        <section id="listing_img_slider">
        <div><img src="image/fruit/mixed.jpg" alt="image"  width="1600px" height="500px"></div>
        </section>

        <!--Listing-detail-->
        <section class="listing-detail">
            <div class="container">
                <div class="listing_detail_head row">
                    <div class="col-md-9">
                        <h2>Watermelon</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="listing_more_info">
                            <div class="listing_detail_wrap">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs gray-bg" role="tablist">
                                    <li role="presentation" class="active"><a href="#introduction" aria-controls="vehicle-overview" role="tab" data-toggle="tab">Introduction</a></li>
                                    <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Process</a></li>
                                    <li role="presentation"><a href="#benefits" aria-controls="benefits" role="tab" data-toggle="tab">Benefits</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- vehicle-overview -->
                                    <div role="tabpanel" class="tab-pane active" id="introduction">
                                        <p>Watermelon (Citrullus lanatus) is a warm-season crop in the Cucurbit family. Watermelons are
                                            grown across the state, including larger areas in Casey County, Lin- coln County, Hart County, Allen County
                                            and Daviess County. Kentucky farms annually harvest more than 1,000 watermelon acres, the
                                            Commonwealth’s second largest fresh market vegetable by area.</p>
                                    </div>
                                    <!-- Accessories -->
                                    <div role="tabpanel" class="tab-pane" id="accessories">
                                        <h4>Site selection and planting</h4>
                                        <p>Gummy stem blight had been the most widespread and serious disease of watermelon in Kentucky. Although it is still
                                            important, over the last five years there has been an increase in anthracnose to levels of- ten higher than gummy stem blight.
                                            Other diseases that can result in crop losses include Phytophthora fruit rot, Fusarium wilt, Alternaria leaf spot, Cercospora leaf
                                            spot, and yellow vine decline. Some disease resistance is available in certain cultivars. Good spray coverage with appropriate
                                            fungicides/bactericides is essential. The MELCAST disease forecasting system can help with optimizing timing of fungicide
                                            applications for management of gummy stem blight, anthracnose and Alternaria leaf spot. In some seasons, that can result in a
                                            reduction of two or three fungicide applications.

                                            Watermelon insect pests include aphids, cucumber beetles and two-spotted spider mites. Weekly scout- ing is
                                            recommended for early detection and best management of insect and mite pests. As with all vegetables, weeds can be
                                            a serious problem in commercial fields. Black plastic mulch usually works well to reduce weed pressure from within
                                            rows, and selective herbicides or cultivation can be used in row middles.</p>
                                        <h4>Harvest and storage</h4>
                                        <p>Watermelons are hand-harvest- ed when fully ripe. “Thumping” the fruit is not a reliable indica- tor of fruit maturity and often
                                            indicates over maturity. The presence of a dead tendril at the point where the fruit attaches to the vine helps in determining
                                            when to harvest seeded watermelons, but this does not apply to seedless watermelons. A primary criterion is checking for the
                                            change in color on the belly or ground spot of the watermelon; this is the best way to check for maturity. However, because this
                                            color varies among cultivars, growers must become familiar with the varieties grown to determine the best stage of harvest. In
                                            atypically cool summers as in 2013 and 2014, the ripening process becomes extremely slow. Melons should be handled gently to
                                            avoid bruising. Cooling harvested fruit removes field heat and prolongs shelf life. Watermelons may be stored for three to four
                                            weeks at the proper temperature and relative humidity. As watermelons are sensitive to ethylene, avoid storing with produce
                                            that generates ethylene, such as apples or tomatoes.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="benefits">
                                        <ul>
                                            <li>Watermelon has a high water content, making it an excellent hydrating food, particularly in hot weather.</li>
                                            <li>Watermelon seeds have amazing health benefits too. These are loaded with nutrients like magnesium, folate, and
                                                fatty acids. They are rich in fibres, have low sugar content, and also contain citrulline.</li>
                                            <li>Lycopene is found abundantly in watermelon. It has antioxidant and anti-inflammatory potential. Some studies
                                                indicate it might also be helpful to improve mental processes and thinking.</li>
                                            <li>The antioxidants in watermelon can help reduce oxidative stress in the body, potentially lowering the risk of chronic
                                                diseases associated with inflammation and oxidative damage.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="space-20"></div>
                <div class="divider"></div>
            </div>
        </section>
    <?php
    } elseif ($vhid == 3) {
    ?>
        <section id="listing_img_slider">
        <div><img src="image/fruit/mixed.jpg" alt="image"  width="1600px" height="500px"></div>
        </section>
        <!--Listing-detail-->
        <section class="listing-detail">
    <div class=" container">
            <div class="listing_detail_head row">
                <div class="col-md-9">
                    <h2>Jackfruit</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="listing_more_info">
                        <div class="listing_detail_wrap">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs gray-bg" role="tablist">
                                <li role="presentation" class="active"><a href="#introduction" aria-controls="vehicle-overview" role="tab" data-toggle="tab">Introduction</a></li>
                                <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Process</a></li>
                                <li role="presentation"><a href="#benefits" aria-controls="benefits" role="tab" data-toggle="tab">Benefits</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- vehicle-overview -->
                                <div role="tabpanel" class="tab-pane active" id="introduction">
                                    <p>Jackfruit (Artocarpus heterophyllus) is a large tropical fruit that is gaining popularity
                                        worldwide due to its versatility and various health benefits.Jackfruit tree can reach he
                                        evergreen, latex-produc-up to 80 feet in height, with a straight stem that branches
                                        near the base. The tree produces a long taproot. All parts have milky white, very
                                        sticky latex. The jackfruit flowers are borne on short shoots on the trunk and older
                                        branches. The thick, rubbery rind has short, blunt spines, and the fruit can have up to
                                        500 seeds. Average fruit size is about 35 pounds, but they

                                        are often much larger. In 2010, at a jackfruit festival in Kerala, India, a 144-pound fruit was featured.
                                        The larg- est Hawaiian fruit was 79 pounds and held the Guinness book of records for a number of
                                        years. In locations where the fruit is relished, only the rind and core are inedible. The fruit odor can
                                        be described as blend of grapefruit, banana, and cheese, or something between spoiled onions and
                                        sweaty gym socks, and cloyingly sweet.

                                        Jackfruit is thought to have originated in southwest India and been spread in ancient times throughout
                                        Southeast Asia, then to tropical Africa. It was prob- ably introduced to the Philip- pines in the 12th century
                                        and domesticated soon thereafter. The writings of Pliny the Elder, as early as AD 100, mention jackfruit’s
                                        origin as “where of the Indian sages and philoso- phers do ordinarily live.” The tree is still highly regarded
                                        by subsistence farmers from India to Southeast Asia for its fruit, timber, and medicinal uses. It was one of
                                        the earliest cultivated fruits. Jackfruit was reported in Hawai‘i prior to 1888.</p>
                                </div>
                                <!-- Accessories -->
                                <div role="tabpanel" class="tab-pane" id="accessories">
                                    <h4>Environment</h4>
                                    <p>Jackfruit thrives in tropical warm and humid frost-free climates at elevations below 5000 feet. The trees have some salinity
                                        tolerance but poor drought and flooding tolerance. It will grow in a variety of well-drained soils with a pH between 5 and 7.5.
                                        The tree does not do well in exposed locations with strong, drying winds. It needs irrigation in times of drought in order to
                                        produce fruit. Growth habits vary from tall and straight with a thin trunk to short with a thick trunk, varying with soil type,
                                        environment, and cultivar.</p>
                                    <h4>Propagation</h4>
                                    <p>Seeds from selected trees are the major means of propa- gation. After overnight soaking in water, they should be planted as
                                        soon as possible after harvest, as they lose viability within 1–3 months. Seeds germinate in 3–8 weeks. Seedlings are best
                                        grown under shade. To propagate a desirable tree, root cuttings can also be used, with stem cuttings and air layers also
                                        being successful. Grafting and budding are now widely used in India and Southeast Asia. Budding, grafting, and inarching
                                        are done onto 12-month-old rootstocks of A. integer, A. heterophyllus, other Artocarpus species, as well as the same species
                                        being propagated. However, the suitability of these rootstocks has not been evaluated in a range of environments. Modified
                                        veneer grafts and cleft grafts are among the most common. Sometimes seedlings, such as those of the Singapore variety, are
                                        true to type. In major producing areas, seeds are usually planted in the field and later top-worked with selected varieties.
                                        Seedlings need to be transplanted before they are 1 year old to avoid damage to the sensitive taproot.</p>
                                    <h4>Pests and diseases</h4>
                                    <p>Seed and blossom rots, leafspots, pink disease, and fruit rot occur on jackfruit. The blossom and fruit rot are
                                        caused by Rhizopus artocarpi on both developing and mature fruit. Bacterial dieback (caused by Erwinia
                                        canetorora) can be a problem with most Artocarpus species. Corticum salmonicolor causes pink disease. Root
                                        rots due to Fusarium and Phytophora are major problems, especially if the root system is flooded for a few
                                        days. Leafspot, caused by Phomopsis artocarpina, Colletotrichum lagenarium, and Septoria artocarpi, is a
                                        problem in many areas.

                                        Jackfruit is reported to be attacked by shoot borers, bark borers, bud weevils, spittle bugs, mealybugs, scale
                                        insects, and aphids. Larva from oriental jackfruit fly (Dacus umbrosus Fabricius and Dacus dorsalis) has been
                                        found in marang and jackfruit but can be controlled with modern baits and protective bags covering the fruit
                                        as it develops. Borers can also be a problem. Once the tree is established, weeds are not a problem due to
                                        dense shade.</p>
                                    <h4>Post-harvest</h4>
                                    <p>Fruit quality and shelf life is dependent on maturity at harvest. Fruit is sometimes allowed to fall and must be
                                        collected daily, for it has a shelf life of only 2–3 days. Whole fruit is moved rapidly to market. Half-ripe fruit cut
                                        in sections has a longer shelf life and is often sold in Indian grocery stores, where a wide variety of whole fruit
                                        sizes are also available. Mature, undamaged fruit can be stored at 50°F for 2–3 weeks. Fruit ripens in 3–7 days
                                        at 71–80°F, depending upon the stage of maturity at harvest. Fruit can be dried or preserved in simple syrup
                                        for future use. It is also canned and sold commercially.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane active" id="benefits">
                                    <ul>
                                        <li>Jackfruit is relatively low in calories, making it a suitable option for those looking to
                                            manage their calorie intake. It can be included in a balanced diet for individuals
                                            seeking weight management.</li>
                                        <li>Jackfruit is a good source of essential nutrients, including vitamin C, potassium,
                                            dietary fiber, and various antioxidants. It provides a range of vitamins and minerals
                                            necessary for overall health.</li>
                                        <li>Jackfruit is high in dietary fiber, which promotes digestive health. Adequate fiber
                                            intake can help prevent constipation, promote regular bowel movements, and
                                            support a healthy gut microbiome.</li>
                                        <li>Jackfruit is a good source of vitamin C, an antioxidant that plays a crucial role in
                                            supporting the immune system, promoting skin health, and aiding in the absorption
                                            of iron from plant-based foods.</li>
                                        <li>Jackfruit trees are hardy and well-suited to tropical regions, requiring relatively low
                                            maintenance. The fruit is known for its high yield and can contribute to sustainable
                                            agriculture in certain climates.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="space-20"></div>
            <div class="divider"></div>
            </div>
        </section>
    <?php
    }
    ?>
    <!--/
  Listing-detail-->

    <!--Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- /Footer-->

    <!--Login-Form -->
    <?php include('includes/login.php'); ?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php'); ?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php'); ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <script src="assets/switcher/js/switcher.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>