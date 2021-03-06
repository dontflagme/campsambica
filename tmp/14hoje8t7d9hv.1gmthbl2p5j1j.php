<!DOCTYPE html>

    <!---
    Author: Brian Saylor
    10/03/2017
    Landing page of Camp Sambica Sign up--->
    <html>

        <head>

            <title>Camp Sambica Sign up</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
            <link href="styles/stylesheet.css" rel="stylesheet" type="text/css">
            <script src="./js/sorttable.js"></script>

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
                        <li class="active"><a href="./activities">Edit Activities</a></li>
                        <li><a href="./displaymembers">View Members</a></li>
                        <li><a href="./logout">Logout</a></li>

                    </ul>
                </div>
            </nav>

            <div class="container panel panel-default">
                <div class="row">
                        <center><h1>Activities</h1></center>

                        <p><br></p>

                        <form action="./activityCreate" method="post" class="form-horizontal">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="activity">Activity Name</label>
                                    <input class="form-control" type="text" name="activity" id="activity" placeholder="Activity Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="camper_limit">Camper Limit</label>
                                    <input class="form-control" type="text" name="camper_limit" id="camper_limit" placeholder="Camper Limit" required>
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-info btn-sm" type="submit" value="Submit">
                                </div>
                            </div>
                        </form>

                        <p><br></p>

                <div class="col-md-12">
                    <table class="table table-striped sortable">

                              <tr>
                                <th>Activity ID</th>
                                <th>Activity</th>
                                <th>Camper Limit</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Disable</th>
                              </tr>
                        <?php foreach (($activeActivities?:[]) as $activeActivity): ?>
                            <tr>
                              <td><?= ($activeActivity['activity_id']) ?></td>
                              <td><?= ($activeActivity['activity']) ?></etd>
                              <td><?= ($activeActivity['camper_limit']) ?></td>
                              <td>
                                <a href="#editActivity" role="button" data-toggle="modal" data-target=".viewEvent<?= ($activeActivity['activity_id']) ?>" >
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <!-- Start of edit module-->

                                    <div class="modal fade viewEvent<?= ($activeActivity['activity_id']) ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content" id="modalcontent">

                                                <!-- inner modal -->
                                                <form action="./edit/<?= ($activeActivity['activity_id']) ?>" method="post" class="form-horizontal">

                                                    <div class="col-md-8">

                                                        <div class="form-group">
                                                            <label for="activity">Activity Name</label>
                                                            <input class="form-control" type="text" name="activity" id="activity" value="<?= ($activeActivity['activity']) ?>" placeholder="Activity Name" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="camper_limit">Camper Limit</label>
                                                            <input class="form-control" type="text" name="camper_limit" id="camper_limit" value="<?= ($activeActivity['camper_limit']) ?>" placeholder="Camper Limit" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <input class="btn btn-info btn-sm" type="submit" value="Submit">
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                    <!-- End of edit module-->
                              </td>
                              <td>
                                <a href="./delete/<?= ($activeActivity['activity_id']) ?>">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </a>
                              </td>
                              <td>
                                <a href="./disable/<?= ($activeActivity['activity_id']) ?>">
                                    <span class="glyphicon glyphicon-eye-close"></span>
                                </a>
                              </td>
                            </tr>
                        <?php endforeach; ?>


                    </table>
                </div>

                <p><br></p>
                <center><h1>Unavailable Activities</h1></center>
                <p><br></p>

                <div class="col-md-12">
                    <table class="table table-striped sortable">

                              <tr>
                                <th>Activity ID</th>
                                <th>Activity</th>
                                <th>Camper Limit</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Activate</th>
                              </tr>
                        <?php foreach (($disabledActivities?:[]) as $disabledActivity): ?>
                            <tr>
                              <td><?= ($disabledActivity['activity_id']) ?></td>
                              <td><?= ($disabledActivity['activity']) ?></etd>
                              <td><?= ($disabledActivity['camper_limit']) ?></td>
                              <td>
                                <a href="#editActivity" role="button" data-toggle="modal" data-target=".viewEvent<?= ($disabledActivity['activity_id']) ?>" >
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <!-- Start of edit module-->

                                    <div class="modal fade viewEvent<?= ($disabledActivity['activity_id']) ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content" id="modalcontent">

                                                <!-- inner modal -->
                                                <form action="./edit/<?= ($disabledActivity['activity_id']) ?>" method="post" class="form-horizontal">

                                                    <div class="col-md-8">

                                                        <div class="form-group">
                                                            <label for="activity">Activity Name</label>
                                                            <input class="form-control" type="text" name="activity" id="activity" value="<?= ($disabledActivity['activity']) ?>" placeholder="Activity Name" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="camper_limit">Camper Limit</label>
                                                            <input class="form-control" type="text" name="camper_limit" id="camper_limit" value="<?= ($disabledActivity['camper_limit']) ?>" placeholder="Camper Limit" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <input class="btn btn-info btn-sm" type="submit" value="Submit">
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                    <!-- End of edit module-->
                              </td>
                              <td>
                                <a href="./delete/<?= ($disabledActivity['activity_id']) ?>">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </a>
                              </td>
                              <td>
                                <a href="./activate/<?= ($disabledActivity['activity_id']) ?>">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </a>
                              </td>
                            </tr>
                        <?php endforeach; ?>


                    </table>
                </div>

            </div>


            </div>


            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>

        </body>

    </html>