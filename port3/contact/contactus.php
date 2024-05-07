<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactus1.css">
</head>

<body>
    <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <div class="right-content-h2">
                    <h2>PORT MANAGEMENT</h2>
                    <span></span>
                    <div class="right-content-p">
                        <p>Lunagariya Darshil</p>
                        <p>Kakadiya Darsh</p>
                        <p>Ramani Mansi</p>
                    </div>
                    <div class="right-content-p">
                        <p>ICT 4TK2</p>
                        <p>Marwadi University</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form">
            <div class="form-field">
                <form action="contact/contact_send_data.php" method="POST">
                <label>Name *</label>
                <input type="text" size="100" value placeholder="Name" class="form_name" name="name" style="border-bottom: 1px solid white;" required>
                <label>Email *</label>
                <input type="text" size="100" value placeholder="Email" class="form_email" name="email" style="border-bottom: 1px solid white;" required>
                <label>Message *</label>
                <textarea rows="10" cols="100" value placeholder="Message" class="form_message" name="message" style="border-bottom: 1px solid white;" required></textarea>
                <button class="btn btn1" name="submit" type="submit">SEND</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>