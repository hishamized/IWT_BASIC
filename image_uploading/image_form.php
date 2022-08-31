<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="image-form">
        <form action="image_upload.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Upload Image!</legend>
                <div>
                    <label for="file">Choose Image!</label>
                    <input type="file" name="file" id="file"> <br>
                    <button name="upload">Upload Image</button>
                </div>
            </fieldset>
        </form>
    </section>
</body>
</html>