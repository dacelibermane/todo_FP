$( function () {

  $('.checkbox').click(()=> {
    $('.show-removed-todo').toggle()
  });
    

})

// I am not sure what exactly your question is, because in the title you said you need to save multiple checkboxes via jQuery and PHP. and in your PHP code you are selecting it. well you have made things quite complicated. assuming you want to save checkboxes value via jQuery to PHP.

// you need AJAX to save the values of checkboxes via jQuery. take for example see the html form below.

// <form action="" method="post" id="save-something"/>
//     <input type="checkbox" name="id[]" value="1"/>One
//     <input type="checkbox" name="id[]" value="2"/>Two
//     <input type="checkbox" name="id[]" value="3"/>Three
//     <input type="checkbox" name="id[]" value="4"/>Four
//     <input type="checkbox" name="id[]" value="5"/>Five
//     <input type="checkbox" name="id[]" value="6"/>Six
//     <input type="checkbox" name="id[]" value="7"/>Seven
//     <button type="submit" name="save">Save</button>
// </form>
// here is the jQuery Code.

// $('#save-something').click(function(e){
//     e.preventDefault();
//     var formData = $(this).serialize();
//     $.ajax({
//         type: 'POST',
//         url:  'process.php',
//         data: formData,
//         success: function(msg){
//             alert('Sucessfully Saved');
//         }
//     });
// });
// and in process.php you can do something like.

// if(isset($_POST['submit'])) {
//     if(!empty($_POST['id'])) {
//         $query = 'Your Insert Query or PHP logic goes here';
//     }
// }