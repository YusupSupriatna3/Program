$(document).ready(function () {
    $("#login").validate({
		rules: {
			username: {
				required:true
			},
			pwd: {
				required: true
			}
		},
		messages: {
			username: {
				required: "Username Tidak Boleh Kosong"
			},
			pwd: {
				required: "Password Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
    });
    
    $("#guru").validate({
		rules: {
			nip: {
                required:true,
                number:true
			},
			nama: {
				required: true
            },
            alamat: {
				required: true
            },
            telp: {
                required: true,
                number:true
            },
            jk: {
				required: true
            },
            username: {
				required:true
			},
			pwd: {
				required: true
			}
		},
		messages: {
            nip: {
                required:"NIP Tidak Boleh Kosong",
                number:"NIP Harus Angka"
			},
			nama: {
				required: "Nama Tidak Boleh Kosong"
            },
            alamat: {
				required: "Alamat Tidak Boleh Kosong"
            },
            telp: {
                required: "Telepon Tidak Boleh Kosong",
                number:"Telepon Harus Angka"
            },
            jk: {
				required: "Jenis Kelamin Tidak Boleh Kosong"
            },
			username: {
				required: "Username Tidak Boleh Kosong"
			},
			pwd: {
				required: "Password Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
    });
    
    $("#editguru").validate({
		rules: {
			// nip: {
            //     required:true,
            //     number:true
			// },
			nama: {
				required: true
            },
            alamat: {
				required: true
            },
            telp: {
                required: true,
                number:true
            },
            jk: {
				required: true
            },
            username: {
				required:true
			},
			pwd: {
				required: true
			}
		},
		messages: {
            // nip: {
            //     required:"NIP Tidak Boleh Kosong",
            //     number:"NIP Harus Angka"
			// },
			nama: {
				required: "Nama Tidak Boleh Kosong"
            },
            alamat: {
				required: "Alamat Tidak Boleh Kosong"
            },
            telp: {
                required: "Telepon Tidak Boleh Kosong",
                number:"Telepon Harus Angka"
            },
            jk: {
				required: "Jenis Kelamin Tidak Boleh Kosong"
            },
			username: {
				required: "Username Tidak Boleh Kosong"
			},
			pwd: {
				required: "Password Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
    });
    
    $("#siswa").validate({
		rules: {
			nis: {
                required:true,
                number:true
			},
			nama: {
				required: true
            },
            alamat: {
				required: true
            },
            telp: {
                required: true,
                number:true
            },
            jk: {
				required: true
            },
            username: {
				required:true
			},
			pwd: {
				required: true
			}
		},
		messages: {
            nis: {
                required:"NIS Tidak Boleh Kosong",
                number:"NIS Harus Angka"
			},
			nama: {
				required: "Nama Tidak Boleh Kosong"
            },
            alamat: {
				required: "Alamat Tidak Boleh Kosong"
            },
            telp: {
                required: "Telepon Tidak Boleh Kosong",
                number:"Telepon Harus Angka"
            },
            jk: {
				required: "Jenis Kelamin Tidak Boleh Kosong"
            },
			username: {
				required: "Username Tidak Boleh Kosong"
			},
			pwd: {
				required: "Password Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
    });
    
    $("#editsiswa").validate({
		rules: {
			// nip: {
            //     required:true,
            //     number:true
			// },
			nama: {
				required: true
            },
            alamat: {
				required: true
            },
            telp: {
                required: true,
                number:true
            },
            jk: {
				required: true
            },
            username: {
				required:true
			},
			pwd: {
				required: true
			}
		},
		messages: {
            // nip: {
            //     required:"NIP Tidak Boleh Kosong",
            //     number:"NIP Harus Angka"
			// },
			nama: {
				required: "Nama Tidak Boleh Kosong"
            },
            alamat: {
				required: "Alamat Tidak Boleh Kosong"
            },
            telp: {
                required: "Telepon Tidak Boleh Kosong",
                number:"Telepon Harus Angka"
            },
            jk: {
				required: "Jenis Kelamin Tidak Boleh Kosong"
            },
			username: {
				required: "Username Tidak Boleh Kosong"
			},
			pwd: {
				required: "Password Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
	});
	
	$("#prakerin").validate({
		rules: {
			nis: {
                required:true,
                number:true
			},
			nama: {
				required: true
            },
            alamat: {
				required: true
			},
			tempat : {
				required : true
			},
			kota : {
				required : true
			},
            telp: {
                required: true,
                number:true
            },
            jk: {
				required: true
            },
            username: {
				required:true
			},
			pwd: {
				required: true
			}
		},
		messages: {
            nis: {
                required:"NIS Tidak Boleh Kosong",
                number:"NIS Harus Angka"
			},
			nama: {
				required: "Nama Tidak Boleh Kosong"
            },
            alamat: {
				required: "Alamat Tidak Boleh Kosong"
			},
			tempat : {
				required: "Tempat Tidak Boleh Kosong"
			},
			kota : {
				required: "Kota Tidak Boleh Kosong"
			},
            telp: {
                required: "Telepon Tidak Boleh Kosong",
                number:"Telepon Harus Angka"
            },
            jk: {
				required: "Jenis Kelamin Tidak Boleh Kosong"
            },
			username: {
				required: "Username Tidak Boleh Kosong"
			},
			pwd: {
				required: "Password Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
    });
    
    $("#editprakerin").validate({
		rules: {
			nis: {
                required:true,
                number:true
			},
			nama: {
				required: true
            },
            alamat: {
				required: true
			},
			tempat : {
				required : true
			},
			kota : {
				required : true
			},
            telp: {
                required: true,
                number:true
            },
            jk: {
				required: true
            },
            username: {
				required:true
			},
			pwd: {
				required: true
			}
		},
		messages: {
            nis: {
                required:"NIS Tidak Boleh Kosong",
                number:"NIS Harus Angka"
			},
			nama: {
				required: "Nama Tidak Boleh Kosong"
            },
            alamat: {
				required: "Alamat Tidak Boleh Kosong"
			},
			tempat : {
				required: "Tempat Tidak Boleh Kosong"
			},
			kota : {
				required: "Kota Tidak Boleh Kosong"
			},
            telp: {
                required: "Telepon Tidak Boleh Kosong",
                number:"Telepon Harus Angka"
            },
            jk: {
				required: "Jenis Kelamin Tidak Boleh Kosong"
            },
			username: {
				required: "Username Tidak Boleh Kosong"
			},
			pwd: {
				required: "Password Tidak Boleh Kosong"
			}
		},
		submitHandler: function(form) {
	      form.submit();
	    }
    });
})
