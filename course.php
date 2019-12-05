<?php
// set page title
$pageTitle = 'Yale School of Art | Course';

// set meta description
$metaDescription = 'This is a sweet course, yo';

// includes
include "includes/head.php";
include "includes/nav.php";

?>

<div class="course-page">
    <div class="container">
        <div class="row">

            <div class="col-12 heading">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-complete">
                    Register
                </button>
                <h1>Typography</h1>

                <div class="title-details">
                    <h2>Graphic Design</h2>
                    <h2>Art 264</h2>
                </div>
                <h3>Alice Chung</h3>
                <h4>Prerequisite: ART 132a or 132b</h4>
            </div>

            <div class="col-12 description">
                <p>An intermediate course in graphic design concentrating on the fundamentals of typography, and particularly on how typographic form and visual arrangement create and support content. The course work is based on designing and making books and employs handwork and computer technology. Typographic history and theory are discussed in relation to course projects. </p>
            </div>

            <div class="col-12 details">
                <div class="date">
                    <h4>Dates</h4>
                    <p>01/21/19 - 05-13-19</p>
                </div>
                <div class="time">
                    <h4>Times</h4>
                    <p>6:00pm - 9:50pm</p>
                </div>
                <div class="credits">
                    <h4>Credit(s)</h4>
                    <p>3</p>
                </div>
                <div class="meeting">
                    <h4>Meeting Day(s)</h4>
                    <p>Monday, Wednesday</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-complete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Register for Class</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Please confirm that you wish to register for this class</p>
                </div>
                <div class="modal-footer">
                    <a href="course.php" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
include "includes/footer.php";
?>