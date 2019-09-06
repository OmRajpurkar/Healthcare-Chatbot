var select = document.getElementById("selectCountryCode");
var options = ["91", "1", "44", "61", "81"];

for (option in options) {

  select.add(new Option(options[option]));

};

async function validate() {

  function setblinkColor() {
    document.body.style.background = "green"
    setTimeout("blinkColor()", 500)
  }

  if (document.form1.name.value == "") {
    alert("Please provide your name!");
    document.form1.name.focus();
    return false;
  } else {
    if (!(ValidateName(document.form1.name.value))) {
      alert("Please enter name only in Characters");
    }
  }

  if (document.form1.email1.value == "") {
    alert("Please provide your Email!");
    document.form1.email1.focus();
    return false;
  } else {
    if (!(ValidateEmail(document.form1.email1.value))) {
      alert("Invalid Email");
    }
  }

  if (document.form1.phone.value == "") {
    alert("Please provide your Phone Number!");
    document.form1.phone.focus();
    return false;
  } else {
    if (!(phonenumber(document.form1.phone.value))) {
      alert("Invalid Phone Number");
    }
  }

  ValidatePassword(form1);

  return (true);
}

function ValidateName(inputtext) {
  var alphaExp = /^[a-zA-Z _]+$/;
  if (inputtext.match(alphaExp)) {
    return true;
  } else {
    document.form1.name.focus();
    return false;
  }
}

function phonenumber(inputtxt) {
  var phoneno = /^\d{10}$/;
  if ((inputtxt.match(phoneno))) {
    return true;
  } else {
    document.form1.phone.focus();
    return false;
  }
}

function ValidateEmail(inputText) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (inputText.match(mailformat)) {
    return true;
  } else {
    document.form1.email1.focus();
    return false;
  }
}

function ValidatePassword(form) {
  if (form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
    if (form.pwd1.value.length < 6) {
      alert("Error: Password must contain at least six characters!");
      $("body").css("background-color","red");
      setTimeout(function(){
        $("body").css("background-color","#00C1E1");
      },300);
      form.pwd1.focus();
      return false;
    }
    if (form.pwd1.value == form.name.value) {
      alert("Error: Password must be different from Username!");
      $("body").css("background-color","red");
      setTimeout(function(){
        $("body").css("background-color","#00C1E1");
      },300);
      form.pwd1.focus();
      return false;
    }
    re = /[0-9]/;
    if (!re.test(form.pwd1.value)) {
      alert("Error: password must contain at least one number (0-9)!");
      $("body").css("background-color","red");
      setTimeout(function(){
        $("body").css("background-color","#00C1E1");
      },300);
      form.pwd1.focus();
      return false;
    }
    re = /[a-z]/;
    if (!re.test(form.pwd1.value)) {
      alert("Error: password must contain at least one lowercase letter (a-z)!");
      $("body").css("background-color","red");
      setTimeout(function(){
        $("body").css("background-color","#00C1E1");
      },300);
      form.pwd1.focus();
      return false;
    }
    re = /[A-Z]/;
    if (!re.test(form.pwd1.value)) {
      alert("Error: password must contain at least one uppercase letter (A-Z)!");
      $("body").css("background-color","red");
      setTimeout(function(){
        $("body").css("background-color","#00C1E1");
      },1000);
      form.pwd1.focus();
      return false;
    }
  } else {
    alert("Error: Please check that you've entered and confirmed your password!");
    $("body").css("background-color","red");
    setTimeout(function(){
      $("body").css("background-color","#00C1E1");
    },300);
    form.pwd1.focus();
    return false;
  }

  return true;
}
