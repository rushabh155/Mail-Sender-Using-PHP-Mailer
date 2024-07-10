<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card w-50 d-flex justify-content-center mx-auto">
            <div class="card-header">
            <h4 class="text-center">PHP MAILER (Mail Sender App)</h4>

            </div>
    
        <div class="card-body">

            <form action="sendmail.php" method="POST">

                <div class="mb-3">
                    <label for="fname">Full Name <span class="error">*</span></label>
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Name" required>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="error">*</span></label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <label for="subject">Subject <span class="error">*</span></label>
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                </div>

                <div class="mb-3">
                    <label for="job">Select Position <span class="error">*</span></label>
                    <select name="job" id="job" class="form-control" required>
                        <option value="" hidden>Select Position</option>
                        <option value="BDE">BDE</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="PHP Developer">PHP Developer</option>
                        <option value="Software Developer">Sofware Developer</option>
                        <option value="Software Tester">Software Tester</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="message">Message <span class="error">*</span></label>
                    <textarea name="message" id="message" rows="3" class="form-control" placeholder="Enter Your Message..." required></textarea>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" name="submitContact" class="btn btn-primary">Send Mail</button>
                </div>

            </form>
        </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        var messageText = "<?= $_SESSION['status'] ?? '';  ?>";
        if(messageText != ''){
            Swal.fire({
                title: "Thank you!",
                text: messageText,
                icon: "success"
            });
            <?php unset($_SESSION['status']); ?>
        }

    </script>
</body>
</html>