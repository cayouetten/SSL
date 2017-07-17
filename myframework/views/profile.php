<!--Protected page-->
<div class="row panel">
    <div class="col-md-12 col-xs-12">
        <img src="./assets/images/image1.png" class="img-thumbnail picture hidden-xs"><br>
        <form action="/profile/update" method="POST" enctype="multipart/form-data">
            <label for="img" class="btn btn-default btn-file" style="width:110px;">Browse
                <input name="img" id="img" type="file" style="display:none;">
            </label>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>

        <div class="header">
            <h1>Name</h1>
            <h4>Title</h4>
            <span>Description goes here.</span>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../assets/js/bootstrap.min.js"></script>
