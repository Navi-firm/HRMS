<?php

include "../../Includes/Core/Database/connection.php";

if($_POST) {
    $job_desc = $_POST['title_company'];
    $loc = $_POST['location'];

    if(empty($job_desc) && empty($loc)) {
        $results = mysql_query("SELECT job_id, job_title, category, work_type, status, location, SUBSTRING(details, 1, 150) AS details, position, DATE_FORMAT(deadline, '%b %Y') AS deadline, DATE_FORMAT(DATE(created), '%b %Y') AS posted, author FROM jobs ORDER BY created DESC LIMIT 0, 10;");
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
    }
    //SEARCH FROM BOTH FIELDS
    elseif(!empty($job_desc) && !empty($loc)) {

        $results = mysql_query("SELECT job_id, job_title, category, work_type, status, location, SUBSTRING(details, 1, 150) AS details, position, DATE_FORMAT(deadline, '%b %Y') AS deadline, DATE_FORMAT(DATE(created), '%b %Y') AS posted, author FROM jobs WHERE job_title = '". $job_desc . "' AND location = '". $loc . "' ORDER BY created DESC LIMIT 0, 10;");
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
    }
    //SEARCH JOB TITLE OR COMPANY ONLY
    elseif (!empty($job_desc) && empty($loc)) {
        $results = mysql_query("SELECT job_id, job_title, category, work_type, status, location,SUBSTRING(details, 1, 150) AS details, position, DATE_FORMAT(deadline, '%b %Y') AS deadline, DATE_FORMAT(DATE(created), '%b %Y') AS posted, author FROM jobs WHERE job_title = '". $job_desc . "' ORDER BY created DESC LIMIT 0, 10;");
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
    }
    //SEARCH LOCATION ONLY
    elseif(empty($job_desc) && !empty($loc)) {
        $results = mysql_query("SELECT job_id, job_title, category, work_type, status, location,SUBSTRING(details, 1, 150) AS details, position, DATE_FORMAT(deadline, '%b %Y') AS deadline, DATE_FORMAT(DATE(created), '%b %Y') AS posted, author FROM jobs WHERE location = '". $loc . "' ORDER BY created DESC LIMIT 0, 10;");
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
    } else { ?>

        <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
            <strong>Oh Snap! </strong>No Records could be found</div>
        <?php
    }
}
?>