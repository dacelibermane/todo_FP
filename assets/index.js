$( function () {

  $('.checkbox').click(()=> {
    $('.show-removed-todo').toggle()
  });

 
    $("#todoInput").keyup(function() {
      var x = document.getElementById('addBtn');
      if($(this).val() == "") {
        x.style.display = 'none';
      } else {
        x.style.display = 'block';
      }
    });

    $("#todoInput").keyup(function() {
      var x = document.getElementById('addBtn');
      if($(this).val() == "") {
        x.style.display = 'none';
      } else {
        x.style.display = 'block';
      }
    });
    

})

