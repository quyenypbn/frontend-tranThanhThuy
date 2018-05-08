<!DOCTYPE html>
<html>
<head>
    <title>tab</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/tab.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                    <li role="presentation" class="active">
                      <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        <span class="text">Home</span>
                      </a>
                    </li>
                    <li role="presentation" class="next">
                      <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                        <span class="text">Profile</span>
                      </a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                       li>
                                        <div class="tab-conten-img">
                                            <img src="image/ex1.jpg" alt="">
                                        </div>
                                        <div class="tab-conten-title">
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            <ul>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i><span>20 Dec 2017</span></li>
                                                <li><i class="fa fa-comments" aria-hidden="true"></i><span> 0 Comments</span></li>
                                            </ul>
                                            
                                        </div>
                                    </li>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                        <p>2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>