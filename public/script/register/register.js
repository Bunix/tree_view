$(function () {
    $('#form-register').validate()
});

var subscriptionKey = "db65aa4a153a4f52a96fa44430450b5f";

function view_image() {

    var images = document.getElementById('image_url').value;
    document.querySelector('#returnImage').src = images;

}

function create_user() {

    var uriBase = "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups";

    var params = "test_login";

    var personName = document.getElementById('personName').value;

    $.ajax({
        url: uriBase + "/" + params + "/persons",

        beforeSend: function (xhrObj) {
            xhrObj.setRequestHeader("Content-Type", "application/json");
            xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
        },

        type: "POST",

        data: '{' +
        '"name":"' + personName + '",' +
        '"userData":""' +
        '}'
    })
        .done(function (data) {
            console.log('success get Person');
            document.getElementById('person_id').value = JSON.parse(JSON.stringify(data.personId));
            console.log($('#person_id').val())
        })

        .fail(function (jqXHR, textStatus, errorThrown) {

            var errorString = (errorThrown === "") ? "Error. " : errorThrown + " (" + jqXHR.status + "): ";
            errorString += (jqXHR.responseText === "") ? "" : (jQuery.parseJSON(jqXHR.responseText).message) ?
                    jQuery.parseJSON(jqXHR.responseText).message : jQuery.parseJSON(jqXHR.responseText).error.message;
            alert(errorString);
        });
}

function sendPersonFace() {

    var params = {
        "userData": "true"
    };

    $.ajax({
        url: "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/test_login/persons/" + document.getElementById('person_id').value + "/persistedFaces" + "?" + $.param(params),

        beforeSend: function (xhrObj) {
            xhrObj.setRequestHeader("Content-Type", "application/json");
            xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
        },

        type: "POST",

        data: '{"url": ' + '"' + document.querySelector("#returnImage").src + '"}'
    })
        .done(function (data) {
            console.log('success person');
//                        $('#responsePerson').text('success');
            $('#create_person').attr('disabled', false);


        })

        .fail(function (jqXHR, textStatus, errorThrown) {

            var errorString = (errorThrown === "") ? "Error. " : errorThrown + " (" + jqXHR.status + "): ";
            errorString += (jqXHR.responseText === "") ? "" : (jQuery.parseJSON(jqXHR.responseText).message) ?
                    jQuery.parseJSON(jqXHR.responseText).message : jQuery.parseJSON(jqXHR.responseText).error.message;
            alert(errorString);
        });
}

function trainPerson() {
    $.ajax({
        url: "https://westcentralus.api.cognitive.microsoft.com/face/v1.0/persongroups/test_login/train",

        beforeSend: function (xhrObj) {
            xhrObj.setRequestHeader("Content-Type", "application/json");
            xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
        },

        type: "POST"
    })
        .done(function (data) {
            console.log('success train');
        })

        .fail(function (jqXHR, textStatus, errorThrown) {

            var errorString = (errorThrown === "") ? "Error. " : errorThrown + " (" + jqXHR.status + "): ";
            errorString += (jqXHR.responseText === "") ? "" : (jQuery.parseJSON(jqXHR.responseText).message) ?
                    jQuery.parseJSON(jqXHR.responseText).message : jQuery.parseJSON(jqXHR.responseText).error.message;
            alert(errorString);
        });
}