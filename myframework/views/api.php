<div class="container">
    <div class="starter-template">
        <h1>API View</h1>

        <? foreach($data as $item) {
            echo $item["volumeInfo"]["title"]."<br/> \n";
        } ?>

    </div>
</div>