
$(document).ready(function () {

    $('.target').hover(function () {
        if (!$(this).parent().hasClass('highlightrow')) {
            $(this).parent().addClass('hoverStyle');
        }
    },
    function () {
        $(this).parent().removeClass('hoverStyle');
    });

    GetEventList();
});

function SubmitSignUp(id) {
    if ($('#form' + id).valid()) {
        $('#submit' + id).hide();
        $('#img' + id).show();

        var url = 'http://www.artoflivingsfba.org/takeabreathbayarea/eventsvc.php?' + 'id=' + id + '&name=' + $('#name' + id).val() + '&email=' + $('#email' + id).val() + '&num_persons=' + $('#np' + id).val() + '&callback=?';
        $.getJSON(url, function (data) {
            $('#img' + id).hide();
            $('#submit' + id).show();
            if (data.error == true) {
                $('#divResult' + id).removeClass().addClass('fail');
                $('#divResult' + id).text("Sorry, we're having some technical problems. Please try again or contact the coordinator of this session.");
                $('#divResult' + id).show(500);
            }
            else {
                $('#divResult' + id).removeClass().addClass('success');
                $('#divResult' + id).text("Thank you for signing up! See you at the session.");
                $('#form' + id).hide();
            }
            $('#divResult' + id).show(500);
        }).fail(function () {
            $('#img' + id).hide();
            $('#divResult' + id).removeClass().addClass('fail');
            $('#divResult' + id).text("Sorry, we're having some technical problems. Please try again or contact the coordinator of this session.");
            $('#divResult' + id).show(500);
            $('#submit' + id).show();
        });

        //$.ajax({
        //    type: 'POST',
        //    url: 'signup.php',
        //    dataType: 'json',
        //    data: {
        //        id: id,
        //        name: $('#name' + id).val(),
        //        email: $('#email' + id).val(),
        //        num_persons: $('#np' + id).val()
        //    },
        //    success: function (data) {
        //        $('#img' + id).hide();
        //        $('#submit' + id).show();
        //        if (data.error == true) {
        //            $('#divResult' + id).removeClass().addClass('fail');
        //            $('#divResult' + id).text("Sorry, we're having some technical problems. Please try again or contact the coordinator of this session.");
        //            $('#divResult' + id).show(500);
        //        }
        //        else {
        //            $('#divResult' + id).removeClass().addClass('success');
        //            $('#divResult' + id).text("Thank you for signing up! See you at the session.");
        //            $('#form' + id).hide();
        //        }
        //        $('#divResult' + id).show(500);
        //    },
        //    error: function (XMLHttpRequest, textStatus, errorThrown) {
        //        $('#img' + id).hide();
        //        $('#divResult' + id).removeClass().addClass('fail');
        //        $('#divResult' + id).text("Sorry, we're having some technical problems. Please try again or contact the coordinator of this session.");
        //        $('#divResult' + id).show(500);
        //        $('#submit' + id).show();
        //    }
        //});
    }
}

function openForm(id) {
    $('.trForm').hide();
    $('.trForm').removeClass('highlightrow');
    $('.trForm').prev().removeClass('highlightrow');
    $('#form' + id).show();
    $('#divResult' + id).hide();
    $('#form' + id).find('label.error').hide();
    $('#name' + id).val('');
    $('#email' + id).val('');
    $('#np' + id).val('1');
    $('#tr' + id).show('slow');
    $('#tr' + id).addClass('highlightrow');
    $('#tr' + id).prev().addClass('highlightrow');
    $('#tr' + id).removeClass('hoverStyle');
    $('#tr' + id).prev().removeClass('hoverStyle');
}

function closeForm(id) {
    $('#tr' + id).hide('slow');
    $('#tr' + id).prev().removeClass('highlightrow');
    $('#tr' + id).removeClass('highlightrow');
    //v.resetForm();
}


function GetEventList() {
    $.getJSON('http://www.artoflivingsfba.org/takeabreathbayarea/eventsvc.php?callback=?', function (data) {
        DisplayEvents(data.events);
    }).fail(function () {
        alert('Error retrieving list of events');
    });
}

function DisplayEvents(data) {
    var strbuilder = '';
    $.each(data, function () {
        var phone = this.event.phone.replace(/-/g, '').replace(/\(/g, '').replace(/\)/g, '');
        strbuilder = '<tr style="color: #333; font-family: Arial, Helvetica, Sans-serif; font-size: 13px;"><td style="padding: 6px; border-bottom: 1px solid #333;">' + this.event.dt + '</td><td style="padding: 6px; border-bottom: 1px solid #333;">' + this.event.city + '</td><td style="padding: 6px; border-bottom: 1px solid #333;">' +
            this.event.title + '</td><td style="padding: 6px; border-bottom: 1px solid #333;">' + this.event.location + '<br/>' + this.event.address + '<br/>' + this.event.city + ', ' + this.event.state + ' ' + this.event.zip_code + '</td><td style="padding: 6px; border-bottom: 1px solid #333;">' +
            '<a style="color: #026bb9" href="tel:' + phone + '">' + this.event.phone + '</a></td><td style="padding: 6px; border-bottom: 1px solid #333; text-aling: center;"><a href=\"javascript:openForm(\'' + this.event.intro_session_id + '\');\"><img src="images/rsvp.gif" border="0" /></td></tr>' +
            '<tr id="tr' + this.event.intro_session_id + '" class="trForm" style="display: none"><td style="border-bottom: 1px solid #333">&nbsp;</td>' +
            '<td colspan="3" class="highlightrow" style="border-bottom: 1px solid #333"><form id="form' + this.event.intro_session_id + '" action="post" style="background-color: rgb(221, 234, 207); color: #333; padding: 3px; font-size: 9pt;">' +
            '<table border="0" cellpadding="1" cellspacing="0" class="highlightrow"><tr><td><span style="font-weight: bold">Name</span><br/><input type="text" size="25" name="name' + this.event.intro_session_id + '" id="name' + this.event.intro_session_id + '" class="required" /></td>' +
            '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></td><td><span style="font-weight: bold">Email</span> <span style="font-size: 0.9em">(you&apos;ll get a confirmation email)</span><br/><input type="text" size="25" name="email' + this.event.intro_session_id + '" id="email' + this.event.intro_session_id + '" class="required email" /></td>' +
            '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><span style="font-weight: bold">Number of Persons</span><br/><select name="np' + this.event.intro_session_id + '" id="np' + this.event.intro_session_id + '"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td>' +
            '<td valign="bottom" style="vertical-align: middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="submit' + this.event.intro_session_id + '" id="submit' + this.event.intro_session_id + '" class="submitBtn" value=" Sign Up " onclick="SubmitSignUp(' + this.event.intro_session_id + ')" /><img id="img' + this.event.intro_session_id + '" src="images/progress.gif" style="display: none" /></td></tr></table>' +
            '</form><table border="0" cellpadding="0" cellspacing="0"><tr><td><div id="divResult' + this.event.intro_session_id + '" style="display: none"></div></td></tr></table></td><td style="text-align: center; border-bottom: 1px solid #333; font-size: 9pt;"><a href="javascript:closeForm(\'' + this.event.intro_session_id + '\');">Close</a></td></tr>';
        $('#tblEvents').append(strbuilder);

        $('#form' + this.event.intro_session_id).validate();
    });
}

