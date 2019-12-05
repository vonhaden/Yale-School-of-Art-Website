<?php
// set page title
$pageTitle = 'Upload File';

// set meta description
$metaDescription = '';

// includes
include "includes/head.php";
include "includes/nav.php";

?>

<div class="upload-page">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h1>Upload Art to a Gallery</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form>
                    <!-- File -->
                    <div class="form-group">
                        <p>Pick a File</p>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="form-group">
                        <label for="upload-title">Art Submission Title</label>
                        <input type="text" class="form-control" id="upload-title" placeholder="Title">
                    </div>

                    <!-- Name and Program -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="upload-name">Student Name</label>
                            <input type="text" class="form-control" id="upload-name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="upload-program">Program</label>
                            <select id="upload-program" class="form-control">
                                <option selected>Choose...</option>
                                <option>Graphic Design</option>
                                <option>Painting and Print Making</option>
                                <option>Photography</option>
                                <option>Sculpture</option>
                            </select>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="upload-description">Description</label>
                        <textarea class="form-control" id="upload-description" rows="3"></textarea>
                    </div>


                    <!-- Gallery Selection -->
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="gallery-select1" name="gallery-select" class="custom-control-input" value="new" checked="checked">
                            <label class="custom-control-label" for="gallery-select1">Upload to New Gallery</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="gallery-select2" name="gallery-select" class="custom-control-input" value="existing">
                            <label class="custom-control-label" for="gallery-select2">Upload to Existing Gallery</label>
                        </div>
                    </div>

                    <!-- New Gallery -->
                    <div class="form-group gallery-new">
                        <label for="upload-title">Name of New Gallery</label>
                        <input type="text" class="form-control" id="upload-title" placeholder="Gallery Name">
                    </div>

                    <!-- Existing Gallery -->
                    <div class="form-group gallery-existing">
                        <label for="upload-program">Add to Gallery</label>
                        <select id="upload-program" class="form-control">
                            <option selected>Choose...</option>
                            <option>Gallery 1</option>
                            <option>Gallery 2</option>
                            <option>Gallery 3</option>
                            <option>Gallery 4</option>
                            <option>Gallery 5</option>
                            <option>Gallery 6</option>
                        </select>
                    </div>



                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-complete">
                        Submit
                    </button>
                </form>
            </div>


        </div>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="modal-complete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Upload Successful</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Your art has been successfully uploaded.</p>
                </div>
                <div class="modal-footer">
                    <a href="upload.php" class="btn btn-grey" data-dismiss="modal">Upload Another</a>
                    <a href="index.php" class="btn btn-primary">Exit</a>
                </div>
            </div>
        </div>
    </div>

</div>






<?php
include "includes/footer.php";
?>