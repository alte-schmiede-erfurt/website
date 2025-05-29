function checkForm() {

  var strFehler='';

  if (!validEmail(document.forms[0].email.value)) {

    strFehler += "\nE-Mail-Adresse unvollstaendig\n";}

if (!validphone(document.forms[0].phone.value)) {

    strFehler += "\nBei Telefon nur Nummern,+,-,keine Leerzeichen\n";}


  if (document.forms[0].phone.value===""){

    strFehler += "\nTelefon fehlt\n";}




  if (strFehler.length>0) {

    alert(strFehler);


    return(false);

  }

}

function validEmail(email) {

  var strReg = "^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$";

  var regex = new RegExp(strReg);

  return(regex.test(email));

}

function validphone(phone) {


  var strReg = "^[0-9\\-\\+]*$";

  var regex = new RegExp(strReg);

  return(regex.test(phone));

}
