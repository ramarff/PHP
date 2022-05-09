const flashData=$(".flash-data").data("flashdata");
// console.log(flashData);

if(flashData){
    Swal({
        title:"Data Mahasiswa",
        text:`Berhasil ${flashData}`,
        type:"success"
    })
}

// tombol-hapus
$(".hapus").on("click", function(e){
    e.preventDefault();
    const href=$(this).attr("href");

    Swal({
      title: 'Apakah anda yakin?',
      text: "Data mahasiswa akan dihapus!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya!'
    }).then((result) => {
      if (result.value) {
        document.location.href=href;
      }
    })
});



// $(function() {

//     $('.tombolTambahData').on('click', function() {
//         $('#formModalLabel').html('Tambah Data Mahasiswa');
//         $('.modal-footer button[type=submit]').html('Tambah Data');
//         $('#nama').val('');
//         $('#nrp').val('');
//         $('#email').val('');
//         $('#jurusan').val('');
//         $('#id').val('');
//     });


//     $('.tampilModalUbah').on('click', function() {
        
//         $('#formModalLabel').html('Ubah Data Mahasiswa');
//         $('.modal-footer button[type=submit]').html('Ubah Data');
//         $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

//         const id = $(this).data('id');
        
//         $.ajax({
//             url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
//             data: {id : id},
//             method: 'post',
//             dataType: 'json',
//             success: function(data) {
//                 $('#nama').val(data.nama);
//                 $('#nrp').val(data.nrp);
//                 $('#email').val(data.email);
//                 $('#jurusan').val(data.jurusan);
//                 $('#id').val(data.id);
//             }
//         });
        
//     });

// });