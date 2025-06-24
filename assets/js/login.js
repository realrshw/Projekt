function usernamecheck(){
    var check_text=document.getElementById("usernamefeld").value;
    
// Import dependencies
const Filter = require("bad-words");
// Make a new filter
const filter = new Filter();
const words = require("schimpwoerter.js");
filter.addWords(...words);
}