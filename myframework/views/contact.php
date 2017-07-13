<!-- CONTENT -->
<form id="contactForm">
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
        <label name="select" for="select">Select</label>
        <select class="form-control" id="select">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
        </select>
    </div>

    <div class="form-group">
        <label for="textarea">Textarea</label>
        <textarea name="textarea" class="form-control" id="textarea" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="input">File Input</label>
        <input name="input" type="file" class="form-control-file" id="input" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Upload file here.</small>
    </div>

    <fieldset class="form-group">
        <legend>Radio Options</legend>
        <div class="form-check">
            <label class="form-check-label">
                <input name="radios1" type="radio" class="form-check-input" name="radios" id="radios1" value="option1" checked>
                Option 1
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input  name="radios2" type="radio" class="form-check-input" name="radios" id="radios2" value="option2">
                Option 2
            </label>
        </div>
    </fieldset>

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
                "radio":$("#radios:checked").val()
            },
            success: function(msg) {
                if(msg === "welcome") {
                    alert ("welcome");
                } else {
                    alert ("bad login");
                    //error alert
                }
            }
        })
    })
</script>