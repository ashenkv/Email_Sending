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
    <!-- email section -->
    <form class="my-5" method="post">

        </div>
        <!-- alerts -->
        <div class="mb-3 col-4">
            <input type="text" id="name" class="form-control m-1" placeholder="full name *" style="letter-spacing:0.05rem;">
        </div>
        <div class="mb-3 col-4">
            <input type="email" id="email" class="form-control m-1" placeholder="email *" style="letter-spacing:0.05rem;">
        </div>
        <div class="mb-3 col-4">
            <input type="text" id="subject" class="form-control m-1" placeholder="subject" style="letter-spacing:0.05rem;">
        </div>
        <div class="mb-3 col-4">
            <textarea type="text" id="message" class="form-control m-1 p-3" rows="5" placeholder="message *" style="letter-spacing:0.05rem;"></textarea>
        </div>
        <div class="col-4 d-flex justify-content-end">
            <button href="#" type="submit" onclick="sendEmail();" class="my-1 py-1 px-3 btn btn-info fs-5 text-light"
                style="letter-spacing:0.1rem;">send
            </button>
        </div>

    </form>
    <!-- email section -->

    <!-- email js -->
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function(){
        emailjs.init({
            publicKey: "MirjItCr7I9WSYO5J",
        });
    })();
    </script>
    <!-- email js -->

    <script src="email.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>