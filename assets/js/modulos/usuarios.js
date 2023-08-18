document.addEventListener("DOMContentLoaded", function () {
  $("#tblUsuarios").DataTable({
    ajax: {
      url: base_url + "usuarios/listar",
      dataSrc: "",
    },
    columns: [
      { data: "Usu_id" },
      { data: "usu_nombres" },
      { data: "usu_apellidos" },
      { data: "usu_correo" },
      { data: "usu_perfil" },
    ],
    language,
    dom,
    buttons,
  });
});
