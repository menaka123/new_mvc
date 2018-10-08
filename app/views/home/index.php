<DOCTYPE html>
    <html>
    <head>
        <style>
            /* Style the form */
            #regForm {
                background-color: #ffffff;
                margin: 100px auto;
                padding: 40px;
                width: 70%;
                min-width: 300px;
            }

            /* Style the input fields */
            input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
            }

            /* Mark input boxes that gets an error on validation: */
            input.invalid {
                background-color: #ffdddd;
            }



            /* Make circles that indicate the steps of the form: */
            .step {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbbbbb;
                border: none;
                border-radius: 50%;
                display: inline-block;
                opacity: 0.5;
            }

            /* Mark the active step: */
            .step.active {
                opacity: 1;
            }

            /* Mark the steps that are finished and valid: */
            .step.finish {
                background-color: #4CAF50;
            }
        </style>

    </head>
    <body>



<div id="regForm" >

    <h1>Register:</h1>

    <!-- One "tab" for each step in the form: -->

    <?php
    if($_SESSION['step'] == 1) {
        ?>
        <div class="tab">Name:
            <form action="/new_mvc/public/home/save" method="post">
                <p><input placeholder="First name..." name="first_name" type="text" required></p>
                <p><input placeholder="Last name..." name="last_name" type="text" required></p>
                <p><input placeholder="Phone..." name="telephone" type="text" required></p>

                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="submit" id="nextBtn">Next</button>
                    </div>
                </div>
            </form>

        </div>

        <?php
    } else if($_SESSION['step'] == 2) {
    ?>
    <div class="tab">Contact Info:
        <p><input placeholder="E-mail..." oninput="this.className = ''"></p>

    </div>

        <?php
    } else if($_SESSION['step'] == 3) {
    ?>

    <div class="tab">Birthday:
        <p><input placeholder="dd" oninput="this.className = ''"></p>
        <p><input placeholder="mm" oninput="this.className = ''"></p>
        <p><input placeholder="yyyy" oninput="this.className = ''"></p>
    </div>

        <?php
    } else if($_SESSION['step'] == 4) {
    ?>

    <div class="tab">Login Info:
        <p><input placeholder="Username..." oninput="this.className = ''"></p>
        <p><input placeholder="Password..." oninput="this.className = ''"></p>
    </div>

        <?php
    } else if($_SESSION['step'] == 5) {
    ?>

    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>

        <?php
    } else if($_SESSION['step'] == 6) {
    ?>

    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>

    <?php } ?>

</div>

</body>
</html>