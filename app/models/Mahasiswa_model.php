<?php 

class Mahasiswa_model {
	private $mhs = [
		[
			"nama" => "Rezza Mochamad Pernanda",
			"nrp" => "173040043",
			"email" => "rezzamuhammad12@gmail.com",
			"jurusan" => "Teknik Informatika"

		],
		[
			"nama" => "Wildan Fauzi Rakhman",
			"nrp" => "173040073",
			"email" => "mangwildan@gmail.com",
			"jurusan" => "Teknik Industri"

		],
		[
			"nama" => "Yogaswara Indra Pratama",
			"nrp" => "173040044",
			"email" => "yogaswara123@gmail.com",
			"jurusan" => "Teknologi Pangan"

		],
		[
			"nama" => "Rio Erika Saputra",
			"nrp" => "173040041",
			"email" => "rio_nax_subang@gmail.com",
			"jurusan" => "Teknik Mesin"

		]
	];

	public function getAllMahasiswa()
	{
		return $this->mhs;
	}


}