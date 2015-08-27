function type(currentChar, text, delay, reset, destination)
{
    var dest = jQuery(destination);

    if (dest.length > 0)
    {
      dest.html(text.substr(0, currentChar));
      currentChar++
      if (currentChar>text.length)
      {

        currentChar=1;
         setTimeout(function(){
        	
        	type(currentChar, text, delay, reset, destination);
        }, reset);
      }
      else
      {
        setTimeout(function(){

        	type(currentChar, text, delay, reset, destination);
        }, delay);
      }
    }
}

jQuery(document).ready(function(){
	jQuery('.typewriter').each(function(){
		var $confession = jQuery(this);
		
		//startTyping(jQuery(this).text(), 4, this);
		type(1,$confession.text(), 40, 5000, this);
	});
});