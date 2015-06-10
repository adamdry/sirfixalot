<?php 
namespace sirfix;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sir Fixalot Mobile Mechanic</title>
        <?php require 'lib/common-resources.php'; ?>
        
        <style>
            .centerImg {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .centerDiv {
                width: 50%;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <?php //require 'lib/header-menu.php'; ?>
        <div class="med-gap"></div>
        <div class="container">
            <img src="images/FixalotCars-Logo-AW_cropped.png" class="centerImg" />
            
            <div>
                <h1>Sir Fixalot Cars</h1>
                <p>We are a mobile mechanic company operating in the <b>Leigh-on-Sea</b> and surrounding areas.</p>
                <p>Please see below for our contact details and services.</p>
                <h1>Contact Us</h1>
                <p>Please use the contact details below to request a quote or arrange for a mechanic to come to you! Our friendly staff are happy to take your call or respond to an email.</p>
                <p>Mobile: 07516 038104</p>
                <p>Email: <a href="mailto:sirfixalotcars@gmail.com?subject=Mobile Mechanic Request" target="_blank">sirfixalotcars@gmail.com</a></p>
                <h1>Services</h1>
                <p>Our services are offered on all make and models of cars and small vans.</p>
                <p>The following is a list of some of the services we offer:</p>
                <ul>
                    <li>MOT arranged</li>
                    <li>Welding</li>
                    <li>Suspension Components</li>
                    <li>Emissions Related</li>
                    <li>Brake Components Mechanical</li>
                    <li>Brake Hydraulics</li>
                    <li>Electrical</li>
                    <li>Steering</li>
                    <li>Cooling</li>
                    <li>Engine Related</li>
                    <li>Fuel Related</li>
                    <li>Interior</li>
                </ul>
            </div>
        </div>
        
        <?php require 'lib/footer.php'; ?>
        <?php require 'lib/common-bootstrap-js.php'; ?> 
    </body>
</html>