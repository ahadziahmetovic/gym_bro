$(document).ready(function () {

  $("#sifra").on("keydown", function (event) {
      if (event.which == 13) {
          // var id = Number($('#sifra').val().trim());
          var idss = String($("#sifra").val().trim());
          console.log(idss);
          var id = idss.replace(/\&/g, '/');
            
          $("#sifra").val("");
      }
  });



  // KRAJ FETCHOVANJA PODATAKA U TABELU
});

