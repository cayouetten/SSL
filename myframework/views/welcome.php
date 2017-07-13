<!-- CONTENT -->
<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Produce 4</h1>
        <p>Form submission.</p>
    </div>

    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../assets/js/bootstrap.min.js"></script>

<script>
    $("button").click(function() {
        $.ajax({
            method: "POST",
            url: "/welcome/ajaxPars",
            data: {
                email: $("#email").val(),
                password: $("#password").val()
            },
            success: function(msg) {
                if(msg==="welcome"){}else{}
            };
        })
    })
</script>