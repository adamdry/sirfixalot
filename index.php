<?php 
namespace sirfix;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <script src="js/jquery-1.11.3.min.js"></script>
        
        <script>
            
            var serviceDetailsShowing = true;
            
            $( document ).ready(function() {
                $('.subServiceList').hide();
                serviceDetailsShowing = false;
            });
            
            function showServiceDetails() {
                if (serviceDetailsShowing) {
                    $('.subServiceList').hide();
                    $('#showServceDetailsLink').text('Show More Details +');
                    serviceDetailsShowing = false;
                }
                else {
                    $('.subServiceList').show();
                    $('#showServceDetailsLink').text('Show Less Details -');
                    serviceDetailsShowing = true;
                }
            }
        </script>
        
        <title>Sir Fixalot Cars</title>
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
                <p>We are a mobile mechanic company operating in <b>Leigh-on-Sea</b> and surrounding areas.</p>
                <p>Please see below for our contact details and services we offer.</p>
                <h1>Contact Us</h1>
                <p>Please use the contact details below to request a quote or arrange for a mechanic to come to you! Our friendly staff are happy to take your call or respond to an email.</p>
                <p>Mobile: 07516 038104</p>
                <p>Email: <a href="mailto:sirfixalotcars@gmail.com?subject=Mobile Mechanic Request" target="_blank">sirfixalotcars@gmail.com</a></p>
                <h1>Services</h1>
                <p>Our services are offered on all make and models of cars and small vans.</p>
                <p>The following is a list of some of the services we offer:</p>
                <a href="#" onclick="showServiceDetails(); return false;" id="showServceDetailsLink">Show More Details +</a>
                <ul>
                    <li>MOT arranged</li>
                    <li>
                        Welding
                        <ul class="subServiceList">
                            <li>Plating to MOT standard</li>
                            <li>Modifications / fabricating</li>
                        </ul>
                    </li>
                    <li>
                        Suspension Components
                        <ul class="subServiceList">
                            <li>Shock absorbers</li>
                            <li>Ball joints</li>
                            <li>Wishbone bushes</li>
                            <li>Anti roll bars</li>
                        </ul>
                    </li>
                    <li>
                        Emissions Related
                        <ul class="subServiceList">
                            <li>Engine fault light on</li>
                        </ul>
                    </li>
                    <li>
                        Brake Components Mechanical
                        <ul class="subServiceList">
                            <li>discs</li>
                            <li>Pads</li>
                            <li>Drums</li>
                            <li>Shoes</li>
                            <li>Cables</li>
                        </ul>
                    </li>
                    <li>
                        Brake Hydraulics
                        <ul class="subServiceList">
                            <li>Brake pipes</li>
                            <li>Wheel cylinders</li>
                            <li>Brake calipers</li>
                            <li>Master cylinders</li>
                        </ul>
                    </li>
                    <li>Electrical</li>
                        <ul class="subServiceList">
                            <li>Batteries</li>
                            <li>Alternators</li>
                            <li>Starter motors</li>
                            <li>Dynamos</li>
                            <li>Wiring</li>
                        </ul>
                    <li>
                        Steering
                        <ul class="subServiceList">
                            <li>Steering racks</li>
                            <li>Track rod ends</li>
                            <li>Power steering pumps</li>
                            <li>Steering columns</li>
                        </ul>
                    </li>
                    <li>
                        Cooling
                        <ul class="subServiceList">
                            <li>Radiators</li>
                            <li>Anti freeze changes</li>
                            <li>Heater matrix pipes</li>
                            <li>Headgaskets</li>
                            <li>Waterpumps</li>
                        </ul>
                    </li>
                    <li>
                        Engine Related
                        <ul class="subServiceList">
                            <li>Headgaskets</li>
                            <li>Cambelt replacements</li>
                            <li>Engine overhauls</li>
                            <li>Component modification</li>
                        </ul>
                    </li>
                    <li>Fuel Related</li>
                        <ul class="subServiceList">
                            <li>Fuel tanks</li>
                            <li>Fuel pumps</li>
                            <li>Pipes / lines</li>
                            <li>Injectors</li>
                        </ul>
                    <li>
                        Interior
                        <ul class="subServiceList">
                            <li>Coolant blower motors</li>
                            <li>Window regulators / mechanical or electric</li>
                            <li>Door locks / handles</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
        <?php require 'lib/footer.php'; ?>
        <?php require 'lib/common-bootstrap-js.php'; ?> 
    </body>
</html>