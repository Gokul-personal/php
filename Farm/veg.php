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
  <title>Farm </title>
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
 

  <!-- SWITCHER -->
  <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
 
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <!-- Fav and touch icons -->
 <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/logo.png">
  <link rel="apple-touch-icon-precomposed" href="favicon-icon/logo.png">
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
    <div><img src="image/veg/veg.jpg" alt="image"  width="1600px" height="500px"></div>
    </section>

    <!--Listing-detail-->
    <section class="listing-detail">
      <div class="container">
        <div class="listing_detail_head row">
          <div class="col-md-9">
            <h2>Brinjal</h2>
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
                    <p>Brinjal is the most common, popular and principal vegetable
                      crop grown widely in india for its varied shape, size and
                      colour of fruits. High productivity, wide adaptation and ease
                      in availability make the crop to find its place as poor man’s
                      crop. Its fruits are fairly good source of calcium, phosphorus,
                      iron and vitamins particularly - B group. Brinjal has
                      cholesterol reducing properties due to the presence of
                      higher amount of poly- unsaturated fatty acids in pulp and
                      seeds.</p>
                  </div>
                  <!-- Accessories -->
                  <div role="tabpanel" class="tab-pane" id="accessories">
                    <h4>Climate</h4><br>
                    It is a warm season crop and requires a relatively long
                    growing season with plenty of sunshine and moderate day
                    temperature of 210-270 C. Extreme temperature (below 100 C
                    and above 300C ) adversely affects fruit setting. Warm and
                    humid climate favours luxurious growth and cool climate
                    restricts the growth.
                    <h4>Soil</h4>
                    It can be grown in all types of soils, but well drained fertile,
                    rich in organic matter silt or clay loam soils are ideal.. The
                    optimum pH is between 5.5-6.6, although it can tolerate a
                    little soil acidity. Sandy loam soil is best for early crop and
                    clay loam soil for higher yield.

                    <h4>Irrigation</h4>
                    <p>Brinjal being a shallow rooted crop needs irrigation at frequent interval..
                      During summer, apply irrigation at 4-5 days interval and during winter at
                      10-15 days interval. About 100-110 cm. total water is needed for
                      successful brinjal crop and in total 14-16 irrigations are needed. Furrow
                      method of irrigation is the most common method.</p>
                    <h4>Weeding and hoeing</h4>
                    <p>Practice shallow inters - cultivation particularly a few days after every
                      irrigation to remove the weeds and to conserve the moisture. 3-4 hoeings
                      are normally needed to check the weeds growth. Earthing up after second
                      top dressing of nitrogen is quite beneficial.. Regarding chemical weed
                      control, a pre plant application of pendimethalin (Stomp 30 EC) @1.0 kg a.i
                      / ha is effective.</p>
                    <h4>Varieties</h4>
                    <p>Pusa Purple Cluster: Purple pigmentation on stem and leaves, Fruits
                      are 10-12 cm. long, borne in clusters of 4-9. This variety possesses
                      field resistance to bacterial wilt. First picking starts in 60-65 days
                      after transplanting. Average yield is 250 q/ha.

                      Pant Samrat : It is a long fruited variety which produces dark purple
                      medium to longfruits inclusters Plants are tall (80-100 cm) . Young
                      leaves are purplish green. This variety possesses field resistance to
                      bacterial wilt and phomopsis blight. First picking starts in 70 days
                      after transplanting. Average yield is 300 q/ha.

                      PH-4 : Plants are bushy, fruits are medium long and thin, deep
                      purple in colour, flesh is light green. Average yield is 250-300 q/ha.</p>
                    <h4>Harvesting and storage</h4>
                    <p>Harvest the fruits when they develop good colour, marketable size but still
                      glossy, immature and tender. Generally 15-19 days fruits are optimally
                      matured for harvest. The good marketable quality fruits are bright, glossy
                      appearance having freshness and optimum size without any fading or
                      change in original colour. The fruits are harvested with stalk at joint Under ordinary conditions, the normal storage life of brinjal fruits is
                      1-2 days in the winter months. However, 2-3 weeks storage life can
                      be achieved when fruits are stored in cold storage at 80-100C
                      temperature and 85-90% relative humidity. For long distance
                      transport, fruits should be harvested towards the evening hours
                      and thereafter cooled them with sprinkling of water. Store the fruits
                      in perforated polythene bags or PVC stretch film.</p>
                    <h4>Seed extraction</h4>
                    <p>Brinjal fruits are ready for seed extraction when at least one third of the fruit
                      part turns yellow in colour starting from the stem end. The mature fruits are
                      cut or crushed into small pieces. The seed along with fruit flesh is extracted
                      with fingers and the seed is washed free of food material by washing in
                      water filled tub. The fruit flesh floats over the surface of water. Water and
                      the floating pulp are removed by hand. The clean seed can be obtained by
                      repeated washing in water. Seed should be dried immediately after washing.
                      It is very essential that the seed extraction and its washing should be
                      completed during morning hours so that seed gets sufficient drying during
                      the day and to avoid sprouting of the seed during the night.</p>
                    <h4>Hybrid Brinjal Cultivation</h4>
                    <p>Pusa Hybrid-5: Plants are vigorous, non spiny with semi erect branches.
                      Fruits are long, glossy, attractive, dark purple with partially pigmented
                      peduncle, each fruit weighing 100 g. It takes 80-85 days from sowing to
                      first picking and further pickings continue up to December. Average yield is
                      520-540 q/ha.

                      Pusa Hybrid-6: Plants are vigorous, non spiny with semi erect branches.
                      Fruits are round,

                      glossy, attractive, violet purple with partially pigmented peduncle, each
                      fruit weighing 200- 250g. It takes 85-90 days from sowing to first picking
                      and further pickings continue up to December. Average yield is 450-470
                      q/ha.

                      Arka Navneet : High yielding F1 hybrid with large (450g) purple

                      oblong fruits .Average yield is 650-750 q/ha.

                      Kashi Komal: Plant height is 90-100cm with green stem and leaves. Fruits

                      are light purple,long, soft textured, avg. length is 13 cm

                      diameter is 30 cm. The picking

                      starts in 65-70 days after transplanting. Average yield is 800 q/ha

                      Kashi Sandesh (VRBHR-1): Plant with green stem and purplish green

                      leaves. Fruits are purple, medium round, soft

                      textured average length is 12.4 cm diameter is

                      10.2 cm.The picking starts in 76 days after

                      transplanting. Average yield is 780 q/ha.

                      MHB-10 (Kalpataru)

                      MHB-10 has been developed by Mahyco Vegetable

                      Seeds Ltd.

                      Jalna. Plants are erect, bushy, compact and spiny. Fruits

                      are round

                      to slight oval, shining reddish purple with white

                      streaks (bicolour), green spiny calyx; weight of 60-70 g; first picking
                      starts on 70-75 days after transplanting; gives yield of 400-500
                      q/ha.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane active" id="benefits">
                    <ul>
                      <li>Brinjal may help to lower the risk of many heart
                        diseases such as heart attack and stroke by
                        apparently reducing the damage caused by free
                        radicals.</li>
                      <li>This bushy plant is a rich source of flavonoids,
                        alkaloids, and other bioactive compounds Like
                        arginine aspartic acids, etc.</li>
                      <li>Brinjal contains antioxidants that help protect
                        against cell damage and reduce the risk of
                        chronic diseases</li>
                      <li>Brinjal might have beneficial effects against
                        different types of cancer such as lung cancer and
                        gastric (related to the gut) cancer. The dietary
                        fibre present in brinjal might promote the
                        digestion of food. It may also eliminate the toxic
                        wastes from the body that eventually helps with
                        cancer of the stomach or colon.</li>
                      <li>Brinjal is composed of fat, vitamins, lots of water
                        and minerals that might help with better skin
                        tone and quality of skin, hair, and nail.</li>
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
    <div><img src="image/veg/veg.jpg" alt="image"  width="1600px" height="500px"></div>
    </section>

    <!--Listing-detail-->
    <section class="listing-detail">
      <div class="container">
        <div class="listing_detail_head row">
          <div class="col-md-9">
            <h2>Chilli</h2>
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
                    <p>Chilli is one of the most valuable crops grown in north eastern region.
                      Fruits are long or small with high pungency. In Meghalaya, it is used as a
                      principal ingredient of various curries and chutneys. It is also used for
                      vegetables, spices, condiments, sauces and pickles. Chillies are good
                      sources of vitamin A and vitamin C.</p>
                  </div>
                  <!-- Accessories -->
                  <div role="tabpanel" class="tab-pane" id="accessories">
                    <h4>Climate and soil</h4>
                    <p>Chilli is a plant of tropical and sub-tropical region. It grows well in warm and
                      humid climate and a temperature of 20-30 QC. As a rainfed crop, it is grown in
                      areas receiving an annual rainfall of7S-100cm.

                      A well-drained, well-aerated, fairly light fertile loam with a fair moisture
                      holding capacity is ideal. Chilli crop prefers a soil reaction ranging from pH of
                      6.0-7.0.</p>
                    <h4>Field Preparation</h4>
                    <p>The land is prepared by giving 5-6 ploughing, compost or FYM @ 150-200
                      q/ha should be spread and mixed well in the soil at least 15-20 days before
                      sowing. At the last ploughing BHC @ 8-10 kg/acre should be applied to the soil to
                      protect the crop from white ants and other soil pests.</p>
                    <h4>Raising of Seedling</h4>
                    <p>The seeds are sown in well prepared raised nursery bed. Nursery beds are
                      made near partially shaded areas. The nursery bed should be well pulverized and
                      mixed with FYM. The seeds are sown thinly in lines spaced 5cm apart, sand and
                      well decomposed compost are sprinkled over the seeds. Mulching with paddy
                      straw conserves moisture. The mulch is removed as soon as the seeds start
                      germinating. Heavy watering should be avoided in nursery bed.</p>
                    <h4>Transplanting</h4>
                    <p>The seedlings become ready for transplanting in the main field within 6-7
                      weeks of seed sowing in the nursery bed.</p>
                    <h4>Plant Protection</h4>
                    <p>Thrips (Scirtothrips dorsalis) - This small insect suck the sap from
                      the foliage and lacerate the leaf tissue, which results in curling of
                      leaves and flower fall down prematurely.

                      Spraying Dimethoate or Monocrotophos @lml/l of water at 15
                      days interval is recommended to control this pest.

                      Aphids (Aphis gossypi) - Aphids suck the sap from plants; they
                      generally attack the plants in winter. Imparting blackish colour to the
                      calyx and pods spoils the quality of the produce. Spraying the crop
                      with Dimethoate @ lml/l of water and spraying with castor oil or
                      paraffin controls the pests.

                      Damping off (Pythium aphanidermatum) - Damping off generally
                      occurs in nursery bed. The disease infected seedling at ground level
                      and plant fall over ground. The seedbed should be treated with
                      formalin before sowing of seeds and seed should be treated with
                      Ceresan or Agrosan GN @ 2-3g/kg of seeds before sowing.</p>
                    <h4>Harvesting and Yield</h4>
                    <p>Flowering takes place two months after transplanting and
                      it takes another month for green fruit. For vegetable purpose,
                      chillies are harvested while they are still green. For drying
                      chillies are harvested at full ripe stage.Green chilli yield:
                      75-100q/ha. Dry chilli yield: 20-25q/ha.</p>
                  </div>
                  <div role="tabpanel" class="tab-pane active" id="benefits">
                    <ul>
                      <li>Chemicals like flavonoids, phenols, and proanthocyanidins present
                        in green chillies protect the body from free radicals and stop the
                        oxidation process.</li>
                      <li>Capsaicin, the chemical abundantly present in green chillies, helps
                        reduce blood sugar levels. Capsaicin is also known to promote
                        insulin secretion, increase insulin sensitivity, which helps in
                        controlling blood glucose levels..</li>
                      <li>Green chillies are naturally rich in iron. Furthermore, green chillies
                        contain high amounts of Vitamin C, which play a crucial role in
                        promoting iron absorption.</li>
                      <li>The nutrient helps in the formation of collagen, which makes the hair
                        stronger and healthier.</li>
                      <li>This prevents breakage and split ends. Green chillies also contain
                        natural silicon that promotes a healthy scalp.</li>
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
    <div><img src="image/veg/veg.jpg" alt="image"  width="1600px" height="500px"></div>
    </section>

    <!--Listing-detail-->
    <section class="listing-detail">
    <div class=" container">
      <div class="listing_detail_head row">
        <div class="col-md-9">
          <h2>Onion</h2>
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
                <!-- onion-overview -->
                <div role="tabpanel" class="tab-pane active" id="introduction">
                  <p>Onion (Allium cepa L.) is
                    an important bulb crop and an
                    unavoidable part of vegetable
                    preparation. In India, onion crop
                    is under cultivation for the last
                    5000 years mainly in tropical
                    conditions. India ranks first in
                    area and second in production
                    after

                    China, but the productivity is much lower as compared to the leading
                    producers namely China, USA and the Netherlands etc. The major growing
                    state includes Maharashtra, Madhya Pradesh, Karnataka, Andhra Pradesh,
                    Bihar, Gujarat, Haryana, Rajasthan, Uttar Pradesh, Tamil Nadu and Odisha.
                    There are several factors like biotic and physiological factors which affect the
                    yield of onion adversely and reduce productivity. The productivity can be
                    increased by growing high yielding varieties and adopting modern
                    agro-techniques developed by different research institutes.

                    The important physiological disorders and biotic factors which act as
                    constraint in onion cultivation are described below with their
                    management practices.</p>
                </div>
                <!-- Accessories -->
                <div role="tabpanel" class="tab-pane" id="accessories">
                  <h3>Important Physiological Disorders<h3>
                      <h4>1. Poor seed germination</h4><br>
                      Seed germination of onion is, in general, poor and this problem is severe in
                      case of old seed stock. Seeds lost viability very soon in ordinary storage
                      condition. However, cold storage condition somewhat extends the seed
                      viability.
                      <h4>Management</h4>
                      <ul>
                        <li>Store the seeds in cold storage.</li>
                        <li>Use healthy and fresh seed.</li>
                        <li>Soak the seeds in water and sodium phosphate solution for 2-6 hours
                          followed by drying which is beneficial for vigour and viability of the
                          seeds.</li>
                      </ul>

                      <h4>2. Bolting</h4>

                      It is a serious disorder of onion. It refers to the emergence of seed stalk
                      prior to time of their formation and adversely affects the formation and
                      development of bulbs. Bolting is an undesirable character because it directly affects the bulb yield of onion but
                      good for the seed production. It makes the bulb light and fibrous and
                      these bulbs do not keep long in storage. Rabi onion (December to May) require mild temperature of 20-250C (relatively
                      higher temperature than what required (15-210C) for vegetative growth)
                      and long photoperiod for bulbing, and bulb development takes place in high temperature condition. On the other
                      hand, kharif onion (August to December) is produced in somewhat shorter
                      day length and moderate temperature condition.
                      <h4>Causes</h4>
                      <ul>
                        <li>Rabi onion starts to bolt at 20-250C temperature. Early transplanting
                          (August) and late transplanting (end of December-January) induce bolting
                          in kharif and rabi onion, respectively.</li>
                        <li>The restricted or poor vegetative growth also leads to bolting.</li>
                        <li>Low temperature (10-120C).</li>
                        <li>Extreme fluctuations in temperature.</li>
                        <li>Varietal difference- white cultivars are more sensitive to bolting.</li>
                        <li> Late transplanting of seedlings.</li>
                        <li>Transplanting of aged seedlings of above 10 weeks.</li>
                        <li>Poor supply of nitrogen in nursery and field.</li>
                      </ul>
                      <h4>Management</h4>
                      <ul>
                        <li> Adjust the time of transplanting in such a way that the crop may expose to
                          moderate temperature at bulbing. Maturity of rabi crop coincides with high
                          temperature compared to kharif crop.</li>
                        <li> Planting of kharif onion early in August and rabi onion late in December to
                          January produce less bolters.</li>
                        <li>Grow non-bolting cultivars like Early Grano, Texas Early Grano, etc.</li>
                        <li>Transplant healthy and 8 weeks old seedlings.</li>
                        <li>Supply recommended dose of nitrogen.</li>
                        <li>Cut the seed stalk (scape) at early stage.</li>
                      </ul>

                      <h4> 3. Splitting and doubling of bulbs</h4>
                      Splits may be caused by several factors like wider spacing,
                      over-fertilization, uneven watering, temperature fluctuations, and
                      planting too deep; but their development is also influenced by genetics, with some varieties just being more susceptible to splitting. In
                      addition, bigger plants are more likely to split. Even when plants are
                      grown closer together, doubling may still occur. Uneven watering is believed to influence double formation, especially
                      when the soil is left dry too long. Planting onions too deep can also encourage doubling, as can
                      fertilizing at a rate that produces large yields. Mechanical injury to plant
                      during hoeing and weeding initiates new growth and causes splitting
                      and doubling of bulbs.

                      <h4>Management</h4>
                      <ul>
                        <li> Plant onion at recommended spacing, avoid over-fertilization and
                          uneven irrigation.</li>
                        <li>Avoid mechanical injury during intercultural operations.</li>
                      </ul>

                      <h4> 4. Sprouting of bulbs</h4>
                      It is one of the most important disorders in the storage and causes a
                      huge loss to cultivators. It is found in both onion and garlic. However,
                      this malady is not of permanent nature. Sprouting in
                      white cultivars is reported more commonly than in pink or purple
                      cultivars. It is also associated with excessive soil moisture at maturity
                      and supply of nitrogen.

                      <h4>Management</h4>
                      <ul>
                        <li>Adjust sowing time in such a way that harvesting can be done in dry
                          period. Early harvested kharif onion and late harvested rabi onion do not keep well in the
                          storage.</li>
                        <li>Withhold irrigation as soon as bulbs reach to maturity.</li>
                        <li>Apply comparatively less quantity of nitrogenous fertilizers.</li>
                        <li>Grow purple or pink coloured cultivars.</li>
                        <li>Spray Chlorpropham or Isopropyl N-(3-Chlorophenyl) Carbamate (CIPC)
                          @ 2% at 75 days after transplanting.</li>
                      </ul>
                      <h4>5. Poor bulb storage</h4>
                      Onion is difficult to store for a long duration at room
                      temperature, especially in tropical and subtropical condition, due
                      to sprouting, bulb rot and shrinkage. The storage life of onion
                      depends
                      on various parameters like season, variety, bulb dormancy,
                      nutrient and irrigation management, pest and disease incidence,
                      pre-and post-harvest management practices and storage
                      environment.
                      Normally, light red onions varieties such as N-2-4-1, Bhima Kiran,
                      Bhima Shakti, Arka Niketan and Agrifound Light Red are having
                      more storage potential than dark red, white and yellow
                      varieties. Sprouting in onion is controlled by temperature. The
                      temperature between 10-25°C
                      increases sprouting. Rooting is influenced by relative humidity
                      (RH). More the relative humidity, more is rooting. In India, rabi
                      onion is harvested in summer (late April-may) and store in
                      ambient condition of high temperature and high humidity in this
                      condition, the bulbs sprout very easily besides being rotten due
                      to fungal and bacterial diseases. In case of kharif onion,
                      harvesting of bulbs is done in winter and consumed during winter
                      and summer months, hence the problem of storage is not as
                      acute as in case of rabi crop. However, bulk of onion is grown
                      during rabi season. So, proper storage is essential for their
                      extended use.

                      <h4>Management</h4>

                      <ul>
                        <li>Adjustment of planting time so that harvesting can be done in
                          dry period. Early harvested kharif onion and late harvested rabi
                          onion do not keep well in storage. Onions at the completion of
                          bulbing enter into a rest period when bulbs do not sprout even.</li>

                        <li>under favourable conditions and after completion of rest period,
                          they exhibit growth by a slow elongation of the innermost leaf initials
                          accompanied by a change in tissue colour. High humidity and
                          temperature condition aggravate the growth.</li>
                        <li>Irrigation should be stopped 15 days before harvesting.</li>
                        <li>Harvesting should be done at appropriate stage of maturity when the
                          crop neckfall while the leaves is still green. If the crops are leaf on
                          the ground until the tops are dead, the bulbs likely to develop roots.
                          Prematurely harvested thick-necked bulbs do not store well. On the
                          other hand, late harvesting leads to increase in respiration resulting
                          into susceptibility to diseases and excessive sprouting during storage.</li>

                      </ul>

                      <h4>Pest and disease management</h4>

                      Pest and disease management is crucial for obtaining higher
                      marketable bulb yield and good quality bulbs. Major pests and diseases
                      of onion, their symptoms and management practices are
                      given in Table 1. In addition, the following points need to be considered
                      for pest and disease management.
                      <ul>
                        <li>Initiate foliar sprays of pesticide from 30 days after transplanting or as
                          soon as pest/disease appears in the field.</li>
                        <li>Spray at 10-15 days interval depending upon the intensity of pest/
                          disease.</li>
                        <li>Always add spreader @ 0.5-1.0% to spray solution.</li>
                      </ul>
                </div>
                <div role="tabpanel" class="tab-pane active" id="benefits">
                  <ul>
                    <li>Onions are highly nutritious vegetables that may have several
                      benefits, including improved heart health, better blood sugar
                      regulation, and increased bone density.</li>
                    <li>Athletes in ancient Greece supposedly used onions to purify their
                      blood, while medieval and traditional doctors prescribed them to
                      help treat headaches, heart disease, and mouth sores.</li>
                    <li>It could inhibit the growth of several strains of bacteria,
                      including ,Helicobacter pylorl a type of bacteria associated with
                      stomach ulcers and certain digestive cancers.</li>
                    <li>Onions are rich in the prebiotics inulin and Fructooligosaccharides,
                      which may help increase the number of friendly bacteria in your gut
                      and improve immune function.</li>
                    <li>Onions are nutrient-packed vegetables that contain powerful
                      compounds that may help decrease your risk of heart disease and
                      certain cancers.</li>
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