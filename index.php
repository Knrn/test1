<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "2873280114@qq.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>



<!doctype html>
<html lang="en"  class="h">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style media="screen">

          body {
            background-color: black;
            color: white;
            width: 100%;
          }

          hr {
            height: 1px;
            width: auto;
            background: radial-gradient(white 8%, black 100%);
            animation-name: light;
            animation-duration: 3s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
          }

          @keyframes light{
              from{
                  opacity: 1;
              }
              to{
                  opacity: 0.2;
              }
          }

          .h {
            height:100%
          }



          /* left part */
          .c1 {
            text-align: center;
            padding-right: 50px;
          }

          .logo {
            width: fixed;
            position: fixed;
          }

          .logo img {
            width: fixed;
            height: 150px;
            margin-top: -30px;
            margin-left: -30px;
          }

          .name {
            padding-top: 100px;
            padding-bottom: 20px;
          }

          /* navigation */

          .navigation {

          }

          .n_link {
            display: block;
            color: white;
          }

          .n_link:hover {
            background-image: url("img/gif/1.gif");
            background-repeat: no-repeat;
            background-size: 200px 20px;
            background-position: bottom;
            text-decoration: none;
            color: rgb(148, 232, 255);
          }

          .nc_link {
            display: block;
            color: rgb(255, 129, 97);
            cursor:pointer;
            pointer-events: none;
          }

          /* right part */
          .c2 {
            position: relative;
          }

          /* tittle */
          .tl {

          }

          /* work display */



          .col-sm-4 {
            overflow:hidden;
          }

          .s1 {
            background-image: url("img/s1.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
          }

          .s2 {
            background-image: url("img/ilu/1.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
          }

          .cb1 {
            background-color: lightgray;
            position: absolute;
            height: 10%;
            width: 2%;
            top: 45%;
            right: -1%;
          }

          .icon {
            position: fixed;
            bottom: 30px;
            right: 20px;
            opacity: 0.5;
          }

          .icon>a img {
            height: 30px;
            border-radius: 10px;
            padding-right: 2px;
          }
    </style>
  </head>
  <body  class="h">




        <div class="row">

            <!--Grid column-->

                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->


                        <!--Grid column-->

                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>

                        <!--Grid column-->

                        <!--Grid column-->

                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                            </div>

                        <!--Grid column-->


                    <!--Grid row-->

                    <!--Grid row-->


                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>


                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>

            <!--Grid column-->

            <!--Grid column-->



            <!--Grid column-->


    <!--Section: Contact v.2-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
