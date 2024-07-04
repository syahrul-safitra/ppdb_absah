$(document).ready(function () {
    console.log('ini data table');

    $('#my-table').DataTable();
    $('#my-table2').DataTable();

    $('.btn-delete-pendaftaran').on('click', function (e) {

        let form = $(this).closest('form');
        e.preventDefault();

        const data = $(this).data('id');

        swal({
            title: "Apakah anda yakin?",
            text: "Data pendaftaran akan dihapus!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            // jika tombol yes maka pergi ke location href :
            .then((willdelete) => {
                if (willdelete) {
                    form.submit();
                }
            })

    });

    $('.btn-delete-informasi').on('click', function (e) {

        let form = $(this).closest('form');
        e.preventDefault();

        const data = $(this).data('id');

        swal({
            title: "Apakah anda yakin?",
            text: "Data informasi akan dihapus!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            // jika tombol yes maka pergi ke location href :
            .then((willdelete) => {
                if (willdelete) {
                    form.submit();
                }
            })

    });

    $('.bayar').on('click', function (e) {
        e.preventDefault();

        let form = $(this).closest('form');
        swal({
            title: "Apakah anda yakin?",
            text: "Santri telah melakukan pembayaran?",
            icon: "warning",
            buttons: true,
            // dangerMode: true,
        })
            // jika tombol yes maka pergi ke location href :
            .then((willdelete) => {
                if (willdelete) {
                    form.submit();
                }
            })

    });

    $('.terima').on('click', function (e) {
        e.preventDefault();

        let form = $(this).closest('form');
        swal({
            title: "Apakah anda yakin?",
            text: "Santri telah memenuhi berkas persyaratan dan melakukan pembayaran?",
            icon: "warning",
            buttons: true,
            // dangerMode: true,
        })
            // jika tombol yes maka pergi ke location href :
            .then((willdelete) => {
                if (willdelete) {
                    form.submit();
                }
            })

    })
});