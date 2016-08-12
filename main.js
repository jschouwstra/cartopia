

//function validateBudget(){
//    var budget = $("#budget").val();
//
//    console.log(budget);
//
//    if(budget < 1){
//        
//        $("#budgetFeedback").text("Voer een waarde in.");
//    }
//
//    else{
//        $("#budgetFeedback").text("");
//    }
//}

//function isValidEmailAddress(emailAddress) {
//    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
//    return pattern.test(emailAddress);
//};
//function validateEmail(){
//    var email = $("#email").val();
//
////    if(email.length < 3){
////        $("#emailFeedback").text("Minimaal 3 tekens.");
////    }
//    
//    if(!isValidEmailAddress(email)){
//        $("#emailFeedback").text("Moet een geldig email adres zijn.");
//    }
//
//    else{
//        $("#emailFeedback").text("");
//    }
//}
//function validateBirthdate(){
//    var birthdate = $("#birthdate").val();
//
//    if(birthdate.length < 3){
//        $("#birthdateFeedback").text("Verplicht veld.");
//    }
//
//    else{
//        $("#birthdateFeedback").text("");
//    }
//}
function getBrandColor() {
    /*
     * Depending on selected brand, show the corresponding 
     * selectboxes and hide the others
     */
    var brand = $("#selectBrand option:selected").text();
    if (brand === "Audi") {
        $("#colorAudi").fadeIn();
        //Hide all other colorboxes
        $("#colorBMW").hide();
        $("#colorPeugeot").hide();
        $("#colorFerrari").hide();
        $("#colorPorsche").hide();

    } else if (brand === "BMW") {
        $("#colorBMW").fadeIn();
        //Hide all other colorboxes
        $("#colorAudi").hide();
        $("#colorPeugeot").hide();
        $("#colorFerrari").hide();
        $("#colorPorsche").hide();

    } else if (brand === "Peugeot") {
        $("#colorPeugeot").fadeIn();
        //Hide all other colorboxes
        $("#colorAudi").hide();
        $("#colorFerrari").hide();
        $("#colorPorsche").hide();
        $("#colorBMW").hide();

    } else if (brand === "Ferrari") {
        $("#colorFerrari").fadeIn();
        //Hide all other colorboxes
        $("#colorAudi").hide();
        $("#colorPorsche").hide();
        $("#colorBMW").hide();
        $("#colorPeugeot").hide();

    } else if (brand === "Porsche") {
        $("#colorPorsche").fadeIn();
        //Hide all other colorboxes
        $("#colorAudi").hide();
        $("#colorBMW").hide();
        $("#colorPeugeot").hide();
        $("#colorFerrari").hide();

    } 
    else {
        //Hide all other colorboxes
        $("#colorAudi").hide();
        $("#colorBMW").hide();
        $("#colorPeugeot").hide();
        $("#colorFerrari").hide();
        $("#colorPorsche").hide();
    }
}

$(document).ready(function () {

    $("#errorNoJavascript").hide();

    //Hide all color selectboxes that aren't selected by default
    $("#colorAudi").hide();
    $("#colorBMW").hide();
    $("#colorPeugeot").hide();
    $("#colorFerrari").hide();
    $("#colorPorsche").hide();

    //Trigger datepicker
    $("#birthdate").datepicker({
        dateFormat: "dd-mm-yy"
  }); 
});
