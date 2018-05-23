<?php
include '../includes/user_header.php';
?>
<div class="main">

    <div class="container">

        <div class="row">

            <div class="col-md-3">

                <div class="list-group">
                    <a class="list-group-item active" href="dashboard.php">
                        <span class="icon-tasks"></span> Jobs
                    </a>
                    <p id="bids" class="list-group-item">
                        <span class="badge">4</span>
                        <span class="icon-file"></span> Applications
                    </p>
                </div>

                <div class="list-group">
                    <a class="list-group-item" href="settings.php">
                        <span class="icon-cogs"></span> Settings
                    </a>
                </div>

            </div>

            <div class="col-md-9">

                <div class="widget stacked">

                    <div class="widget-header">
                        <h3>Dashboard</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                            <div class="col-sm-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <span class="icon-tasks"></span> Job Openings
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <h2 class="text-center"><?php echo open_job();?></h2>
                                    </div>
                                </div>
                            </div>

                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="icon-tags"></span> Jobs Applied
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <h2 class="text-center">0</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="icon-briefcase"></span> Jobs by me
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <h2 class="text-center"><sup></sup>0</h2>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab">My Applications</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">My Interviews</a></li>
                            </ul>

                            <br>

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <a class="btn btn-primary" href="apply_job.php">Apply for a Job</a>
                                    <hr />
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                            &#32;
                                            <tr>&#32;
                                                <th class="title">Job Name</th>
                                                &#32;
                                                <th class="bid_end_date">Job Status</th>
                                                &#32;
                                                <th class="budget">Category</th>
                                                &#32;
                                                <th class="bids">Deadline</th>
                                                &#32;
                                            </tr>
                                            &#32;
                                            </thead>
                                            &#32;
                                            <tbody>
                                            &#32;
                                            <tr class="odd">
                                                &#32;
                                                <td class="title">
                                                    <a href="edit_application.php?job_name=">
                                                        Develop a Warehouse System and Asset system
                                                    </a>
                                                </td>
                                                &#32;
                                                <td class="bid_end_date">
                                                    Closed
                                                </td>
                                                &#32;
                                                <td class="budget">
                                                    KSh 50,000 to 100,000
                                                </td>
                                                &#32;
                                                <td class="bids">
                                                    <span class="badge">20</span>
                                                </td>
                                                &#32;
                                            </tr>
                                            &#32;
                                            <tr class="even">
                                                &#32;
                                                <td class="title">
                                                    <a href=/jobs/250/build-a-website/>
                                                        Build a website
                                                    </a>
                                                </td>
                                                &#32;
                                                <td class="bid_end_date">
                                                    Closed
                                                </td>
                                                &#32;
                                                <td class="budget">
                                                    KSh 3,500 to 15,000
                                                </td>
                                                &#32;
                                                <td class="bids">
                                                    <span class="badge">17</span>
                                                </td>
                                                &#32;
                                            </tr>
                                            &#32;
                                            <tr class="odd">
                                                &#32;
                                                <td class="title">
                                                    <a href=/jobs/248/build-a-website/>
                                                        Build a website
                                                    </a>
                                                </td>
                                                &#32;
                                                <td class="bid_end_date">
                                                    Closed
                                                </td>&#32;<td class="budget">KSh 15,000 to 50,000</td>&#32;<td class="bids"><span class="badge">17</span></td>&#32;</tr>&#32;<tr class="even">&#32;<td class="title"><a href=/jobs/241/exam-system/>Exam System</a></td>&#32;<td class="bid_end_date">Closed</td>&#32;<td class="budget">KSh 100,000 to 250,000</td>&#32;<td class="bids"><span class="badge">13</span></td>&#32;</tr>&#32;</tbody>&#32;<tfoot></tfoot></table><ul class="pagination"><li class="cardinality">4 jobs</li></ul></div>
                                </div>
                            </div>
                        </div>

                    </div>

        </div>

    </div>

</div>

</div>


 <?php include '../includes/footer.php';