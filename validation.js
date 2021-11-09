function validate() {
   if( document.registrationForm.title.value == "" ) {
      alert( "Please provide the title" );
      document.registrationForm.title.focus() ;
      return false;
   }
   if( document.registrationForm.author.value == "" ) {
      alert( "Please provide the author name" );
      document.registrationForm.title.focus() ;
      return false;
   }
   document.registrationForm.submit();
   return( true );   

}