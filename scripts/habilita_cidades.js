function habilitarCampos() {
    if($("#estado").val() == 'RJ') {
        $("#cidades").prop('disabled', false);
    }else{
      $("#cidades").prop('disabled', true);
    $('#cidades').value == '0';
  }
}