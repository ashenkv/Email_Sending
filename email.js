
function sendEmail(){

    var mail = {
        from_name : document.getElementById("name").value,
        email_id : document.getElementById("email").value,
        subject : document.getElementById("subject").value,
        message : document.getElementById("message").value
    }

    emailjs.send("service_ofravgs" , "template_u7wvcdr" , mail).then(function(res) {

        alert("Message sent successfully!" + res.status);

    })

}