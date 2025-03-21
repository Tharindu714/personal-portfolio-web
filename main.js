function ADsignout() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text5 = request.responseText;
      if (text5 == "success") {
        window.location = "adminsigning.php";
      } else {
        alert(text5);
      }
    }
  };

  request.open("GET", "ADSignoutProcess.php", true);
  request.send();
}

var av;
function adminVerification() {
  var email = document.getElementById("e");

  var adminForm = new FormData();
  adminForm.append("e", email.value);

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var t = req.responseText;
      if (t == "success") {
        var adminVerificationModal =
          document.getElementById("veriFicationModal");
        av = new bootstrap.Modal(adminVerificationModal);
        av.show();
      } else {
        window.location = "adminsigning.php";
      }
    }
  };
  req.open("POST", "adminVeriFicationProcess.php", true);
  req.send(adminForm);
}

function verify() {
  var VeriFication = document.getElementById("vCode");

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var t = req.responseText;
      if (t == "success") {
        av.hide();
        window.location = "adminpanel.php";
      } else {
        window.location = "adminsigning.php";
      }
    }
  };
  req.open("GET", "veriFicationProcess.php?v=" + VeriFication.value, true);
  req.send();
}

function addYTProduct() {
  var image = document.getElementById("imageuploder");
  var link = document.getElementById("link");

  var form = new FormData();
  form.append("link", link.value);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, image.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text10 = request.responseText;

      if (text10 == "Image Saved Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text10;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text10;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };
  request.open("POST", "Addytprocess.php", true);
  request.send(form);
}


function changeProductimg() {
  var image = document.getElementById("imageuploder");

  image.onchange = function () {
    var file_count = image.files.length;

    if (file_count <= 3) {
      for (var x = 0; x < file_count; x++) {
        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        document.getElementById("i" + x).src = url;
      }
    } else {
      alert("Please Select 3 images or Less than 3 images ");
    }
  };
}

function UpdatePortfolio() {
  var years = document.getElementById("years");
  var customer = document.getElementById("cus");
  var projects = document.getElementById("projects");
  var date = document.getElementById("date");

  var form = new FormData();
  form.append("years", years.value);
  form.append("cus", customer.value);
  form.append("projects", projects.value);
  form.append("date", date.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text6 = request.responseText;
      if (text6 == "success") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "UpdatePortfolio.php", true);
  request.send(form);
}

function UpdateContact() {
  var whatsapp = document.getElementById("wp");
  var office = document.getElementById("office");
  var call = document.getElementById("call");
  var email = document.getElementById("email");

  var form = new FormData();
  form.append("wp", whatsapp.value);
  form.append("office", office.value);
  form.append("call", call.value);
  form.append("email", email.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text6 = request.responseText;
      if (text6 == "success") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "UpdateContact.php", true);
  request.send(form);
}

function UpdateAdmin() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");

  var form = new FormData();
  form.append("fname", fname.value);
  form.append("lname", lname.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text6 = request.responseText;
      if (text6 == "success") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "UpdateAdmin.php", true);
  request.send(form);
}

function UpdateSLinks() {
  var facebook = document.getElementById("facebook");
  var whatsapp = document.getElementById("whatsapp");
  var instagram = document.getElementById("instagram");
  var youtube = document.getElementById("youtube");
  var linkedin = document.getElementById("linkedin");

  var form = new FormData();
  form.append("facebook", facebook.value);
  form.append("whatsapp", whatsapp.value);
  form.append("instagram", instagram.value);
  form.append("youtube", youtube.value);
  form.append("linkedin", linkedin.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text6 = request.responseText;
      if (text6 == "success") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "updateSocialLinks.php", true);
  request.send(form);
}

function addtutes() {
  var yttut = document.getElementById("yttut");
  var form = new FormData();
  form.append("yttut", yttut.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var text15 = request.responseText;

      if (text15 == "Submitted Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    } else {
    }
  };

  request.open("POST", "Updatetutorial.php", true);
  request.send(form);
}

