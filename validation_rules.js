// just for the demos, avoids form submit
jQuery.validator.setDefaults({
    //debug: true,
    success: "valid"
});
$("#searchCarForm").validate({
    rules: {
        lastName: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        brandName: {
            required: true,
        },
        color: {
            required: true,
        },
        birthdate: {
            required: true,
        },
        budget: {
            required: true,
            digits: true,
            min: 1
        }
    }
});