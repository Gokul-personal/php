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
    <title>Farm Management</title>
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
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/logo.png">
  <link rel="shortcut icon" href="assets/images/favicon-icon/logo.png">
    
</head>

<body>
    <!--Header-->
    <?php include('includes/header.php'); ?>
    <!-- /Header -->
    <section id="listing_img_slider">
    <div><img src="image/rice.jpg" alt="image"  width="1600px" height="500px"></div>
     
     

    </section>

    <!--Listing-detail-->
    <section class="listing-detail">
        <div class="container">
            <div class="listing_detail_head row">
                <div class="col-md-9">
                    <h2>Rice</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="listing_more_info">
                        <div class="listing_detail_wrap">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs gray-bg" role="tablist">
                                <li role="presentation" class="active"><a href="#introduction" aria-controls="vehicle-overview" role="tab" data-toggle="tab">Introduction</a></li>
                                <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Important</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- intro-overview -->
                                <div role="tabpanel" class="tab-pane active" id="introduction">
                                    <ul>
                                    <div><img  class="card" src="image/Introducation.jpg" alt="image"  width="650px" height="375px"></div>
                                
                                <style>
                                    .card {
                                         box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                                         margin-left:40px;
                                       }
                                    
                                </style>
                                          <br>
                                          <br>
                                        <li>Rice as a global staple food.It is the
                                            primary source of energy for over half
                                            of the world's people. Depending on the
                                            strain of rice, it can contain decent
                                            amounts of fibre, protein, vitamin B,
                                            iron and manganese.its also known as
                                            called rice plant</li>
                                        <li>Wet rice cultivation is the most
                                            prevalent method. small, level, flooded
                                            field used to cultivation products.</li>
                                        <li>Rice is mainly a self pollinated crop. For
                                            pure seed production, the seed fields
                                            must be isolated at least by 3 meters
                                            from rice fields of other varieties.</li>
                                   
                                        <li>The plant has many different variations, 
                                            but is generally a short living plant, 
                                            with an average life span of 3-7 months, 
                                            depending on the climate and the variety. 
                                            It is not a water plant but substantial amounts
                                             of water are required for the planting. Cultivated 
                                             species of rice are considered to be semi-aquatic annuals.
                                            </li>

                                         <li>
                                         In the previous farming field is crop was rice,
                                          then the nursery plot should be flooded with water
                                           to trigger germination of buried seeds and such
                                            germinated seedlings can be destroyed by ploughing 
                                            the field after one week. Fertile soil with adequate
                                             drainage is essential for good nursery.

                                         </li>

                                         <li>
                                         Crop Harvesting Criteria. Harvesting. 
                                         Harvesting is the process of removal of entire
                                          plants or economic parts after maturity. The 
                                          economic product may be grain, seed leaf, root
                                           or entire plant. The remaining portion of the 
                                           stem that is left on the field after harvest is
                                            known as stubble.

                                         </li>

                                         <li>
                                         In India, there are three seasons for
                                          growing rice: fall, winter and summer.
                                           All three seasons are numbered in conjunction
                                            with the harvest season of the crop. Autumn 
                                            rice is referred to as rice pre-kharif. Kharif
                                             crops are the crops grown during the rainy period.

                                         </li>
                                   
                                        </ul>
                                </div>
                                <!-- Accessories -->
                                <div role="tabpanel" class="tab-pane" id="accessories">
                                    <h4>Stages of Paddy Field:</h4>
                                    <p>
                                        <bold>1. Ploughing:</bold> preparing the soil, with the help of modern or traditional equipments.
                                    </p>
                                    <p>
                                        <bold>2. Sowing:</bold> Planting or spreading the seeds on the surface..
                                    </p>
                                    <p>
                                        <bold>3. Irrigation:</bold> Irrigation is the process of applying water to the crops artificially to fulfil their water requirements.
                                    </p>
                                    <p>
                                        <bold>4. Weeding:</bold> Removing the unwanted plants.
                                    </p>
                                    <p>
                                        <bold>5. Manuring:</bold>Adding nutrients or fertilizers to the crop.
                                    </p>
                                    <p>
                                        <bold>6. Harvesting:</bold>Cutting the ripped crop from the farm manually with machines.
                                    </p>

                                    <h4>Ploughing stage:</h4>
                                    <p>
                                    Ploughing is used to break down soil to size of grains. This is being used since ancient times for tilling the soil, adding fertilizers to the crop, removing the weeds, scraping of soil, etc. This implement is made of wood and is drawn by a pair of bulls or other animals. The process of loosening the soil for cultivation is called ploughing. The primary purpose of ploughing is to turn over the upper layer of the soil, bringing fresh nutrients to the surface.
                                       <table>
                                        <tr>
                                            <th>Varieties</th>
                                            <th>Duration (Days)</th>
                                            <th>Time of Sowing</th>
                                        </tr>
                                        <tr>
                                            <td>Ponmani</td>
                                            <td>160 to 165</td>
                                            <td>1st to 30th August</td>
                                        </tr>
                                       </table>
                                    </p>

                                    <p> Co 43, IR20, ADT 38 ADT 39, Ponni, Improved White Ponni Rice needs high temperature, high humidity and rainfall. It grows best in alluvial clayey soil.
                                                On receipt of showers during the months of May - July repeated ploughing should be carried out so as to conserve the moisture, destroy the weeds and break the clods.

                                                Flood the field 1 or 2 days before ploughing and allow water to soak in. Keep the surface of the field covered with water.

                                                Keep water to a depth of 2.5cm at the time of puddling.

                                                More care should be taken to level the field to zero level.
                                                </p>
                                              <div><img  class="card" src="image/Ploughing.jpg" alt="image"  width="650px" height="285px"></div>
                                                            
                                                            <style>
                                                                .card {
                                                                    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                                                                    margin-left:40px;
                                                                    border:5px solid #eee;
                                                                }

                                                            </style>

                                    <h4>Sowing</h4>
                                    <p>Follow a seed rate of 60 kg / ha
                                        Pre-germinate the seeds
                                        Sow the sprouted seeds by drum seeder or broadcast uniformly with thin film of water.
                                        Dual cropping of rice-green manure is economic for nutrient budget and efficient for grain production. For this method use ‘TNAU Rice-Green manure seeder’.
                                        </p>

                                        <p>
                                        <h5>After sowing process:</h5>
                                                        Thinning and gap filling should be done 14 - 21 days after sowing, taking advantage of the immediate rain.
                                                        If dual cropped with green manure, incorporate the green manure when grown to 40cm height or at 30 days after sowing, whichever is earlier, using Cono-weeder.

                                                        Green manure incorporated fields may be operated again with rotary weeder a week later in order to aerate the soil and to exploit organic acids formed if any.


                                        </p>

                                        <div><img  class="card" src="image/sowing.jpg" alt="image"  width="650px" height="285px"></div>
                                                            
                                                            <style>
                                                                .card {
                                                                    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                                                                    margin-left:40px;
                                                                    border:5px solid #eee;
                                                                }

                                                            </style>


                                    <h4>Manuring</h4>
                                    <p>Organic fertilizers are fertilizer that are naturally produced. Fertilizers are materials that can be added to soil or plants, in order to provide nutrients and sustain growth. Typical organic fertilizers include all animal waste including meat processing waste, plus plant based fertilizers. Inorganic "organic fertilizers" include minerals and ash. The main organic fertilizers are animal wastes, plant wastes from agriculture, and treated sewage sludge.
                                    Minerals can be mined from fossil products of animal activity, such as greensand (anaerobic marine deposits), some limestones (fossil shell deposits), and some rock phosphates (fossil guano). Adding limestone or “liming” a soil is a way to raise pH. By raising the pH of a soil, microbial growth can be stimulated, which in turn increases biological processes, enabling nutrients to flow more freely through the soil. When nutrients flow freely they are more accessible to plants and therefore can increase plant health and mass. If the soil is already pH balanced.
                                        </p>
                                    
                                    <h4>Animal wastes:</h4>
                                    <p>Manures are derived from milk-producing dairy animals,egg producing, and animals raised for meat and hide production, or sport and recreation. Fresh manure, right from the stall, can cause issues because it can be too high in ammonia, or contain bacteria from the animal’s gut.  This can have an adverse effect on plants as the ammonia can burn the roots and microbes from the animal’s gut can harm the microorganisms in the soil, killing them There is also a risk of introducing weeds, as seeds can pass through the gut of an animal relatively unharm.

                                                Animals wastes like urine & sewages wastage, is a fertilizer: Urea in urine is a nitrogen compound, and urine also contains phosphorus and potassium. Human urine typically has about 3 times as much nitrogen as potassium, and more than 20 times as much nitrogen as phosphorus. The amount of potassium in urine is variable, and depends on the amount of potassium in the person's diet. While animal urine, as from cattle and pigs, is widely used on farmer's fields, human urine other than as part of sewage sludge is not currently allowed to be used in any commercial agricultural operations. However, there are ongoing studies that have shown that aging urine in closed containers for 12–16 months eliminates 99% of harmful bacteria, due to increasing urea content and therefore ph.


                                                Paddy irrigation is a crucial aspect of rice cultivation, and farmers employ various methods to ensure optimal conditions for the growth of rice plants. The two main types of paddy irrigation are flooding and controlled flooding, each with its unique advantages and considerations.
                                                Flooding is a traditional and widely used method in paddy cultivation. In this approach, fields are completely submerged in water for a certain duration, providing a saturated environment for rice plants to thrive. This method is particularly well-suited for lowland rice varieties that are adapted to submerged conditions. 

                                                However, flooding also poses some challenges. It requires a significant amount of water, and in areas with water scarcity, this can be a limiting factor. Additionally, the continuous submersion of fields can lead to waterlogged soil, affecting soil structure and nutrient availability over time. Efficient water management practices are crucial to address these challenges and ensure sustainable paddy cultivation.
                                                Controlled flooding is another approach to paddy irrigation that addresses some of the limitations of continuous flooding. In this method, water levels are carefully managed to create alternating wet and dry phases in the paddy field. Farmers regulate the water level based on the growth stage of the rice plants. This method combines the benefits of flooding with controlled water management.
                                                During first one week just wet the soil by thin film of water.
                                                Depth of irrigation may be increased to 2.5cm progressively along the crop age.
                                                Provide adequate drainage facilities to drain excess water or strictly follow irrigation schedule of one day after disappearance of ponded water. Last irrigation may be 15 days ahead of harvest.
                                                </p>

                                                <div><img  class="card" src="image/Manuring.jpg" alt="image"  width="650px" height="285px"></div>
                                                            
                                                            <style>
                                                                .card {
                                                                    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                                                                    margin-left:40px;
                                                                    border:5px solid #eee;
                                                                }

                                                            </style>
                                    <h4>Weeding process:</h4>
                                    <p>Weeding plays a crucial role in the cultivation of paddy fields, where the battle for nutrients and sunlight between rice plants
                                        and weeds is intense. Manual weeding is a common practice in many regions, involving the removal of unwanted plants by
                                        hand or using simple tools. The submerged conditions of flooded paddy fields make it challenging for weeds to establish deep
                                        roots, but they can still thrive near the water's surface. Farmers typically engage in periodic weeding to ensure the
                                        unhindered growth of rice plants. While manual labor is a traditional and effective method, advancements in technology have
                                        also introduced mechanical and herbicidal weed control approaches. These methods aim to reduce labor intensity and
                                        increase efficiency in large-scale paddy cultivation. Weeding is not only essential for maximizing rice yields but also
                                        contributes to the overall health of the paddy ecosystem by preventing competition for resources and minimizing the risk of
                                        pests and diseases.</p>
                                        <div><img  class="card" src="image/Weeding.jpg" alt="image"  width="650px" height="285px"></div>
                                                            
                                                            <style>
                                                                .card {
                                                                    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                                                                    margin-left:40px;
                                                                    border:5px solid #eee;
                                                                }

                                                            </style>
                                    <h4>Harvesting</h4>
                                    <p>The harvesting process in a paddy field involves several key steps to ensure the successful collection of mature rice crops.
                                        When the rice plants have reached full maturity, farmers typically begin by draining the paddy field to prepare for harvest.
                                        This is followed by the use of specialized harvesting machinery, such as combine harvesters or rice reapers, which cut the
                                        rice plants at their base. The machinery then separates the grains from the remaining stalks and husks through a threshing
                                        process. In traditional methods, manual harvesting tools like sickles may be employed for cutting the rice plants. Once the
                                        grains are separated, the next step involves drying them, either in the field or in designated drying areas, to achieve the
                                        appropriate moisture content for storage. After drying, the rice is often further processed to remove remaining husks and
                                        bran layers. The harvested rice is then ready for storage, milling, or direct consumption, contributing to the essential food
                                        supply in regions where paddy cultivation is prevalent. Efficient and timely harvesting is crucial to maximize yield and
                                        maintain the quality of the rice crop. At fully mature stage, harvest the male parent first and remove from the field and
                                        then harvest the hybrid seed in female parent.</p>

                                        <div><img  class="card" src="image/Harvesting.jpg" alt="image"  width="650px" height="285px"></div>
                                                            
                                                            <style>
                                                                .card {
                                                                    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
                                                                    margin-left:40px;
                                                                    border:5px solid #eee;
                                                                }

                                                            </style>
                                </div>
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