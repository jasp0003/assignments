// single line comment
/*
    multi line comment
*/

//Pop up a little message window with an OK button
alert('This is a little message.');

// prompt() displays a window with a text input
var alphabet= '';

while (!alphabet) {
alphabet=prompt('Type alphabet?');
}
// console.log() is for debugging; to see inside variables
console.log(alphabet);
/*
if (name == '' || name == null)
if (name != '' && name != null)
if (name)
if (!name)
*/
if (alphabet) {
	for (var i = 0; i< 10; i++) {
     //Writes some text or HTML into the body>
     document.write(  alphabet+ '<br>');
  }
}