$( function() {
    $( "#birthday" ).datepicker();
  } );


$( function() {
    var programmingLanguages = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python"
    ]
    $( "#programmingLanguages" ).autocomplete({
      source: programmingLanguages
    });
  } );