function UpdateSEO() {
  var about = document.getElementById("about");
  var client = document.getElementById("client");
  var pj = document.getElementById("project");
  var skill = document.getElementById("skill");
  var contact = document.getElementById("contact");

  var form = new FormData();
  form.append("about", about.value);
  form.append("client", client.value);
  form.append("project", pj.value);
  form.append("skill", skill.value);
  form.append("contact", contact.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text6 = request.responseText;
      if (text6 == "success") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "Updateseo.php", true);
  request.send(form);
}

function education() {
  var qualification = document.getElementById("qu");
  var year = document.getElementById("year");
  var institute = document.getElementById("ins");

  var form = new FormData();

  form.append("qu", qualification.value);
  form.append("year", year.value);
  form.append("ins", institute.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var text15 = request.responseText;

      if (text15 == "Submitted Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    } else {
    }
  };

  request.open("POST", "eduProcess.php", true);
  request.send(form);
}

function experince() {
  var position = document.getElementById("position");
  var year = document.getElementById("y");
  var institute = document.getElementById("com");

  var form = new FormData();

  form.append("position", position.value);
  form.append("y", year.value);
  form.append("com", institute.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var text15 = request.responseText;

      if (text15 == "Submitted Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    } else {
    }
  };

  request.open("POST", "expProcess.php", true);
  request.send(form);
}

function skilladding() {
  var lang = document.getElementById("lang");
  var percentage = document.getElementById("percentage");
  var color = document.getElementById("color");

  var form = new FormData();
  form.append("lang", lang.value);
  form.append("percentage", percentage.value);
  form.append("color", color.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text6 = request.responseText;
      if (text6 == "Submitted Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "skillProcess.php", true);
  request.send(form);
}

function skillUP() {
  var upercentage = document.getElementById("upercentage");
  var ulang = document.getElementById("ulang");
  var ucolor = document.getElementById("ucolor");

  var form = new FormData;
  form.append("upercentage", upercentage.value);
  form.append("ulang", ulang.value);
  form.append("ucolor", ucolor.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
      if (request.readyState == 4) {
          var text6 = request.responseText;
          if (text6 == "success") {
            window.location.reload();
            document.getElementById("addmsg").innerHTML = text6;
            document.getElementById("addmsg").className ="bi bi-check2-circle fs-5";
            document.getElementById("addalertdiv").className ="alert alert-success";
            document.getElementById("addmsgdiv").className = "d-block";
          } else {
            document.getElementById("addmsg").innerHTML = text6;
            document.getElementById("addmsg").className ="bi bi-x-octagon-fill fs-5";
            document.getElementById("addalertdiv").className = "alert alert-danger";
            document.getElementById("addmsgdiv").className = "d-block";
          }
      }
  }

  request.open("POST", "updateskill.php", true);
  request.send(form);

}

function service() {
  var title = document.getElementById("title");
  var price = document.getElementById("price");
  var desc = document.getElementById("desc");
  var img = document.getElementById("img");

  var form = new FormData();

  form.append("title", title.value);
  form.append("price", price.value);
  form.append("desc", desc.value);
  form.append("img", img.value);


  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var text15 = request.responseText;

      if (text15 == "Submitted Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    } else {
    }
  };

  request.open("POST", "serviceprocess.php", true);
  request.send(form);
}

function serviceUp() {
  var title = document.getElementById("utitle");
  var price = document.getElementById("uprice");
  var desc = document.getElementById("udesc");
  var img = document.getElementById("uimg");

  var form = new FormData;
  form.append("utitle", title.value);
  form.append("uprice", price.value);
  form.append("udesc", desc.value);
  form.append("uimg", img.value);


  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
      if (request.readyState == 4) {
          var text6 = request.responseText;
          if (text6 == "success") {
            window.location.reload();
            document.getElementById("addmsg").innerHTML = text6;
            document.getElementById("addmsg").className ="bi bi-check2-circle fs-5";
            document.getElementById("addalertdiv").className ="alert alert-success";
            document.getElementById("addmsgdiv").className = "d-block";
          } else {
            document.getElementById("addmsg").innerHTML = text6;
            document.getElementById("addmsg").className ="bi bi-x-octagon-fill fs-5";
            document.getElementById("addalertdiv").className = "alert alert-danger";
            document.getElementById("addmsgdiv").className = "d-block";
          }
      }
  }

  request.open("POST", "updateServiceprocess.php", true);
  request.send(form);

}

