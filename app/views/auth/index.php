<?php
 $path = '/new_mvc/public'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-up/Sign-in</title>

    <link href="<?php echo $path; ?>/styles/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="bg">
    <div class="container">
        <div class="content-wrapper">
            <div class="sign-in">
                <div class="content">
                    <h2>Don't have an account?</h2>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <button id="showFilePanel" class="btn-primary">SIGN UP</button>
                </div>
            </div>
            <div class="sign-up">
                <div class="content">
                    <h2>Have an account?</h2>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                    </p>
                    <button id="to-login" class="btn-primary">LOGIN</button>
                </div>
            </div>
            <div class="form-wrapper ">
                <div id="form-content" class="content">
                    <h2> <span id="title">Sign up</span> <img src="<?php echo $path; ?>/img/logo.png"></h2>
                    <hr>
                    <?php 
                    if ($data) {
                        echo '<span class="error">'. $data['msg'] .'</span>';
                    }
                    ?>
                    <input id='init' type='hidden' value='<?php echo $data ? $data['page'] : ''; ?>'>
                    <form id='main-form' action="<?php echo $path; ?>/auth/signup" method="post">
                        <div id="name-wrapper">
                            <label for="name">Name</label>
                            <img src="<?php echo $path; ?>/img/icuser.png">
                            <input id="name" type="text" name="name" required="required"/>
                        </div>
                        <label for="email">Email</label>
                        <img src="<?php echo $path; ?>/img/icmail.png">
                        <input id="email" type="email" name="email" required="required"/>
                        <label for="password">Password</label>
                        <img src="<?php echo $path; ?>/img/iclock.png">
                        <input id="password" type="password" name="password" required="required"/>
                        <button type="submit" class="btn-secondary">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer">
            All RIGHTS RESERVED "MAGEBIT" 2016.
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="application/javascript"> 
    let init = $('#init').val();
    let wrapper = $('.form-wrapper');
    let title = $('#title');
    let name = $('#name-wrapper');
    let formAni = $('#form-content');
    let form = $('#main-form');

    if (init) {
        wrapper.addClass(init).show();
        if (init == 'left') {
            title.html('Sign up');
            name.show();
            form.attr("action", '/new_mvc/public/auth/signup');
        }
        else {
            title.html('Login');
            name.hide();
            $('#name').val('   .');
            form.attr("action", '/new_mvc/public/auth/login');
        }
    }

    const hideError = () => {
        $('.error').hide();
    };

    const fadeIn = () => {
        if (formAni.hasClass('fadein-effect')) {
            formAni.removeClass('fadein-effect').toggle();
            formAni.addClass('fadein-effect').show();
        } else {
            formAni.addClass('fadein-effect').show();
        }
    };

    $('#showFilePanel').click(() => {
        wrapper.hasClass('right') ?
            wrapper.removeClass('right').addClass('left').show()
            :
            wrapper.addClass('left').show();

        setTimeout(() => {
            fadeIn();
            title.html('Sign up');
            name.show();
        }, 200);
        hideError();
        form.attr("action", '/new_mvc/public/auth/signup');
        $('#name').val('');
    });

    $('#to-login').click(() => {
        wrapper.hasClass('left') ?
            wrapper.removeClass('left').addClass('right')
            :
            wrapper.addClass('right');

        setTimeout(() => {
            fadeIn();
            title.html('Login');
            name.hide();
        }, 200);
        hideError();
        form.attr("action", '/new_mvc/public/auth/login');
        $('#name').val('   .');
    });
</script>
</body>
</html>