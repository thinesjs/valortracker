var form = $('#login-form'); 
var submit = $('#submit-btn');

form.on('submit', function (e) {
    
    submit.attr("disabled", "disabled");
    var loadingText = '<span role="status" aria-hidden="true" class="spinner-border spinner-border-sm align-self-center me-2"></span>'; // change submit button text
    if (submit.html() !== loadingText) {
        submit.data('original-text', submit.html());
        submit.html(loadingText);
    }

});