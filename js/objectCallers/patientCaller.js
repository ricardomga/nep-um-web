//api caller to get the patient profile 
function getPatientProfile(){
 $(document).ready(function () {
             var jsonData; 
                     $.ajax(
                    {
                        type: "POST",
                        url: "http://localhost/nep-um-web/api/",
                        dataType: 'json',
                        data: {
                        object: 'Patient',
                        function: 'getPatientById',
                        idPatient: $('#idPatientProfile').val()
                      },
                statusCode: {
                    200: function(response){
                        jsonData = response;
                        $('#nameProfile').text(jsonData.name + ' ' + jsonData.lastName);
                        $('#dataProfile').text(jsonData.birthDate);
                        $('#genderProfile').text(jsonData.gender);
                        $('#nifProfile').text(jsonData.nif);
                        $('#adressProfile').text(jsonData.adress);
                        $('#emailProfile').text(jsonData.email);
                        $('#numberProfile').text(jsonData.numTel);
                        $('#ccProfile').text(jsonData.numCc);
                        $('#maritalStateProfile').text(jsonData.maritalStatus);
                        $('#nationalityProfile').text(jsonData.nationality);
                        $('#bloodGroupProfile').text(jsonData.bloodGroup);
                        $('#pathologyProfile').text(jsonData.pathology);
                },                  
                   404: function(){
                        console.log("Patient does not exist");
                    }
                }
              });
          });
      }