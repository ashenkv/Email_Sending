<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- validation -->

<!-- if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['sbj'];
    $message = $_POST['msg'];

    $error = [];

    if (empty($_POST['name'])) {
        $error['name'] = 'enter your full name';
    }
    if (empty($_POST['email'])) {
        $error['email'] = 'enter your email';
    }else if( $email != ("/^[a-zA-Z0-9. _%+-]+@[a-zA-Z0-9. -]+\\. [a-zA-Z]{2,}$/")){
        $error['email'] = 'invalid Email address';
    }
    if (empty($_POST['sbj'])) {
        $error['sbj'] = 'enter subject';
    }
    if (empty($_POST['msg'])) {
        $error['msg'] = 'enter your message';
    }

} -->

    <!-- validation -->


    <!-- email section -->
    <form class="my-5" method="post">
        <!-- alerts -->
        <div class="mb-3 col-4">
            <div class="text-success text-center border-0 m-2 py-1 px-3 d-none" id="salert" name="success alert" role="alert">
                "<strong>Message sent successfully!</strong>&nbsp; We'll be in touch."
            </div>

            <div class="text-danger text-center border-0 m-2 py-1 px-3 d-none" id="walert" name="warning alert" role="alert">
                "<strong>Message not sent!</strong> try again.."
            </div>

            <!-- refresh -->
            <a href="email.php" class="btn btn-light text-primary fs-6 mx-1 py-1 px-3 border-0">refresh&nbsp;<i class="bi bi-arrow-clockwise"></i></a>
            <!-- refresh -->
        </div>
        <!-- alerts -->
        <div class="mb-3 col-4">
            <input type="text" id="name_id" class="form-control m-1" placeholder="full name *" style="letter-spacing:0.05rem;">
        </div>
        <div class="mb-3 col-4">
            <input type="email" id="email_id" class="form-control m-1" placeholder="email *" style="letter-spacing:0.05rem;">
        </div>
        <div class="mb-3 col-4">
            <input type="text" id="subject_id" class="form-control m-1" placeholder="subject" style="letter-spacing:0.05rem;">
        </div>
        <div class="mb-3 col-4">
            <textarea type="text" id="message_id" class="form-control m-1 p-3" rows="5" placeholder="message *" style="letter-spacing:0.05rem;"></textarea>
        </div>
        <div class="col-4 d-flex justify-content-end">
            <!-- spinner -->
            <div class="m-1 py-2 px-3 d-flex align-items-center d-none" id="spin" disabled>
                <span class="spinner-border spinner-border-sm text-info" aria-hidden="true"></span>&nbsp;&nbsp;
                <span class="fs-6 text-info">sending</span>
                <!-- <span class="visually-hidden" role="status">Loading...</span> -->
            </div>
            <!-- spinner -->
            
            <button href="#" type="submit" id="sendBtn" onclick="sendMail();" class="my-1 py-1 px-3 btn btn-info fs-5 text-light"
                style="letter-spacing:0.1rem;">send
            </button>
        </div>
        <!-- progres -->
        <!-- <div class="col-1 offset-3 pt-2"> -->
            

            <!-- <div class="progress d-block" id="divbar" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped bg-info" id="pbar" style="width:0%"></div>
            </div> -->
        <!-- </div> -->
        <!-- progres -->
    </form>
    <!-- email section -->

    <!-- success alert -->
    
    <!-- success alert -->

    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>