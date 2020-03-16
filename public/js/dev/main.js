
function showModal() {
    var n = $('#term');
    if (n.prop("checked") == true) {
        $('.term-modal').modal('show');
        $('.my-btn').removeAttr("disabled");
    } else {
        $('.my-btn').attr("disabled", "disabled");
    }
}

(function() {
    document.querySelector("#custForm").addEventListener("submit", function(e) {
            e.preventDefault();

            axios.post(this.action, {
                    nama: document.querySelector("#nama").value,
                    email: document.querySelector("#email").value,
                    nomor: document.querySelector("#nomor").value,
                    alamat: document.querySelector("#alamat").value
                })
                .then(response => {
                    // window.location.href = '{{ route('create') }}'
                    clearErrors();
                    this.reset();
                    showModal();
                })
                .catch(error => {
                    const errors = error.response.data.errors;
                    const firstItem = Object.keys(errors)[0];
                    const firstItemDOM = document.getElementById(firstItem);
                    const firstErrorMessage = errors[firstItem][0];
                    errors.forEach((item, i) => {
                      console.log(item);
                    });

                    clearErrors();




                    // show the error message
                    firstItemDOM.insertAdjacentHTML(
                        "afterend",
                        `<div class="text-danger">${firstErrorMessage}</div>`
                    );

                    // highlight the form control with the error
                    firstItemDOM.classList.add("border", "border-danger");
                });
        });

    function clearErrors() {
        // remove all error messages
        const errorMessages = document.querySelectorAll(".text-danger");
        errorMessages.forEach(element => (element.textContent = ""));

        // remove all form controls with highlighted error text box
        const formControls = document.querySelectorAll(".form-control");
        formControls.forEach(element =>
            element.classList.remove("border", "border-danger")
        );
    }
})();

// $('.my-btn').click(function (e) {
//     e.preventDefault();
//     var _token = $('input[name="_token"]').val();
//     var email = $('input[name="email"]').val();
//     var nama = $('input[name="nama"]').val();
//     var nomor = $('input[name="nomor"]').val();
//     var alamat = $('#alamat').val();

//     $.ajax({
//         url: "/customer/add",
//         type: 'post',
//         data: {
//             _token : _token,
//             nama : nama,
//             email : email,
//             nomor : nomor,
//             alamat : alamat,
//         },
//         success: function (data) {
//             const status = data.status;
//             console.log(status);
//             if (status == 'sukses') {
//                 $('.success-modal').modal('show');
//             }else{
//                 alert('Data tidak terverifikasi')
//             }
//         }
//     })
// })
