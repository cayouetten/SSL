<style>
    #contactForm {
        margin-left: auto;
        margin-right: auto;

        width: 65%;
    }
</style>

<!-- CONTENT -->
<!-- captcha -->
<?
function create_image($cap) {
    unlink("./assets/images/image1.png");

    global $image;

    $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($image, 255, 255, 255);
    $text_color = imagecolorallocate($image, 0, 255, 255);
    $line_color = imagecolorallocate($image, 64, 64, 64);
    $pixel_color = imagecolorallocate($image, 0, 0, 255);
    imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

    for ($i = 0; $i < 3; $i++) {
        imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
    }

    for ($i = 0; $i < 1000; $i++) {
        imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
    }

    $text_color = imagecolorallocate($image, 0, 0, 0);
    ImageString($image, 22, 30, 22, $cap, $text_color);

    //session var
    $_SESSION["captchaImg"] = $cap;

    imagepng($image, "./assets/images/image1.png");
}

create_image($data["cap"]);
?>

<form id="contactForm" method="POST" action="/welcome/contactRecv">
    <div class="form-group">
        <label for="email">Email address</label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label name="password" for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>

    <div class="form-group">
        <label name="select" for="select">Level</label>
        <select class="form-control" id="select">
            <option>Amateur</option>
            <option>Beginner</option>
            <option>Intermediate</option>
            <option>Advanced</option>
            <option>Expert</option>
        </select>
    </div>

    <div class="form-group">
        <label for="textarea">Experience</label>
        <textarea name="textarea" class="form-control" id="textarea" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="input">File Input</label>
        <input name="input" type="file" class="form-control-file" id="input" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Upload file here.</small>
    </div>

    <fieldset class="form-group">
        <label>Role</label>
        <div class="form-check">
            <label class="form-check-label">
                <input name="radios1" type="radio" class="form-check-input radios" id="radios1" value="option1" checked>
                SSL
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input  name="radios2" type="radio" class="form-check-input radios" id="radios2" value="option2">
                CSL
            </label>
        </div>
    </fieldset>

    <!-- submission error -->
    <div class=form-group">
        <p id="submissionErr" class="text-danger"></p>
    </div>


    <!-- captcha -->
    <? echo "<img src='../assets/images/image1.png'>"; ?>
    <div>
        <label for="captcha">Enter Captcha </label>
        <input name="captcha" type="captcha" id="captcha"  placeholder="">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>

    <input type="button" value="Ajax Submit"  id="ajaxButton" class="btn btn-primary"/>
</form>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../assets/js/bootstrap.min.js"></script>

<script>
    $("#ajaxButton").click(function(){
        $.ajax({
            method: "POST",
            url: "/welcome/ajaxPars",
            data: {
                "email": $("#email").val(),
                "password":$("#password").val(),
                "select":$("#select").val(),
                "textarea":$("#textarea").val(),
                "input":$("#input").val(),
                "radio":$(".radios:checked").val()
            },
            success: function(msg) {
                if(msg === "welcome") {
                    document.getElementById("submissionErr").innerHTML = "";
                    alert ("Welcome User");
                } else {
                    document.getElementById("submissionErr").innerHTML = "Email and password are not recognized.";
                }
            }
        })
    })
</script>