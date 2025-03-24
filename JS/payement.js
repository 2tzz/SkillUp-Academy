function validateForm() {
    let cardName = document.forms["myForm"]["NameOnCard"].value;
    let CardNumber = document.forms["myForm"]["CardNumber"].value;
    let expMonth = document.forms["myForm"]["ExpMn"].value;
    let expYr = document.forms["myForm"]["ExpYr"].value;
    let cvv = document.forms["myForm"]["CVV"].value;

    if (cardName == "") {
        alert("Name on Card must be filled Out!");
        return false;
    }

    // Card Validation
    if(CardNumber == ""){
        alert("Card Number must be filled Out!");
        return false;

    } else if(CardNumber.length<16){
        alert("Invalid Card Number..Please Check again!");
        return false;
    }
    if(expMonth == ""){
        alert("Expiry Month must be filled Out!");
        return false;
    }

    // Exp Year Validation
    if(expYr == ""){
        alert("Expiry Year must be filled Out!");
        return false;
    }else if(expYr.length<4){
        alert("Invalid Expire Year");
        return false;    
    }
    // CVV Validation
    if(cvv == ""){
        alert("CVV must be filled Out!");
        return false;
    }else if(cvv.length<3){
        alert("Invalid CVV.Please Check Again!");
        return false;    
    }
}