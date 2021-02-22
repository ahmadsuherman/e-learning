$(function () {
    $(".currency_validate").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            currency: {
                required: true
            },
            currency_amount: {
                required: true
            },
            usd_amount: {
                required: true
            },
            method: {
                required: true
            }
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});

$(function () {
    $(".currency2_validate").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            currency: {
                required: true
            },
            currency_amount: {
                required: true
            },
            usd_amount: {
                required: true
            },
            method: {
                required: true
            }
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});

$(function () {
    $(".contact_validate").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            message: "required",
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});

$(function () {
    $(".signin_validate").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
        },
        messages: {
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});

$(function () {
    $(".signup_validate").validate({
        rules: {
            username: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
        },
        messages: {
            username: "Please enter your username",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});



$(function () {
    $(".personal_validate").validate({
        rules: {
            fullname: "required",
            dob: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            presentaddress: "required",
            permanentaddress: "required",
            city: "required",
            postal: "required",
            country: {
                required: true
            }
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    });
});

$(function () {
    $(".login").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            },
        },
        messages: {
            password: {
                required: "Password wajib di isi"
            },
            email: {
                required: "Email wajib di isi",
                email: "Email tidak valid"
            }
        },
    });
});

$(function () {
    $(".register-student").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            password_confirmation: {
              required: true,
              equalTo: "#password"
            },
            entry_year: "required",
        },
        messages: {
            name: "Nama lengkap wajib di isi",
            password: {
                required: "Password wajib di isi"
            },
            email: {
                required: "Email wajib di isi",
                email: "Email tidak valid"
            },
            password:{
                required: "Kata sandi wajib di isi",
                minlength: "Minimal 8 digit karakter"
            },
            password_confirmation:{
                required: "Ulangi kata sandi wajib di isi",
                equalTo: "Ulangi kata sandi wajib sama"
            },
            entry_year: "Tahun masuk wajib di isi",
        },
    });
});

$(function () {
    $(".register-teacher").validate({
        rules: {
            nip: "required",
            teacher_name: "required",
            teacher_email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            password_confirmation: {
              required: true,
              equalTo: "#password-teacher"
            },
            entry_year: "required",
        },
        messages: {
            teacher_name: "Nama lengkap wajib di isi",
            password: {
                required: "Password wajib di isi"
            },
            teacher_email: {
                required: "Email wajib di isi",
                email: "Email tidak valid"
            },
            password:{
                required: "Kata sandi wajib di isi",
                minlength: "Minimal 8 digit karakter"
            },
            password_confirmation:{
                required: "Ulangi kata sandi wajib di isi",
                equalTo: "Ulangi kata sandi wajib sama"
            },
            entry_year: "Tahun masuk wajib di isi",
            nip: "NIP wajib di isi"
        },
    });
});
