<?php
// set page title
$pageTitle = 'Yale School of Art | Community Events';

// set meta description
$metaDescription = 'The community events calendar shows events and activities happening at the school and in the community.';

// includes
include "includes/head.php";
include "includes/nav.php";

?>

<div class="calendar-page">
    <div class="container-fluid">

        <!-- Header -->
        <div class="row">
            <div class="col-12 heading">
                <h1>Calendar</h1>
                <h3>December 2019</h3>
                <button class="btn btn-arrow"><i class="fas fa-chevron-left"></i></button>
                <button class="btn btn-arrow"><i class="fas fa-chevron-right"></i></button>
                <button type="button" class="btn btn-primary submit" data-toggle="modal" data-target="#modal-complete">
                    Add Event
                </button>
            </div>
        </div>


        <div class="row">

            <!-- Calendar Details -->
            <div class="col-2 details-bar">

                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Search"">
                </div>

                <div class="academic-calendar check-group">
                    <h3>Academic Calendar</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="holidays" id="check-holidays" checked>
                        <label class="form-check-label" for="check-holidays">Holidays</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="terms" id="check-terms" checked>
                        <label class="form-check-label" for="check-terms">Terms</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="events" id="check-events" checked>
                        <label class="form-check-label" for="check-events">Events</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="registration" id="check-registration" checked>
                        <label class="form-check-label" for="check-registration">Registration</label>
                    </div>
                </div>

                <div class="community-events check-group">
                    <h3>Community Events</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="galleries" id="check-galleries" checked>
                        <label class="form-check-label" for="check-galleries">Galleries</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="speakers" id="check-speakers" checked>
                        <label class="form-check-label" for="check-speakers">Speakers</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="workshop" id="check-workshop" checked>
                        <label class="form-check-label" for="check-workshop">Workshops</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="fairs" id="check-fairs" checked>
                        <label class="form-check-label" for="check-fairs">Fairs</label>
                    </div>
                </div>

            </div>


            <!-- Calendar -->
            <div class="col-10">
                <div class="calendar">

                    <!-- Row 1 -->
                    <div class="cal-row">
                        <div class="cal-day day-passed left top">
                            <p class="day-number">1</p>
                        </div>
                        <div class="cal-day day-passed top">
                            <p class="day-number">2</p>
                        </div>
                        <div class="cal-day day-passed top">
                            <p class="day-number">3</p>
                        </div>
                        <div class="cal-day day-passed top">
                            <p class="day-number">4</p>
                        </div>
                        <div class="cal-day top day-current">
                            <p class="day-number">5</p>
                        </div>
                        <div class="cal-day top">
                            <p class="day-number">6</p>
                        </div>
                        <div class="cal-day top right">
                            <p class="day-number">7</p>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="cal-row">
                        <div class="cal-day left">
                            <p class="day-number">8</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">9</p>
                            <div class="event">
                                <p>Guest Speaker</p>
                            </div>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">10</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">11</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">12</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">13</p>
                        </div>
                        <div class="cal-day right">
                            <p class="day-number">14</p>
                        </div>
                    </div>


                    <!-- Row 3 -->
                    <div class="cal-row">
                        <div class="cal-day left">
                            <p class="day-number">15</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">16</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">17</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">18</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">19</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">20</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">21</p>
                        </div>
                    </div>


                    <!-- Row 4 -->
                    <div class="cal-row">
                        <div class="cal-day left">
                            <p class="day-number">22</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">23</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">24</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">25</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">26</p>
                        </div>
                        <div class="cal-day">
                            <p class="day-number">27</p>
                        </div>
                        <div class="cal-day right">
                            <p class="day-number">28</p>
                        </div>
                    </div>


                    <!-- Row 5 -->
                    <div class="cal-row">
                        <div class="cal-day bottom left">
                            <p class="day-number">29</p>
                        </div>
                        <div class="cal-day bottom">
                            <p class="day-number">30</p>
                        </div>
                        <div class="cal-day bottom">
                            <p class="day-number">31</p>
                        </div>
                        <div class="cal-day bottom">
                            <p class="day-number">1</p>
                        </div>
                        <div class="cal-day bottom">
                            <p class="day-number">2</p>
                        </div>
                        <div class="cal-day bottom">
                            <p class="day-number">3</p>
                        </div>
                        <div class="cal-day bottom right">
                            <p class="day-number">4</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modal-complete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="day">Day</label>
                                <select id="day" class="form-control">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="month">Month</label>
                                <select id="month" class="form-control">
                                    <option selected>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="year">Year</label>
                                <select id="year" class="form-control">
                                    <option selected>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Event Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="venue">Venue</label>
                            <input type="text" class="form-control" id="venue" placeholder="Venue">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="type">Event Category</label>
                                <select id="type" class="form-control">
                                    <option selected>Gallery</option>
                                    <option>Speaker</option>
                                    <option>Student Event</option>
                                    <option>Workshop</option>
                                    <option>Fair</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="time">Time</label>
                                <input type="text" class="form-control" id="time" placeholder="11:00 AM">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-primary save">Save</a>
                </div>
            </div>
        </div>
    </div>

</div>



<?php
include "includes/footer.php";
?>