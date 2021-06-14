$(document).ready(() => {
  $("#envia").on("click", function () {
    const message = $("#mensaje").val();
    const name = $("#name").val();
    if (!message || !name) {
      Swal.fire("¡Hey!", "Tu mensaje no está completo", "warning");
    } else {
      $.ajax({
        method: "POST",
        url: "sendMail.php",
        data: { name, message },
      }).done(function (msg) {
        Swal.fire("¡Bien!", "¡Tu mensaje se ha enviado con éxito!", "success");
      });
    }
  });
});
