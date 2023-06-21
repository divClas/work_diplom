document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("burger").addEventListener("click", function () {
        document.querySelector("header").classList.toggle("open")
    })
})


function onEntry(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('element-show');
        }
        // else{
        //     change.target.classList.remove('element-show');
        // }
    });
}

let options = {
    threshold: [0.5]
};
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.grid-item');

for (let elm of elements) {
    observer.observe(elm);
}
const swiper = new Swiper('.image-slider', {

    // If we need pagination


    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: 'true'
    },
    Freemode: true,
    slidesPerView: 2.9,
    autoHieght: true,


});
$(document).ready(function () {
    console.log("OK")
    $("#form").submit(function (e) {
        e.preventDefault()
        let formData = $(this).serialize()
        $.ajax({
            type: "post",
            url: "../vendor/send.php",
            dataType: "html",
            data: formData,
            success: function (data) {
                console.log(data),
                    $(".modal").addClass("open");
                $("#close-btn").on("click", function () {
                    $(".modal").removeClass("open");
                })
                $("#form")[0].reset(),
                    console.log($(".modal").html())
            },
            error: function (data) {
                mess.html('<div class="alert alert-danger"> Ошибка отправки, проверьте заполнение формы!</div>')

            }

        });
    })
})
$("#open_form").on("click", function () {
    if ($(".form_ad_manager").hasClass("set")) {
        $(".form_ad_manager").removeClass("set");
        $("#open_form").removeClass("remove");
    }
    else {
        $("#open_form").addClass("remove");
        $(".form_ad_manager").addClass("set");
    }
})
$("#open_form2").on("click", function () {
    if ($(".form_ad_manager2").hasClass("set")) {
        $(".form_ad_manager2").removeClass("set");
        $("#open_form2").removeClass("remove");
    }
    else {
        $("#open_form2").addClass("remove");
        $(".form_ad_manager2").addClass("set");
    }
})


$("#open_manager").on("click", function () {
    console.log(
        'ok2'
    )
    if ($(".table__admin").hasClass("add")) {
        $("#open_manager").removeClass("remove")
        $(".table__admin").removeClass("add");
    }
    else {
        $("#open_manager").addClass("remove")
        $(".table__admin").addClass("add");
    }
});
$("#open_manager2").on("click", function () {

    if ($(".table__admin2").hasClass("add")) {
        $("#open_manager2").removeClass("remove")
        $(".table__admin2").removeClass("add");
    }
    else {
        $("#open_manager2").addClass("remove")
        $(".table__admin2").addClass("add");
    }
});

// const formImage = $("#formImage");
// const fromPreview = $("#fromPreview");
// $("#formImage").on('change', () => {
//     uploadFile($("#formImage").files[0]);
// })
//     function uploadFile(file) {
//         let reader = new FileReader();
//         reader.onload = function (e) {
//             $("#formImage").html(`<img scr="${e.target.result}">`);
//         }
//         reader.oneeror = function (e) {
//             alert('Ошибка')

//         }
//         reader.readAsDataURL(file);
//     }

$(document).ready(function () {
    $("#select_main").change(function () {
        // let id = $(this).attr('id');
        $.ajax({
            url: 'vendor/sort.php',
            dataType: 'html',
            data: { filter: $("#select_main").val() },
            type: 'post',
            success: function (data) {
                console.log(data)
                $('.table_body').html(data)

            }

        });
    })
});
function deleteAplication(id) {
    console.log(id, 'удаление по id');

    if (window.confirm("Вы действительно хотите удалить?")) {
        const ids = id;
        $.ajax({
            type: "get",
            url: "../vendor/delete_aplication.php",
            dataType: "html",
            data: {
                id: id
            },
            success: function (data) {
                console.log(data);
                const ps = `#aplication_${data}`;
                console.log(ps);
                $(ps).remove();
                console.log($(ps).html());  
                $(".modal").addClass("open");
                $("#close-btn").on("click", function () {
                    $(".modal").removeClass("open");
                })
            }


        });
    }

}

function deleteAdmin(id) {
    console.log(id);
    if (window.confirm("Вы действительно хотите удалить?")) {
        $.ajax({
            type: "get",
            url: "../vendor/delete_manager.php",
            dataType: "html",
            data: {
                id: id
            },
            success: function (data) {
                console.log(data)
                $(`#administration_${id}`).remove();
                $(".modal").addClass("open");
                $("#close-btn").on("click", function () {
                    $(".modal").removeClass("open");
                })
            }


        });
    }

}
function deleteSlider(id) {
    console.log(id);
    if (window.confirm("Вы действительно хотите удалить?")) {
        $.ajax({
            type: "get",
            url: "../vendor/delete_for_slider.php",
            dataType: "html",
            data: {
                id: id
            },
            success: function (data) {
                console.log(data);
                console.log($(`#slider_${id}`).html());
                $(`#slider_${id}`).remove();
                // $(".modal").addClass("open");
                // $("#close-btn").on("click", function () {
                //     $(".modal").removeClass("open");
                // })

            }


        });
    }

}





