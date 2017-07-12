<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->-->
<!--    <meta name="description" content="">-->
<!--    <meta name="author" content="">-->
<!--    <link rel="icon" href="../../favicon.ico">-->
<!---->
<!--    <title>Navbar Template for Bootstrap</title>-->
<!---->
<!--    <!-- Bootstrap core CSS -->-->
<!--    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">-->
<!---->
<!--    <!-- Custom styles for this template -->-->
<!--    <link href="../assets/css/custom.css" rel="stylesheet">-->
<!---->
<!--</head>-->
<!---->
<!---->
<!--<body>-->
<!---->
<!--<!-- NAVIGATION -->-->
<!--<div class="container">-->
<!--    <nav class="navbar navbar-default">-->
<!--        <div class="container-fluid">-->
<!--            <div class="navbar-header">-->
<!--                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
<!--                    <span class="sr-only">Toggle navigation</span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                </button>-->
<!--                <a class="navbar-brand" href="#">W2</a>-->
<!--            </div>-->
<!--            <div id="navbar" class="navbar-collapse collapse">-->
<!--                <ul class="nav navbar-nav">-->
<!--                    <li class="active"><a href="..">Home</a></li>-->
<!--                    <li><a href="../views/about.php">About</a></li>-->
<!--                    <li><a href="#" data-toggle="modal" data-target="#contactModal">Contact</a></li>-->
<!--                    <li class="dropdown">-->
<!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Navigate<span class="caret"></span></a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li><a href="#">Page One</a></li>-->
<!--                            <li><a href="#">Page Two</a></li>-->
<!--                            <li><a href="#">Page Three</a></li>-->
<!--                            <li role="separator" class="divider"></li>-->
<!--                            <li class="dropdown-header">Browse</li>-->
<!--                            <li><a href="#">A to M</a></li>-->
<!--                            <li><a href="#">N to Z</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div><!--/.nav-collapse -->-->
<!--        </div><!--/.container-fluid -->-->
<!--    </nav>-->
<!--</div> <!-- /container -->-->
<!---->
<!--<!--  NAVIGATION MODAL -->-->
<!--<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h5 class="modal-title" id="contactModalLabel">Contact Information</h5>-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                Contact information provided here.-->
<!--                <ul>-->
<!--                    <li>#</li>-->
<!--                    <li>@</li>-->
<!--                    <li>?</li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- CONTENT -->
<div id="aboutCarousel" class="carousel slide" data-ride="carousel">

    <a class="carousel-control-prev" href="#aboutCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">&larr;</span>
        <span class="sr-only">Previous</span>
    </a>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item item active">
            <img class="d-block img-fluid" src="../assets/images/fair.jpg" alt="First slide">
        </div>
        <div class="carousel-item item">
            <img class="d-block img-fluid" src="../assets/images/carnival.jpg" alt="Second slide">
        </div>
        <div class="carousel-item item">
            <img class="d-block img-fluid" src="../assets/images/pier.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-next" href="#aboutCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true">&rarr;</span>
        <span class="sr-only">Next</span>
    </a>
</div>

<button type="button" class="btn btn-secondary" data-toggle="popover" data-placement="bottom" data-content="Photos of carnivals and fairs.">
    info
</button>

<!--<!-- Bootstrap core JavaScript-->
<!--================================================== -->-->
<!--<!-- Placed at the end of the document so the pages load faster -->-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<!--<script src="../assets/js/bootstrap.min.js"></script>-->
<!--</body>-->
<!---->
<!--</html>-->