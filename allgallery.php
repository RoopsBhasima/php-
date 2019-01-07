<?php include 'inc_session.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'inc_headsection.php'; ?>
    <title>Add image</title>
</head>
<body>
<?php include 'inc_navbar.php'; ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="" enctype="multipart/form-data" name="form-gal">
                    <fieldset>
                        <legend><h2>Add Images</h2></legend>

                        <level>Title</level><br>
                        <input type="text" name="title" class="form-control" placeholder="Title"><br>
                        <level>Description</level><br>
                        <input type="text" name="desc" class="form-control" placeholder="Description"><br>
                        <level>Image</level>
                        <input type="file" name="uploadImage" class="form-control">
                        <br>
                        <level>Type:</level>
                        <select size="1" class="form-control">
                            <option value="0" selected>--none--</option>
                            <option value="1">Banner</option>
                            <option value="2">Slider</option>
                            <option value="3">Gallery</option>
                        </select>
                        <br>
                        <level>Choose Post for Gallery</level>
                        <select size="1" class="form-control">
                            <option value="0">--none--</option>
                        </select><br>
                        <level>Status</level><br>
                        <input type="radio" name="status" value="1" checked>Active
                        <input type="radio" name="status" value="0">Deactive
                        <br><br>
                        <input type="submit" name="submit" class="form-control">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

<?php include 'inc_footerscript.php'; ?>
</body>
</html>