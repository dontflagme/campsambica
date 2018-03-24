<!DOCTYPE html>
    <!---
    Author: Brian Saylor
    04/11/2017
    Shows users profile--->

        <html>

            <head>

                <title>Camp Sambica Sign up</title>
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta charset="utf-8">
                <meta name="description" content="">
                <meta name="author" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="/328/dating/styles/stylesheet.css" type="text/css" rel="stylesheet"/>
                <link rel="stylesheet" href="css/sortGroups.css" type="text/css" rel="stylesheet"/>
                

                <!-- bootstrap -->
                <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                      rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <script src="./js/sorttable.js"></script>

                <!--[if lt IE 9]>
                <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
                <link rel="shortcut icon" href="">

            </head>

            <body>

                <nav class="navbar navbar-default" id="nav">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <p>Camp Sambica</p>
                    </div>
                    <ul class="nav navbar-nav">
                        <li ><a href="./">Home</a></li>
                        <li><a href="./information_form">New Camper</a></li>
                        <li><a href="./activities">Edit Activities</a></li>
                        <li><a href="./displaymembers">View Members</a></li>
                        <li><a href="./logout">Logout</a></li>

                    </ul>
                </div>
                </nav>

                    

                    <div class="row">

                        <div class="col-md-12" id="wrapper">
                            
                            <a href="./displaymembers"><button type="button" class="btn btn-info pull-right">
                                <span class="glyphicon glyphicon-chevron-left"></span> Go Back
                            </button></a>
                            
                                <h1 class="text-left">Sorted Table</h1>
        
                            <!--Export Data-->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exportDataModal">
                              Export Data
                            </button>

                            
        
                            <div class="modal fade" id="exportDataModal" role="dialog">
                              <div class="modal-dialog">
        
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title text-center">Export Database Data</h4>
                                    </div>
                                    <div class="modal-body text-center">
                                        <p>Choose an export format
                                            <br />

                                            <a href="./exportExcel"><button type="button" class="btn btn-info">Excel Full</button></a>
                                            <a href="./exportExcelSchedule"><button type="button" class="btn btn-info">Excel Schedule Only</button></a>
                                            <a href="./exportTDTF"><button type="button" class="btn btn-info">Tab Text File</button></a>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <table class='table table-striped sortable'>
        
                                    <tr>
                                        <th>Campers</th>
                                        <th>Counselors</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                    </tr>
        
        
        
                                        <?php foreach (($members?:[]) as $member): ?>
                                        <tr>
                                                <td><?= ($member['fname']) ?> <?= ($member['lname']) ?></td>
                                                <td><?= ($member['counselor']) ?></td>
                                                <td><?= ($member['monday']) ?></td>
                                                <td><?= ($member['tuesday']) ?></td>
                                                <td><?= ($member['wednesday']) ?></td>
                                                <td><?= ($member['thursday']) ?></td>
                                                <td><?= ($member['friday']) ?></td>
                                         </tr>
                                        <?php endforeach; ?>
        
        
        
                            </table>
                        </div>

                    </div>

                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>

            </body>

        </html>
