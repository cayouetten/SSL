<style>
    #aboutContent {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #aboutCarousel {
        display: flex;
        justify-content:center;
        align-items: center;

        margin-top: 75px;
    }

    #aboutButtonWrap {
        display: flex;
        justify-content: center;

        padding: 5px;
    }

    .carousel-control-prev {
        margin-right: 10px;
    }

    .carousel-control-next {
        margin-left: 10px;
    }
</style>

<!-- CONTENT -->
<div id="aboutContent">
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

    <div  id="aboutButtonWrap">
        <button id="aboutButton" type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Photo slideshow of carinval destinations.">
            Info
        </button>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../assets/js/bootstrap.min.js"></script>

<!--POPOVER SCRIPT-->
<script>
    $(function () {
        $('#aboutButton').popover({
            container: 'body'
        })
    })
</script>