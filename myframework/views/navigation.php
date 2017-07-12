<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Navigation</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;

            width: 100%;
            height: 100vh;

            margin: 0;
            padding: 0;

            font-family: "Courier New", monospace;
        }
        header {
            width: 100%;

            margin: 0;
            padding: 1%;

            color: #9F9386;
            background-color: white;
            border: 1px solid #9F9386;
        }
        #navigation {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;

            width: 100%;
            height: 100%;

            margin: 0;
            padding: 0;
        }
        #navigation ul {
            display: flex;
            justify-content: space-around;

            width: 100%;

            list-style: none;

            margin: 0;
            padding: 0;
        }
        #navigation li {
            width: calc(100%/3);
            height: 50px;
        }
        #navigation form {
            width: 100%;
            height: 100%;
        }
        #navigation input[type=submit] {
            width: 100%;
            height: 100%;

            background-color: #9F9386;
            color: white;
            font-family: "Courier New", monospace;
            font-size: 110%;
        }
        footer {
            width: 100%;
            text-align: right;

            margin: 0;
            padding: 0;

            color: #9F9386;
            background-color: white;
            border: 1px solid #9F9386;
        }

        footer ul {
            list-style: none;

            margin: 0;
            padding: 1%;
        }

    </style>

</head>

<body>
    <header>
        <h1>Produce 2: NAVIGATION</h1>
    </header>

    <section id="navigation">
        <!-- test -->
        <?php //var_dump($data); ?>
        <?php $arr = array("testone", "testtwo", "testthree"); ?>

        <ul>
            <!-- test array -->
            <?php foreach($arr as $l): ?>
                <li>
                    <form action="<?php echo $l; ?>">
                        <input type="Submit" value="<?php echo $l; ?>">
                    </form>
                </li>

            <?php endforeach; ?>

        </ul>
    </section>

    <footer>
        <ul>
            <li>Nicole Cayouette</li>
            <li>June 30, 2017</li>
        </ul>
    </footer>
</body>
</html>