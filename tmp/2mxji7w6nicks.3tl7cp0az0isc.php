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

                <!-- bootstrap -->
                <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                      rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <script src="./js/sorttable.js"></script>
                
                <link href="css/displayMembers.css" rel="stylesheet" media="screen">
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
                        <li class="active"><a href="./displaymembers">View Members</a></li>
                        <li><a href="./logout">Logout</a></li>

                    </ul>
                </div>
            </nav>

                <div class="row">
                    <div class="row">
                        
                        
                        <div id="tableWrapper">
                            
                            
                        <div class="container-fluid">
                             <div class="col-md-12">
                                <br>

                <div class="container-fluid">
                    <h1 class="text-left">All Members</h1>
                </div>
                    <div class="col-md-12">
                        <!-- <a href="./deletemembers"><input class="btn btn-info btn-sm pull-right" value="Delete Table"></a> -->
                        
                        <form action="./displaymembers" method="POST">
                            <input type="text" name="get_name" placeholder="Search...">
                            <input type="submit" value="Search"> 
                        </form>
                        <br>
                        
                        <!-- Delete database data button and modal -->
                        <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#deleteDataModal">
                          Delete Database Data
                        </button>

                        <div class="modal fade" id="deleteDataModal" role="dialog">
                          <div class="modal-dialog">

                          <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete Database Data</h4>
                              </div>
                            <div class="modal-body">
                              <p>WARNING!!!   WARNING!!!   WARNING!!!<br />
                                Continuing will delete all camper member data from the database.<br />
                                Are you sure you want to continue?<br />
                              </p>
                            </div>
                            <div class="modal-footer">
                              <a href="./deletemembers" class="btn btn-danger pull-left" role="button">Delete Data</a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                       
                        <a href="./sortGroups"><button type="button" class="btn btn-info pull-left">
                          Sort Groups
                        </button></a>
                        <!--<a href="./deleteWeek"><input class="btn btn-info pull-right" value="Delete Week"></a>-->
                    </div>
                    
                        <div class=col-md-12>
                            <table class='table table-striped sortable'>
                                    <thead>
                                        <th>Edit</th>
                                        <th>Name</th>
                                        <th>Counselor</th>
                                        <th>Activity One</th>
                                        <th>Activity Two</th>
                                        <th>Activity Three</th>
                                        <th>Activity Four</th>
                                        <th>Activity Five</th>
                                        <th>Activity Six</th>
                                        <th>Activity Seven</th>
                                        <th>Activity Eight</th>
                                        <th>Activity Nine</th>
                                        <th>Activity Ten</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach (($members?:[]) as $member): ?>
        
                                                <tr>
                                                    <td><a href="./display_search/<?= ($member['member_id']) ?>">
                                                        <span class="glyphicon glyphicon-pencil text-success"></span>
                                                    </a></td>
                                                    <td><?= ($member['fname']) ?> <?= ($member['lname']) ?></td>
                                                    <td><?= ($member['counselor']) ?></td>
                                                    <td><?= ($member['activityOne']) ?></td>
                                                    <td><?= ($member['activityTwo']) ?></td>
                                                    <td><?= ($member['activityThree']) ?></td>
                                                    <td><?= ($member['activityFour']) ?></td>
                                                    <td><?= ($member['activityFive']) ?></td>
                                                    <td><?= ($member['activitySix']) ?></td>
                                                    <td><?= ($member['activitySeven']) ?></td>
                                                    <td><?= ($member['activityEight']) ?></td>
                                                    <td><?= ($member['activityNine']) ?></td>
                                                    <td><?= ($member['activityTen']) ?></td>
                                                    <td><a href="./deletePerson/<?= ($member['member_id']) ?>">
                                                        <span class="glyphicon glyphicon-remove text-danger"></span>
                                                    </a></td>
                                                </tr>
        
                                            <?php endforeach; ?>
        
                                    </tbody>
                            </table>
                        </div>
                                                          </div>
                        </div>
                    </div>
                    </div><!--end of wrapper for table-->
                </div>

                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>

            </body>

        </html>
