<?php include("server.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/style.css">

    <meta charset="utf-8" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="C. Tautz - API Upload" />
    <meta property="og:description" content="API Upload. WIP" />
    <meta property="og:url" content="https://christen-tautz.de/api/upload" />
    <meta name="theme-color" content="#8aff86">

    <title>API Upload</title>

    <?php if ($_GET['status'] == "success") {
        array_push($notifs, "Successfully uploaded!");
    } ?>

</head>

<body>
    <div class="wrapper">
        <div class="navigationbar">
            <a onclick="location.href='/'">Home</a>
            <a class="active" href='/api'>API</a>
            <a onclick="location.href='/github' ">Github</a>
            <a onclick="location.href='/contact' ">Contact</a>
        </div>

        <div id="bg_blur">
            <?php include('errors.php'); ?>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <p>Upload</p>
                <p>You can upload images using your API key here.</p>
                <p>Spoiler: This does nothing yet.</p>
                <label for="endpoint">Endpoint</label>
                <input type="text" placeholder="Enter Endpoint" name="endpoint" value="<?php echo $endpoint; ?>"><br><br>
                <label for="key">API Key</label>
                <input type="password" placeholder="Enter API Key" name="key" value="<?php echo $key; ?>"><br><br>
                <!--<label for="image">Image</label>
                <input type="file" placeholder="No file selected..." name="image"><br><br>-->
                <button type="submit" name="submitAPI">Upload</button>
            </form>
        </div>
    </div>
</body>

</html>