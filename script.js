var clickCount = 0;

function sendMail(){

    var name = document.getElementById("name_id").value;
    var email = document.getElementById("email_id").value;
    var subject = document.getElementById("subject_id").value;
    var message = document.getElementById("message_id").value;

    var empty = document.getElementById(" "); //empty var

    if (name == "") {
        document.getElementById(" "); // empty id
    }
    else if(name && email && subject && message && empty !== " "){
        var spiner = document.getElementById("spin");
        spiner.classList.remove("d-none");  // Remove d-none
        spiner.disabled = false; // false btn disableed
    
        // btn disable after 1 click
        if (clickCount = clickCount + 1) {
            var sendBtn = document.getElementById("sendBtn");
            sendBtn.disabled = true;
        }
    }
    
    var f = new FormData();
    f.append("n",name);
    f.append("e",email);
    f.append("s",subject);
    f.append("m",message);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function (){
        if(r.readyState == 4){
            var t = r.responseText;

            if (t == 'Success') {
                document.getElementById("spin").innerHTML = t;
                document.getElementById("spin").className = "d-none";
                // location.reload();

                // success alert
                var salert = document.getElementById("salert");
                salert.classList.remove("d-none");
                setInterval(function() {
                    document.getElementById("salert").className = "d-none";
                }, 3000);

                //send btn enable
                sendBtn.disabled = false;

                //clear fields
                ["name_id", "email_id", "subject_id", "message_id"].forEach(function(id) {
                    document.getElementById(id).value = "";
                });

                if(name && email && subject && message == " "){
                    location.href = "email.php";
                }

            }else{
                alert(t);
            }

        }

    }
    
    r.open("POST","emailProcess1.php",true);
    r.send(f);

}


// progress
// if (t == 'Success') {
//     document.getElementById("pbar").innerHTML = t;
//     document.getElementById("pbar").style.width = "100%";
//     location.reload();
// }else{
//     alert(t);
// }




// function sendEmail(){

//     var mail = {
//         from_name : document.getElementById("full_name").value,
//         email_id : document.getElementById("email_id").value,
//         subject : document.getElementById("subject").value,
//         message : document.getElementById("message").value
//     }

//     emailjs.send("service_c1khu8p" , "template_tqxw9pd" , mail).then(function(res) {

//         alert("Message sent successfully!" + res.status);

//     })

// }