$(function () {
    $('#form-login').validate()
});

function urlImage() {

    $("#responseIdentify").text('');

    var subscriptionKey = "db65aa4a153a4f52a96fa44430450b5f";

    var uriBase = "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/detect";

    var params = {
        "returnFaceId": "true",
        "returnFaceLandmarks": "false",
        "returnFaceAttributes": ""
    };

    var sourceImageUrl = document.getElementById("urlImage").value;
    document.querySelector("#returnImage").src = sourceImageUrl;

    $.ajax({
        url: uriBase + "?" + $.param(params),

        beforeSend: function (xhrObj) {
            xhrObj.setRequestHeader("Content-Type", "application/json");
            xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
        },

        type: "POST",

        data: '{"url": ' + '"' + sourceImageUrl + '"}'
    })
        .done(function (data) {
//                 $("#responseIdentify").text(JSON.stringify(data, null, 2));

            console.log('success');
            $.ajax({
                url: "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/identify",

                beforeSend: function (xhrObj) {
                    xhrObj.setRequestHeader("Content-Type", "application/json");
                    xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
                },

                type: "POST",

                data: '{' +
                '"personGroupId":"test_login2",' +
                '"faceIds":["' + JSON.parse(JSON.stringify(data[0].faceId)) + '"],' +
                '"maxNumOfCandidatesReturned":1,' +
                '"confidenceThreshold": 0.5' +
                '}'
            })
                .done(function (identify) {

                    if (JSON.parse(JSON.stringify(identify[0].candidates)) != '') {
                        console.log(JSON.parse(JSON.stringify(identify[0].candidates)));

                        var get_person = JSON.parse(JSON.stringify(identify[0].candidates[0].personId));
                    } else {
                        console.log('null');

                        get_person = '';
                    }

                    $("#password").val(get_person);

                    $.ajax({
                        type: "GET",
                        url: "getLogin",
                        data: {personId: get_person},
                        dataType: "json",
                        success: function (check) {
                            console.log(check);
                            if (check == '') {
                                console.log(check);
                                $('#id_login').attr('disabled', true);
                                $("#email").val('');
                                $("#responseIdentify").text('Maaf wajah anda belum terdaftar, silahkan daftarkan wajah anda');
                            } else {
                                console.log(check);
                                $('#id_login').attr('disabled', false);
                                $("#email").val(check[0].email);
                                $("#responseIdentify").text('Silahkan klik tombol login');
                            }
                        }
                    });

                })

                .fail(function (jqXHR, textStatus, errorThrown) {

                    var errorString = (errorThrown === "") ? "Error. " : errorThrown + " (" + jqXHR.status + "): ";
                    errorString += (jqXHR.responseText === "") ? "" : (jQuery.parseJSON(jqXHR.responseText).message) ?
                            jQuery.parseJSON(jqXHR.responseText).message : jQuery.parseJSON(jqXHR.responseText).error.message;
                    alert(errorString);
                });

        })

        .fail(function (jqXHR, textStatus, errorThrown) {

            var errorString = (errorThrown === "") ? "Error. " : errorThrown + " (" + jqXHR.status + "): ";
            errorString += (jqXHR.responseText === "") ? "" : (jQuery.parseJSON(jqXHR.responseText).message) ?
                    jQuery.parseJSON(jqXHR.responseText).message : jQuery.parseJSON(jqXHR.responseText).error.message;
            alert(errorString);
        });

}