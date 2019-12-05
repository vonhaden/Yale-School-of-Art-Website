<?php
// set page title
$pageTitle = 'Yale School of Art | Home';

// set meta description
$metaDescription = 'The Yale School of Art is the art school of Yale University. Founded in 1869 as the first professional fine arts school in the United States, it grants Masters of Fine Arts degrees to students completing a two-year course in graphic design, painting/printmaking, photography, or sculpture.';

// includes
include "includes/head.php";
include "includes/nav.php";

?>

<!---------------------- JUMBOTRON ---------------------->
<div class="jumbotron jumbotron-fluid">
    <div class="overlay">
        <div class="container">
            <h1>Yale School of Art</h1>
            <a href="programs.php" class="btn btn-primary btn-grey">View Our Programs</a>
        </div>
    </div>
</div>



<!---------------------- STUDENT SHOWCASE ---------------------->
<div class="container-fluid showcase">
    <h2>Student Showcase</h2>
    <div class="showcase-holder">
        <div class="student">
            <div class="thumbnail">
                <img src="images/showcase/showcase-1.jpg" alt="Student showcase thumbnail.">
            </div>
            <div class="details">
                <h4>Senior Thesis</h4>
                <h3>Chase Westover</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>
        </div>

        <div class="student">
            <div class="thumbnail">
                <img src="images/showcase/showcase-2.jpg" alt="Student showcase thumbnail.">
            </div>
            <div class="details">
                <h4>Second-Year Show</h4>
                <h3>Johannes DeYoung</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>
        </div>

        <div class="student">
            <div class="thumbnail">
                <img src="images/showcase/showcase-3.jpg" alt="Student showcase thumbnail.">
            </div>
            <div class="details">
                <h4>Design Showcase</h4>
                <h3>Tantan Wang</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>
        </div>

        <div class="student">
            <div class="thumbnail">
                <img src="images/showcase/showcase-4.jpg" alt="Student showcase thumbnail.">
            </div>
            <div class="details">
                <h4>Unfinished: An Exhibition</h4>
                <h3>Sadie Cornette Cook</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>
        </div>

        <div class="student">
            <div class="thumbnail">
                <img src="images/showcase/showcase-5.jpg" alt="Student showcase thumbnail.">
            </div>
            <div class="details">
                <h4>Name of Gallery</h4>
                <h3>Hazal Ozgur</h3>
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
            <a href="programs.php#graphic" class="col-lg-3 col-md-6 program">
                <button class="btn btn-primary">Graphic Design</button>
            </a>
            <a href="programs.php#painting" class="col-lg-3 col-md-6 program">
                <button class="btn btn-primary">Painting & Print Making</button>
            </a>
            <a href="programs.php#photography" class="col-lg-3 col-md-6 program">
                <button class="btn btn-primary">Photography</button>
            </a>
            <a href="programs.php#sculpture" class="col-lg-3 col-md-6 program">
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
                        <p class="date">Nov 20, 2019</p>
                        <p class="time">12:00 PM</p>
                    </div>
                    <h3>On Machine Learning & the Collective Condition</h3>
                    <p>Hosted in conjunction with the public lectures organized by the Yale School of Art in tandem with its 150th anniversary and its status as a co-educational...</p>
                    <button class="btn btn-primary btn-white-borders">More Information</button>
                </div>
            </div>
            <div class="event col-xl-6 col-lg-12">
                <div class="event-image">
                    <img src="images/showcase.jpg" alt="Sample event image.">
                </div>
                <div class="event-text">
                    <div class="event-time">
                        <p class="date">Nov 21, 2019</p>
                        <p class="time">6:30 PM</p>
                    </div>
                    <h3>Artist & Poet Barbara Chase-Riboud</h3>
                    <p>Hosted in conjunction with the series of public events organized by the Yale School of Art in celebration of its 150th anniversary and its status as a co-educational...</p>
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
                    <h3>What Should Socalism Mean?</h3>
                    <p>In a talk entitled “What should socialism mean in the 21st century?,” Nancy Fraser will consider the resurgence of the term nationally and venture the beginnings of...</p>
                    <button class="btn btn-primary btn-white-borders">More Information</button>
                </div>
            </div>
            <div class="event col-xl-6 col-lg-12">
                <div class="event-image">
                    <img src="images/showcase.jpg" alt="Sample event image.">
                </div>
                <div class="event-text">
                    <div class="event-time">
                        <p class="date">Nov 14, 2019</p>
                        <p class="time">5:30 PM</p>
                    </div>
                    <h3>50 Years of Change in Visual Arts</h3>
                    <p>The event marks the 50th anniversary of African American Studies at Yale and will reflect on changing perceptions of black visual arts since 1969...</p>
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