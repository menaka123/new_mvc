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
        <div class="tab">Personal details:
            <form action="/new_mvc/public/home/save" method="post">

                <?php if(isset($data->id)) { ?>


                    <p><input placeholder="First name..." name="first_name" type="text" value="<?php echo  $data->first_name;  ?>" required></p>
                    <p><input placeholder="Last name..." name="last_name" type="text"  value="<?php  echo  $data->last_name; ?>" required></p>
                    <p><input placeholder="Phone..." name="telephone" type="text"  value="<?php echo  $data->telephone; ?>" required></p>

                <?php } else {?>

                    <p><input placeholder="First name..." name="first_name" type="text" required></p>
                    <p><input placeholder="Last name..." name="last_name" type="text" required></p>
                    <p><input placeholder="Phone..." name="telephone" type="text" required></p>

                <?php } ?>

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
    <div class="tab">Address Info:

        <form action="/new_mvc/public/home/save" method="post">

            <?php if(isset($data->id)) { ?>
                <p><input placeholder="Street..." name="street" type="text" value="<?php echo  $data->street;  ?>" required></p>
                <p><input placeholder="House number..." name="house_number" type="text" value="<?php echo  $data->house_number;  ?>" required></p>
                <p><input placeholder="Zip code..." name="zip" type="text" value="<?php echo  $data->zip;  ?>" required></p>
                <p><input placeholder="City..." name="city" type="text" value="<?php echo  $data->city;  ?>" required></p>


            <?php } else {?>

                <p><input placeholder="Street..." name="street" type="text" required></p>
                <p><input placeholder="House number..." name="house_number" type="text" required></p>
                <p><input placeholder="Zip code..." name="zip" type="text" required></p>
                <p><input placeholder="City..." name="city" type="text" required></p>
            <?php } ?>

            <div style="overflow:auto;">
                <div style="float:right;">

                        <button type="button"  onclick="post()">Previous</button>


                    <button type="submit" id="nextBtn">Next</button>
                </div>
            </div>
        </form>


    </div>

        <?php
    } else if($_SESSION['step'] == 3) {
    ?>

    <div class="tab">Payment information:
        <form action="/new_mvc/public/home/save" method="post">

            <?php if(isset($data->id)) { ?>
            <p><input placeholder="Account owner..." name="account_number" type="text" value="<?php echo  $data->account_number;  ?>" required></p>
            <p><input placeholder="IBAN..." name="iban" value="<?php echo  $data->iban;  ?>" type="text" ></p>

            <?php } else {?>

                <p><input placeholder="Account owner..." name="account_number" type="text" required></p>
                <p><input placeholder="IBAN..." name="iban" type="text" ></p>
            <?php } ?>

            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button"  onclick="post()">Previous</button>

                    <button type="submit" id="nextBtn">Next</button>
                </div>
            </div>
        </form>
    </div>

        <?php
    } else if($_SESSION['step'] == 4) {

    ?>

    <div class="tab">  <?php if(isset($data['error'])) { echo ($data['error']); }else { echo 'Success!!'; } ?>

    </div>



    <?php } ?>

</div>


    <script type="text/javascript">
        function post() {
            let  method = "POST";
            let path = "/new_mvc/public/home/back";

            let form = document.createElement("form");
            form.setAttribute("method", method);
            form.setAttribute("action", path);


            document.body.appendChild(form);
            form.submit();
        }
    </script>

</body>
</html>