function changeProductimg() {
  var image = document.getElementById("imageuploder");

  image.onchange = function () {
    var file_count = image.files.length;

    if (file_count <= 3) {
      for (var x = 0; x < file_count; x++) {
        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        document.getElementById("i" + x).src = url;
      }
    } else {
      alert("Please Select 3 images or Less than 3 images ");
    }
  };
}

function addYTProduct() {
  var image = document.getElementById("imageuploder");
  var link = document.getElementById("link");
  var proj = document.getElementById("proj_title");

  var form = new FormData();
  form.append("link", link.value);
  form.append("proj_title", proj.value);


  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, image.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text10 = request.responseText;

      if (text10 == "Image Saved Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text10;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text10;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };
  request.open("POST", "addYTprocess.php", true);
  request.send(form);
}

function blockfeed(id) {
  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
      if (req.readyState == 4) {
          var txt = req.responseText;
          if (txt == "Approved") {
              window.location.reload();
              document.getElementById("UB" + id).innerHTML = "<i class='bi bi-patch-check-fill fs-1'></i>";
              document.getElementById("UB" + id).classList = "btn text-success fw-bold";
          } else if (txt == "rejected") {
              window.location.reload();
              document.getElementById("UB" + id).innerHTML = "<i class='bi bi-exclamation-diamond-fill fs-1'></i>";
              document.getElementById("UB" + id).classList = "btn text-danger fw-bold";
          } else {
              alert(txt);
          }
      }
  }

  req.open("GET", "FeedBlockProcess.php?id=" + id, true);
  req.send();
}

function feedchangeProductimg() {
  var image = document.getElementById("fimageuploder");

  image.onchange = function () {
    var file_count = image.files.length;

    if (file_count <= 1) {
      for (var x = 0; x < file_count; x++) {
        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        document.getElementById("f" + x).src = url;
      }
    } else {
      alert("Please Select a image");
    }
  };
}

function feedbackpro() {
  var fmage = document.getElementById("fimageuploder");
  var feedname = document.getElementById("feedname");
  var designation = document.getElementById("designation");
  var feedbackpro = document.getElementById("feedbackpro");

  var form = new FormData();
  form.append("feedname", feedname.value);
  form.append("designation", designation.value);
  form.append("feedbackpro", feedbackpro.value);


  var file_count = fmage.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, fmage.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text10 = request.responseText;

      if (text10 == "Image Saved Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text10;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text10;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };
  request.open("POST", "feedbackProcess.php", true);
  request.send(form);
}

function emailcustomer() {
  var sendEmail = document.getElementById("mess_email");

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      var text11 = req.responseText;
      if (text11 == "Submitted Successfully") {
        alert(
          "Thanks for contacting me! <br> Your message has been Recieved to us.<br>Please check your email account!"
        );
      } else {
        alert(text11);
      }
    }
  };

  req.open("GET", "contactemail.php?mess_email=" + sendEmail.value, true);
  req.send();
}

function orderFromMe() {
  var m_name = document.getElementById("mess_name");
  var m_email = document.getElementById("mess_email");
  var m_mobile = document.getElementById("mess_mobile");
  var m_subject = document.getElementById("mess_subject");
  var m_desc = document.getElementById("message_desc");


  var form = new FormData();

  form.append("mess_name", m_name.value);
  form.append("mess_email", m_email.value);
  form.append("mess_mobile", m_mobile.value);
  form.append("mess_subject", m_subject.value);
  form.append("message_desc", m_desc.value);


  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var text15 = request.responseText;

      if (text15 == "Submitted Successfully <br> Check your Email") {
        emailcustomer();
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    } else {
    }
  };

  request.open("POST", "orderProcess.php", true);
  request.send(form);
}
