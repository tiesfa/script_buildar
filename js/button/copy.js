const generated_code = document.getElementById("exampleFormControlTextarea1");
const copy_button = document.getElementById("copy_button");

copy_button.onclick = function() {
  // Step 1 - Select the textarea
  generated_code.select();

  // Step 2 - Copying the text
  document.execCommand("Copy");
};
