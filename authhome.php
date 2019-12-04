<?php
// set page title
$pageTitle = 'Yale School of Art | Home';

// set meta description
$metaDescription = 'The Yale School of Art is the art school of Yale University. Founded in 1869 as the first professional fine arts school in the United States, it grants Masters of Fine Arts degrees to students completing a two-year course in graphic design, painting/printmaking, photography, or sculpture.';

// includes
include "includes/head.php";
include "includes/authnav.php";

?>

<!---------------------- JUMBOTRON ---------------------->
<div class="jumbotron jumbotron-fluid">
    <div class="overlay">
        <div class="container">
            <h1>Yale School of Art</h1>
            <button type="button" class="btn btn-primary btn-grey">View Our Programs</button>
        </div>
    </div>
</div>



<!---------------------- STUDENT SHOWCASE ---------------------->
<div class="container-fluid showcase">
    <h2>Student Showcase</h2>
    <div class="showcase-holder">
        <div class="student">
            <div class="thumbnail">
                <img src="images/showcase.jpg" alt="Student showcase thumbnail.">
            </div>
            <div class="details">
                <h4>Name of Gallery</h4>
                <h3>Student Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>
        </div>

        <div class="student">
            <div class="thumbnail">
                <img src="images/showcase.jpg" alt="Student showcase thumbnail.">
            </div>
            <div class="details">
                <h4>Name of Gallery</h4>
                <h3>Student Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>

        </div>

        <div class="student">
            <div class="thumbnail">
                <img src="images/showcase.jpg" alt="Student showcase thumbnail.">
            </div>
            <div class="details">
                <h4>Name of Gallery</h4>
                <h3>Student Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>

        </div>

        <div class="student">
            <div class="thumbnail">
                <img src="images/showcase.jpg" alt="Student showcase thumbnail.">
            </div>
            <div class="details">
                <h4>Name of Gallery</h4>
                <h3>Student Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>

        </div>

    </div>
</div>



<!---------------------- PROGRAMS ---------------------->
<div class="programs">
    <div class="container">
        <div class="row">
            <h2>Programs</h2>
        </div>
        <div class="row">
            <a href="#" class="col-lg-3 col-md-6 program">
                <button class="btn btn-primary">Graphic Design</button>
            </a>
            <a href="#" class="col-lg-3 col-md-6 program">
                <button class="btn btn-primary">Painting & Print Making</button>
            </a>
            <a href="#" class="col-lg-3 col-md-6 program">
                <button class="btn btn-primary">Photography</button>
            </a>
            <a href="#" class="col-lg-3 col-md-6 program">
                <button class="btn btn-primary">Sculpture</button>
            </a>
        </div>
    </div>
</div>



