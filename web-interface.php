<!-- <style>
    body {
        background-color: linen;
    }

    h1 {
        color: maroon;
        margin-left: 40px;
    } 
</style> -->
<html>
    <head>
        <style type="text/css">
            * { 
                padding: 0; 
                margin: 0;
            }

            /* Add a black background color to the top navigation */
            .topnav {
                background-color: #40454f;
                overflow: hidden;
                font-family: arial;
            }

            /* Style the links inside the navigation bar */
            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 18px;
            }

            /* Change the color of links on hover */
            .topnav a:hover {
                background-color: #40454f;
                color: white;
            }

            /* Add a color to the active/current link */
            .topnav a.active {
                background-color: #33cc33;
                color: white;
            }

            textarea {
                width: 100%;
                padding: 20px 20px;
                box-sizing: border-box;
                margin-top: 20px;
                font-size: 18px;
                margin-left: 0px;
                margin-right: 0px;
                background-color: #25272b;
                color: #33cc33;
                resize: none;
                border: 1px #25272b;
            }
            
            label {
                font-family: "Arial";
                font-size: 24px;
                color: white;
            }

            form {
                margin-left: 0px;
                margin-right: 0px;
                padding-top: 30px;
                background-color: #40454f;
            }

            input[type=submit] {
                background-color: #40454f;
                color: #33cc33;
                padding: 26px 32px;
                text-decoration: none;
                cursor: pointer;
                font-size: 24px;
                width: 100%;
                height: 10%;
                margin-top: -5px;
                border: 1px #40454f;
            }
            input[type=submit]:hover {
                background-color: black;
                color: #33cc33;
            }
            
            .output{
                width: 100%;
                height: 100%;
                background-color: #25272b;
                padding: 20px 20px;
                box-sizing: border-box;
                margin-top: 20px;
                font-size: 24px;
                margin-bottom: 10px;
                color: #33cc33;
                font-family: arial;
                margin: auto;
                border: 1px #25272b;

            }

            .output-heading{
                font-size: 18px;
                color: white;
                margin-bottom: 20px;
            }

            form {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="#home">CSE586</a>
            <a href="#news">Project 2: Phase 1</a>
        </div>
        <form action="#" method="post">
            <label for="code">Enter your Python code in the text-area below:</label><br>
            <textarea name="code" rows="20" ></textarea><br>
            <input type="submit" name="submit" value="Get Output"><br>
        </form>
 

        <?php
            if(isset($_POST['submit']))
            {
                $code = $_POST['code'];

                $file = fopen("test.py", "w+") or die("file not open");

                $s = $code."\n";
                fputs($file,$s) or die("Error!");

                fclose($file);

                shell_exec("test.sh");

                // echo "<div><span>Output: </span><br><br>", file_get_contents("console.log"), "</div>";
                $output = file_get_contents("console.log");

            }
        ?>
        <div class="output"><span class="output-heading">Output: </span><br> <?php if(isset($_POST['submit'])){ echo file_get_contents("console.log");} ?> </div>

    </body>
</html>
