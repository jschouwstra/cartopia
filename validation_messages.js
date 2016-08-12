jQuery.extend(jQuery.validator.messages, {
    required: "Dit veld is nodig.",
    remote: "",
    email: "U heeft een geldig email adres nodig.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Alleen cijfers invoeren alstublieft.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Voer alstublieft niet meer dan {0} karakters in."),
    minlength: jQuery.validator.format("Voer altublieft minstens {0} karakters in."),
    rangelength: jQuery.validator.format("Voert u alstublieft een waarde in tussen {0} en {1} karakters lang."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Voert u altublieft een waarde in dat minder is dan {0}."),
    min: jQuery.validator.format("Voert u altublieft een waarde in dat meer is dan {0}.")
});

