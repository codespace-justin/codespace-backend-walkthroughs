<!DOCTYPE html>
<html lang="en">

    <!-- PHP Setup -->
    <?php

        /* Print Template
         *    <?php echo ""; ?>
         */

        # - Titles -
            $title = 'CodeSpace App Factory';
            $subTitle = 'Developing the digital skills, coding capabilities and workplace readiness of young graduates.';
            $productsTitle = 'What we can build';

        # - Products -
            $product1 = 'Creating Management Systems';
            $product2 = 'Building Websites';
            $product3 = "Developing 3rd party API's";

        # - Metrics-
            $metricsTitle = "Why work with us?";
            $students = 9;
            $activeProjects = 2;
            $studentVacancies = true;
            $projectVacancies = true;
            $placedStudents = 30;

        # - Contact Info -
            $footerTitle = 'Get in touch:';
            $footerSubTitle = "Want to join our programme or place an order for some software?"
                            . "Then fill in the form below and we will get back to ASAP!";   
            $email = 'factory@codespace.co.za';
            $telephone = '0' . 219063454;
            $address = "6 Beach Rd, Woodstock, Cape Town, 8000";

    ?>
    <!-- PHP Setup -->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Introduction</title>
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>

        <!---------------------------- Header ---------------------------->
        <header class="header">
            <h1>
                <?php echo " $title "; ?>
            </h1>
            <h2>
                <?php echo " $subTitle "; ?>
            </h2>
        </header>
        <!---------------------------- Header ---------------------------->

        <br>
        <br>
        
        <!---------------------------- Main ---------------------------->
        <main class="main">

            <!-- Products Section -->
            <section>
            
                <h2>
                    <?php echo " $productsTitle "; ?>
                </h2>

                <div class="box">
                    <?php echo "<a href='#'> <b> $product1 </b></a> <br><br>"; ?>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque saepe odio ex beatae nulla cum 
                    accusantium quo ipsa blanditiis at velit, earum nostrum. Saepe assumenda ipsam velit, doloribus
                    obcaecati reprehenderit?
                </div>

                <div class="box">
                    <?php echo "<a href='#'> <b> $product2 </b></a> <br><br>"; ?>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque saepe odio ex beatae nulla cum 
                    accusantium quo ipsa blanditiis at velit, earum nostrum. Saepe assumenda ipsam velit, doloribus
                    obcaecati reprehenderit?
                </div>

                <div class="box">
                    <?php echo "<a href='#'> <b> $product3 </b></a> <br><br>"; ?>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque saepe odio ex beatae nulla cum 
                    accusantium quo ipsa blanditiis at velit, earum nostrum. Saepe assumenda ipsam velit, doloribus
                    obcaecati reprehenderit?
                </div>

            </section>
            <!-- Products Section -->
            <br>
            <br>
            <!-- Metrics Section -->
            <section>

                <h2>
                    <?php echo " $metricsTitle "; ?>
                </h2>

                <div class="box">
                    <ul>
                        <li>
                            Active students working under us : <b> <?php echo " $students  "; ?> </b>
                        </li>
                        <li>
                            Number of projects we are currently undertaking : <b> <?php echo " $activeProjects "; ?> </b>
                        </li>
                        <li>
                            Graduates who are currently working in the industry : <b> <?php echo " $placedStudents"; ?> </b>
                        </li>
                    </ul>

                    <div class="box" style="text-align: center;">
                    <?php
                        # Student Call to Action
                        if ($studentVacancies) {
                            echo "
                            <button class='call-to-action-btn'>
                                Enroll as a Student Now
                            </button>
                            ";
                        } else {
                            echo "
                            <button disabled>
                                Applications Full..
                            </button>
                            ";
                        }

                        # Client Call to Action
                        if ($projectVacancies) {
                            echo "
                            <button class='call-to-action-btn'>
                                Enquire about a project
                            </button>
                            ";
                        } else {
                            echo "
                            <button disabled>
                                Projects Full..
                            </button>
                            ";
                        }
                    ?>
                    </div>

                </div>

            </section>
            <!-- Metrics Section -->

        </main>
        <!---------------------------- Main ---------------------------->

        <br>
        <br>

        <!---------------------------- Footer ---------------------------->
        <footer class="footer">

            <h2>
                <?php echo $footerTitle; ?>
            </h2>
            <h3>
                <?php echo $footerSubTitle; ?>
            </h3>

            <form action="#" method="get" class="form">
                <input type="text" placeholder="name" required >
                <input type="text" placeholder="lastname" required >
                <input type="email" placeholder="email address" required >
                <select name="prospect">
                    <option value="student">Student Application</option>
                    <option value="client">Project Application</option>
                    <option value="enquiry">General Enquiry</option>
                </select>
                <input type="submit" name="submit" value="Submit" class="call-to-action-btn">
            </form>

            <div class="contact">
                <h3> 
                    Email : <?php echo $email; ?> 
                </h3>
                <h3> 
                    Tel : <?php echo $telephone; ?> 
                </h3>
                <h3> 
                    Address : <?php echo $address; ?> 
                </h3>
            </div>

        </footer>
        <!---------------------------- Footer ---------------------------->

    </body>
</html>