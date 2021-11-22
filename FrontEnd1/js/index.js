$.ajax({
    type: "Get",
    url: "landscapes.json",
    dataType: "json",
    success: function (data) {
        $('.profile-image > img').attr('src', data.profile_picture);
        var bio_tex_div = '<h1>' + data.name + '</h1>';
        if (data.bio != '') {
            bio_tex_div += '<h6>Bio</h6>';
        }
        bio_tex_div += '<p>' + data.bio + '</p>';
        $('.bio-text').html(bio_tex_div);
        $('.tel-no-info').attr('href', 'tellto:' + data.phone).html(data.phone);
        $('.email-info').attr('href', 'mailto:' + data.email).html(data.email);
        var html_Card = '';

        $.each(data.album, function (i, item) {
            html_Card = '<div class="card">';
            html_Card += '<img src = "' + item.img + '" alt = "' + item.title + '" >';
            html_Card += '<div class="card-title">'+ item.title+'</div>';
            html_Card += '<div class="card-image-box">';
            html_Card += '<p>' + item.description + '</p>';
            html_Card += '<div class="heart-date-div" id=' + item.featured + '>';
            console.log(item.featured);
            console.log(item.featured == true);
            if (item.featured == true) {
                html_Card +='<i class="fa fa-heart" style="font-size:20px;color:red"></i>';
            }else{
                html_Card +='<i class="fa fa-heart" style="font-size:20px;color:white"></i>';
            }
            html_Card += '<p>' + item.date + '</p>';
            html_Card += '</div>';
            html_Card += '</div>';
            html_Card += '</div>';
            $('.main-card-divs').append(html_Card);

        });


    },
    error: function () {
        alert("json not found");
    }
});