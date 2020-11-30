$( function () {

  $('.done').click(()=> {
    $('.show-removed-todo').toggle()
  });




 
    $("#todoInput").keyup(function() {
      var x = document.getElementById('updateBtn');
      if($(this).val() == "") {
        x.style.display = 'none';
      } else {
        x.style.display = 'block';
      }
    });
    

})

