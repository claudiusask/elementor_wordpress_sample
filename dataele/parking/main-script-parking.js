// Blocks the pop up asking for form resubmission on refresh once the form is submitted
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
};