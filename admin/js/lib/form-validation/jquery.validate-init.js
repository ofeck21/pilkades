
var form_validation = function() {
    var e = function() {
            jQuery(".form-valide").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
                },
                rules: {
                    "val-nik": {
                        required: !0,
                        minlength: 8
                    },
                    "val-hp": {
                        required: !0,
                        minlength: 8
                    },
                    "val-nama": {
                        required: !0,
                        minlength: 3
                    },
                    "val-tmp": {
                        required: !0,
                        minlength: 3
                    },
                    "val-tgl": {
                        required: !0
                    },
                    "val-agama": {
                        required: !0
                    },
                    "val-status": {
                        required: !0
                    },
                    "val-pekerjaan": {
                        required: !0
                    },
                    "val-email": {
                        required: !0,
                        email: !0
                    },
                    "val-password": {
                        required: !0,
                        minlength: 5
                    },
                    "val-confirm-password": {
                        required: !0,
                        equalTo: "#val-password"
                    },
                    "val-select2": {
                        required: !0
                    },
                    "val-select2-multiple": {
                        required: !0,
                        minlength: 2
                    },
                    "val-alamat": {
                        required: !0,
                        minlength: 5
                    },
                    "val-gendre": {
                        required: !0
                    },
                    "val-currency": {
                        required: !0,
                        currency: ["$", !0]
                    },
                    "val-website": {
                        required: !0,
                        url: !0
                    },
                    "val-phoneus": {
                        required: !0,
                        phoneUS: !0
                    },
                    "val-digits": {
                        required: !0,
                        digits: !0
                    },
                    "val-number": {
                        required: !0,
                        number: !0
                    },
                    "val-range": {
                        required: !0,
                        range: [1, 5]
                    },
                    "val-terms": {
                        required: !0
                    }
                },
                messages: {
                    "val-nik": {
                        required: "Masukan NIK",
                        minlength: "NIK harus terdiri Minimal 8 Karakter"
                    },
                    "val-hp": {
                        required: "Masukan Nomor Telepon",
                        minlength: "Nomor HP harus terdiri Minimal 8 Karakter"
                    },
                    "val-nama": {
                        required: "Masukan Nama Lengkap",
                        minlength: "Nama harus terdiri Minimal 3 Karakter"
                    },
                    "val-tmp": {
                        required: "Masukan Tempat Lahir",
                        minlength: "Tempat Lahir harus terdiri Minimal 3 Karakter"
                    },
                    "val-tgl": {
                        required: "Masukan Tanggal Lahir"
                    },
                    "val-agama": {
                        required: "Masukan Agama"
                    },
                    "val-status": {
                        required: "Pilih Status"
                    },
                    "val-pekerjaan": {
                        required: "Masukan Pekerjaan"
                    },
                    "val-gendre": "Pilih Jenis Kelamin",
                    "val-email": "Please enter a valid email address",
                    "val-password": {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    "val-confirm-password": {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    "val-select2": "Please select a value!",
                    "val-select2-multiple": "Please select at least 2 values!",
                    "val-alamat": "Masukan Alamat ",
                    "val-currency": "Please enter a price!",
                    "val-website": "Please enter your website!",
                    "val-phoneus": "Please enter a US phone!",
                    "val-digits": "Please enter only digits!",
                    "val-number": "Please enter a number!",
                    "val-range": "Please enter a number between 1 and 5!",
                    "val-terms": "You must agree to the service terms!"
                }
            })
        }
    return {
        init: function() {
            e(), a(), jQuery(".js-select2").on("change", function() {
                jQuery(this).valid()
            })
        }
    }
}();
jQuery(function() {
    form_validation.init()
});