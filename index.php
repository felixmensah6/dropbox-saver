<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/favicon.png" sizes="32x32" type="image/png">
    <title>Dropbox Saver - Unity Websoft Apps</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/unity.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="h66pshir85uztko"></script>
</head>

<body>
    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Header -->
            <nav class="navbar sidebar-header">
                <a class="navbar-brand" href="index.html">
                    <img src="images/unity.svg" width="18" height="18" class="d-inline-block align-top" alt="">
                    Unity Websoft
                </a>
            </nav>

            <!-- Sidebar Content -->
            <div class="sidebar-content optiscroll">

                <!-- Sidebar Nav -->
                <ul class="sidebar-nav">
                    <li class="sidebar-nav-group">Apps</li>
                    <li><a href="index.html" class="active"><i class="icon-dropbox"></i> Dropbox Saver</a></li>
                </ul>

            </div>

        </div>

        <!-- Main -->
        <div class="main">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-light">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown d-none d-sm-block">
                        <a class="nav-link dropdown-toggle caret-none" href="#" data-toggle="dropdown">
                            <i class="icon-plus"></i> Add
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <h6 class="dropdown-header text-body">Add New Features</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Products</a>
                            <a class="dropdown-item" href="#">Services</a>
                            <a class="dropdown-item" href="#">Departments</a>
                            <a class="dropdown-item" href="#">Discounts</a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-sm-block">
                        <a class="nav-link" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Notifications">
                            <i class="icon-bell"></i>
                            <span class="badge badge-danger">7</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-user dropdown-toggle caret-none" href="#" data-toggle="dropdown">
                            <img src="images/user.svg" class="rounded-circle" width="30" height="30" alt="User">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <span class="dropdown-item-text">
                                John W. Smith
                                <span class="d-block text-muted">smith.john@gmail.com</span>
                            </span>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="users-profile.html">Profile</a>
                            <a class="dropdown-item d-flex align-items-center" href="widgets-inbox.html">
                                Inbox
                                <span class="badge badge-danger ml-auto">12</span>
                            </a>
                            <a class="dropdown-item" href="#">Notifications</a>
                            <a class="dropdown-item" href="#">Help/Support</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="users-login.html">Logout</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler" type="button">
                    <i class="icon-bars"></i>
                </button>
            </nav>

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-title">
                    <h5>Dropbox Saver</h5>
                </div>
                <div class="page-header-link">
                    <a href="#" class="link" data-toggle="tooltip" data-placement="bottom" title="Help">
                        <i class="icon-question-circle"></i>
                    </a>
                </div>
            </div>

            <!-- Content -->
            <div class="content boxed">
                <!-- Panel -->
                <div class="panel panel-default bordered column-item">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h6>Form Grid</h6>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>File URL</label>
                                    <input type="url" class="form-control url-input" placeholder="e.g. http://example.com/party_image.jpg" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Filename (optional)</label>
                                    <input type="text" class="form-control filename-input" placeholder="e.g. new_name.jpg">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <button type="button" class="btn btn-primary save-btn">
                                <i class="icon-dropbox mr-1"></i>
                                Save to Dropbox
                            </button>
                            <button type="button" class="btn btn-default cancel-btn">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer">
                <div class="row justify-content-md-center">
                    <div class="col-sm-8">
                        Copyright © Unity Websoft
                    </div>
                    <div class="col-sm-4 text-sm-right">
                        Version: 1.0.0
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/unity.core.min.js"></script>
    <script src="js/unity.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('.save-btn').on('click', function(event) {

                var options = {
                        /*files: [
                            // You can specify up to 100 files.
                            {'url': '...', 'filename': '...'},
                            {'url': '...', 'filename': '...'},
                            // ...
                        ],*/

                        // Success is called once all files have been successfully added to the user's
                        // Dropbox, although they may not have synced to the user's devices yet.
                        success: function () {
                            // Indicate to the user that the files have been saved.
                            console.log("Success! Files saved to your Dropbox.");
                        },

                        // Progress is called periodically to update the application on the progress
                        // of the user's downloads. The value passed to this callback is a float
                        // between 0 and 1. The progress callback is guaranteed to be called at least
                        // once with the value 1.
                        progress: function (progress) {
                            console.log('Progress: ' + progress);
                        },

                        // Cancel is called if the user presses the Cancel button or closes the Saver.
                        cancel: function () {
                            console.log('Process cancelled.');
                        },

                        // Error is called in the event of an unexpected response from the server
                        // hosting the files, such as not being able to find a file. This callback is
                        // also called if there is an error on Dropbox or if the user is over quota.
                        error: function (errorMessage) {
                            console.log('Error: ' + errorMessage);
                        }
                    },
                    url = $('.url-input').val(),
                    filename = $('.filename-input').val();

                if(url == '') {
                    alert('You must provide an address to a file.')
                }else{
                    Dropbox.save(url, filename, options);
                }
            });
        });
    </script>
</body>

</html>
