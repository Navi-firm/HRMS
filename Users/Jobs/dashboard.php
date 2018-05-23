<?php

include '../includes/jobs.php';

?>

    <div class="intro-header"  style="background-color: #d6d6c2; background-repeat: no-repeat; background-size: 100% 100%;">
        <div class="container">
            <br>
            <div class="">
                <form id="quick_hired" role="form" action="" method="post">
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="job" name="job" placeholder="Job Title, Company">
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City, State">
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary" id="search_jobs" name="submit">Search Jobs</button>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <!-- /.container -->
    </div>
    <div class="main">
        <div class="intro-header"  style="background-color: #ffffff; background-repeat: no-repeat; background-size: 100% 100%; color: #000000;">
            <div class="container">
                <br>
                <div class="col-md-12">
                    <div class="col-md-8">
                        <h5>Showing jobs Listings</h5>
                        <hr />
                        <h5><b>Filter your Search</b></h5>
                        <div class="bs-example">
                            <div class="btn-group">
                                <p class="help-block">Sort by</p>
                                <button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown">Relevance <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Date</a></li>
                                    <li><a href="#">Relevance</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <p class="help-block">Date Posted</p>
                                <button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown"> Date Added <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Anytime</a></li>
                                    <li><a href="#">Last 24 Hours</a></li>
                                    <li><a href="#">Last 7 Days</a></li>
                                    <li><a href="#">Last 14 Days</a></li>
                                    <li><a href="#">Last 30 Days</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                         </div>
                        <br>
                        <div id="jobs_listing">
                            <?php
                            //Load table from
                            if(isset($_GET['page'])){ $page = $_GET['page']; } else {$page = 1;}

                            $results = mysql_query("SELECT job_id, job_title, category, work_type, status, SUBSTRING(details, 1, 150) AS details, location, position, DATE_FORMAT(deadline, '%b %Y') AS deadline, DATE_FORMAT(DATE(created), '%b %Y') AS posted, author FROM jobs WHERE status = 'Approved' ORDER BY created DESC LIMIT 0, 15;");
                            if(mysql_num_rows($results) != 0) {
                                While ($row = mysql_fetch_array($results)) { ?>
                                    <div class='card-top'>
                                        <a href='view_job.php?job=<?php echo $row['job_id']; ?>'><h3 class='serp-title'
                                                                                                     style='color: #003399;'><?php echo $row['job_title']; ?></h3>
                                            <h5 class='serp-subtitle' style='color: #009900;'>
                                                    <span class='serp-location'
                                                          itemprop='addressLocality'><?php echo $row['location']; ?></span>,
                                                <span class='serp-location' itemprop='addressRegion'>NH</span>
                                                </span>
                                            </h5></a>

                                        <p class='serp-snippet' itemprop='description'><?php echo $row['details']; ?> . ....</p>
                                    </div>
                                    <div class='card-bottom'>
                                        <p class='serp-timesource'><span class='serp-timestamp'></span>Posted on <?php echo $row['posted']?> ,
                                        </p>
                                    </div>
                                    <hr />

                                    <?php
                                }
                            }
                            ?>
                            <ul class="pagination pull-right">
                                <li class="active"><a href="jobs.php?page=1">&laquo;</a></li>
                                <?php

                                $count = mysql_query("SELECT COUNT(job_id) FROM jobs") or die(mysql_error());
                                $row = mysql_fetch_row($count);
                                $total_records = $row['0'];
                                $total_pages = ceil($total_records / 15);

                                for($i = 1; $i<=$total_pages; $i++){
                                    echo "<li><a href='dashboard.php?page=" . $i . "'><b>" . $i . "</b></a></li>";
                                };
                                ?>
                                <li><a href="javascript:;">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <?php
                        if(!logged_in()){
                            ?>
                            <h4>Sign Up</h4>
                            <p class="help-block">Never miss the latest Jobs</p>
                            <form method="post" action="">
                                <a href="../../register.php" class="btn btn-primary btn-block" name="submit_hired" id="submit_hired" name="submit">Sign Up</a>
                            </form>
                            <hr />
                            <h5></h5>
                            <?php
                        }
                        ?>
                        <?php
                        if(logged_in() === true){
                            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, pro_pic, first_name, middle_name, last_name, phone, linkedin, postal_code, county, country, address, postal_code, email, department, work_status, dob, marital_status, about, passport, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, position1, position2, company1, company2, location1, location2, duration1, duration2, referee1, referee2, contact1, contact2, duties1, duties2, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
                            $user = mysql_fetch_array($applicant);
                            ?>

                            <div class="panel-default panel ">
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name text-center">

                                        <br>
                                        <p><img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>"></p>
                                        <h3><?php echo $user['fullname']; ?> <p class="help-block">(<?php echo $user_data['username']; ?>)</p> </h3>
                                    </div>
                                    <div class="profile-usertitle-job text-center">
                                        <h4><?php echo $user_data['role']; ?> <?php echo $user['department']; ?></h4>
                                    </div>
                                </div>
                                <div class="profile-userbuttons text-center">
                                    <P class="help-block">Joined <?php echo $user['joined']; ?></P>
                                </div>
                                <hr />
                                <!-- END SIDEBAR BUTTONS -->
                                <!-- SIDEBAR MENU -->
                                <div class="profile-usermenu text-center">
                                    <ul class="nav">
                                        <li>
                                            <?php
                                            if($user_data['role'] == 'Employee'){ ?>
                                                <a href="../Employee/index.php">My Account</a>
                                            <?php }
                                            elseif($user_data['role'] == 'Applicant'){ ?>
                                                <a href="../User/index.php">My Account</a>
                                            <?php }
                                            elseif($user_data['role'] == 'HOD'){ ?>
                                                <a href="../HOD/index.php">My Account</a>
                                            <?php }
                                            elseif($user_data['role'] == 'admin'){ ?>
                                                <a href="../Admin/index.php">My Account</a>
                                            <?php }
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END MENU -->
                            </div>

                        <?php } ?>
                    </div>
                </div>
                <br>
            </div>
            <!-- /.container -->
        </div>
    </div>
<?php include '../includes/footer.php';