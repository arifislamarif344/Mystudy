<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send a Email</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body{
            margin-top: 90px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Send a Email</h2>
                <p>
                <?php

                    if ( isset( $_REQUEST['success'] ) ) {
                        echo "Mail send Successfully";
                    } elseif ( isset( $_REQUEST['error'] ) ) {
                        echo "Faild";
                    }

                ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="sendmail.php">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Type your name" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Type your email" required>
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" placeholder="Type your subject" required>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message" required></textarea>

                    <input type="submit" value="Send Email">
                </form>
            </div>
        </div>
</body>

</html>