<!---------------------- EVENTS ---------------------->
<div class="events">
    <div class="container">
        <div class="row">
            <h2>Upcoming Community Events</h2>
        </div>
        <div class="row">
            <div class="event col-xl-6 col-lg-12">
                <div class="event-image">
                    <img src="images/showcase.jpg" alt="Sample event image.">
                </div>
                <div class="event-text">
                    <div class="event-time">
                        <p class="date">Nov 18, 2019</p>
                        <p class="time">6:00 PM</p>
                    </div>
                    <h3>Event Name Goes Here</h3>
                    <p>Ullamcorper malesuada proin libero nunc consequat interdum varius. Sit amet dictum sit amet justo. Integer enim neque volutpat ac tincidunt vitae...</p>
                    <button class="btn btn-primary btn-white-borders">More Information</button>
                </div>
            </div>
            <div class="event col-xl-6 col-lg-12">
                <div class="event-image">
                    <img src="images/showcase.jpg" alt="Sample event image.">
                </div>
                <div class="event-text">
                    <div class="event-time">
                        <p class="date">Nov 18, 2019</p>
                        <p class="time">6:00 PM</p>
                    </div>
                    <h3>Event Name Goes Here</h3>
                    <p>Ullamcorper malesuada proin libero nunc consequat interdum varius. Sit amet dictum sit amet justo. Integer enim neque volutpat ac tincidunt vitae...</p>
                    <button class="btn btn-primary btn-white-borders">More Information</button>
                </div>
            </div>
            <div class="event col-xl-6 col-lg-12">
                <div class="event-image">
                    <img src="images/showcase.jpg" alt="Sample event image.">
                </div>
                <div class="event-text">
                    <div class="event-time">
                        <p class="date">Nov 18, 2019</p>
                        <p class="time">6:00 PM</p>
                    </div>
                    <h3>Event Name Goes Here</h3>
                    <p>Ullamcorper malesuada proin libero nunc consequat interdum varius. Sit amet dictum sit amet justo. Integer enim neque volutpat ac tincidunt vitae...</p>
                    <button class="btn btn-primary btn-white-borders">More Information</button>
                </div>
            </div>
            <div class="event col-xl-6 col-lg-12">
                <div class="event-image">
                    <img src="images/showcase.jpg" alt="Sample event image.">
                </div>
                <div class="event-text">
                    <div class="event-time">
                        <p class="date">Nov 18, 2019</p>
                        <p class="time">6:00 PM</p>
                    </div>
                    <h3>Event Name Goes Here</h3>
                    <p>Ullamcorper malesuada proin libero nunc consequat interdum varius. Sit amet dictum sit amet justo. Integer enim neque volutpat ac tincidunt vitae...</p>
                    <button class="btn btn-primary btn-white-borders">More Information</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!---------------------- NEWS ---------------------->
<div class="news">
    <div class="container">
        <div class="row">
            <h2>News</h2>
        </div>
        <div class="row">
            <div class="article col-xl-4 col-lg-6">
                <div class="article-content">
                    <p class="article-date">Nov. 1, 2019 11:23 AM</p>
                    <h3>Ullamcorper Malesuada Proin Libero</h3>
                    <p class="article-info">Ullamcorper malesuada proin libero nunc consequat interdum varius. Sit amet dictum sit amet justo. Integer enim neque volutpat ac tincidunt vitae semper. Nulla posuere sollicitudin aliquam ultrices sagittis. Volutpat lacus laoreet non curabitur gravida arcu. Interdum posuere lorem ipsum dolor sit. A lacus vestibulum sed arcu non odio euismod.</p>
                    <button class="btn btn-primary btn-blue">Read More</button>
                </div>
            </div>

            <div class="article col-xl-4 col-lg-6">
                <div class="article-content">
                    <p class="article-date">Nov. 1, 2019 11:23 AM</p>
                    <h3>Ullamcorper Malesuada Proin Libero</h3>
                    <p class="article-info">Ullamcorper malesuada proin libero nunc consequat interdum varius. Sit amet dictum sit amet justo. Integer enim neque volutpat ac tincidunt vitae semper. Nulla posuere sollicitudin aliquam ultrices sagittis. Volutpat lacus laoreet non curabitur gravida arcu. Interdum posuere lorem ipsum dolor sit. A lacus vestibulum sed arcu non odio euismod.</p>
                    <button class="btn btn-primary btn-blue">Read More</button>
                </div>
            </div>

            <div class="article col-xl-4 col-lg-6">
                <div class="article-content">
                    <p class="article-date">Nov. 1, 2019 11:23 AM</p>
                    <h3>Ullamcorper Malesuada Proin Libero</h3>
                    <p class="article-info">Ullamcorper malesuada proin libero nunc consequat interdum varius. Sit amet dictum sit amet justo. Integer enim neque volutpat ac tincidunt vitae semper. Nulla posuere sollicitudin aliquam ultrices sagittis. Volutpat lacus laoreet non curabitur gravida arcu. Interdum posuere lorem ipsum dolor sit. A lacus vestibulum sed arcu non odio euismod.</p>
                    <button class="btn btn-primary btn-blue">Read More</button>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include "includes/footer.php";
?>