$(document).ready(function(){
  $("#form-file-ajax").on('submit', function(event){
  event.preventDefault();
    var formData = new FormData();
    var form = $(this);
    formData.append('file', $('#file').prop("files")[0]);
    $.ajax({
      url: 'upload.php',
      type: 'post',
      processData: false,
      contentType: false,
      cache: false,
      dataType : 'json',
      data: formData,
      success: (data) => {
        let json = JSON.parse(data);
        let jsonOutput;
        
        for (var i in json.User) {
          if (json.User != 'undefined'){
            jsonOutput += "<li>" + json.User[i].Name + " (Родился: " + 
            json.User[i].Age + ")</li>"; 
          }
        }
        jsonOutput += "</ul>";

        document.getElementById('jsonParser').innerHTML = jsonOutput.replace('undefined','');
      },
      error: (data)=>{
        console.log(data);
      }
    });
  });
});
