$.ajax({
    type: "Get",
    url: "landscapes.json",
    dataType: "json",
    success: function (data) {
        $(".profilename").append(data.name);
        $("#profileimage").attr("src", data.profile_picture);
        var bio_tex_div ="";
        if (data.bio != '') {
            bio_tex_div += 'Bio';
        }
        $(".bio-header").append(bio_tex_div);
        $(".bio-text").append(data.bio);
        $(".tel-no-info").attr('href', 'tellto:' + data.phone).html(data.phone);
        $(".email-info").attr('href', 'mailto:' + data.email).html(data.email);
        var html_Card = "";
        $.each(data.album, function (i, item)
            { 
                html_Card +=
                "<div class='col-12 col-md-4 mb-3'><div class='card mb-2'><img class='card-img' src='/" +
                item.img +
                "'alt='"+item.title+"'/> <div class='card-img-overlay h-100 d-flex flex-column justify-content-center'><h5 class='card-title text-white'>" +
                item.title +
                "</h5></div><div class='card-footer bg-white'><div class='mb-2'>" +
                item.description +
                "</div><div class='float-right'>" +
                item.date +
                "</div>";
               if (item.featured) {
                 html_Card +=
                  "<div class='float-left'><i class='fa fa-heart' style='font-size:20px;color:red'></i></div>";
                }
                html_Card += "</div></div></div>";
            }          
        );
        $(".main-card-divs").append(html_Card);

    },
    error: function () {
        alert("json not found");
    }
});