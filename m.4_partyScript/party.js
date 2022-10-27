// Security gaurde
// Check queue of people, if person is older than 18 and younger than 35, admit. Otherwise, appologize.

// write variables to contain the limitations of the age.
const minAge = 18;
const maxAge = 35;

// we will loop through the queue.
do {

  // if current person is younger than 18, will print (you are too young)
  const input = prompt("How you old years");
  
  if (input < minAge) {
    alert("you are too young");

  // if older than 35, will print (you are too old)
  } else if (input > maxAge) {
    alert("you are too old");

  // if between 18 and 35, ask for the user name, and welcome the user by his/her name.
  } else if (minAge <= input <= maxAge) {
    const inputName = prompt("what your name ?");
    alert("Welcome "+ inputName +" to party");

  }
} while (confirm("Is there anyone else?"));

