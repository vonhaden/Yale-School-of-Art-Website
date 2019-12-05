<?php
// set page title
$pageTitle = 'Yale School of Art | Student Work';

// set meta description
$metaDescription = 'See galleries of student\'s work';

// includes
include "includes/head.php";
include "includes/nav.php";

?>

<div class="student-work">
    <div class="container">
        <div class="row">
            <div class="col-12 heading">
                <h1>Student Work</h1>
                <a href="upload.php" class="btn btn-primary btn-grey">Submit Art</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 student">
                <div class="thumbnail">
                    <img src="images/showcase/showcase-1.jpg" alt="Student showcase thumbnail.">
                </div>
                <div class="details">
                    <h4>Senior Thesis</h4>
                    <h3>Chase Westover</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="col-lg-12 student">
                <div class="thumbnail">
                    <img src="images/showcase/showcase-2.jpg" alt="Student showcase thumbnail.">
                </div>
                <div class="details">
                    <h4>Second-Year Show</h4>
                    <h3>Johannes DeYoung</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="col-lg-12 student">
                <div class="thumbnail">
                    <img src="images/showcase/showcase-3.jpg" alt="Student showcase thumbnail.">
                </div>
                <div class="details">
                    <h4>Design Showcase</h4>
                    <h3>Tantan Wang</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="col-lg-12 student">
                <div class="thumbnail">
                    <img src="images/showcase/showcase-4.jpg" alt="Student showcase thumbnail.">
                </div>
                <div class="details">
                    <h4>Unfinished: An Exhibition</h4>
                    <h3>Sadie Cornette Cook</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include "includes/footer.php";
?>