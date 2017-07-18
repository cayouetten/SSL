<style>
    #subNavHeader {
        font-style: italic;
    }
</style>

<!--CONTENT-->
<div class="container">
    <nav class="navbar">
        <ul class="nav navbar-nav">
            <li id="subNavHeader" class="navbar-brand">Direct to...</li>

            <?php foreach($data as $d): ?>
                <li>
                    <a href="navigation/<? echo $d; ?>">
                        <? echo $d; ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </nav>
</div>